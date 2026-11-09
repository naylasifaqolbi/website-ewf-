<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Carbon\Carbon;
use SimpleXMLElement;
use Throwable;

class NewsService
{
    /**
     * Daftar sumber RSS berita.
     *
     * language:
     * id = berita Indonesia
     * en = berita internasional berbahasa Inggris
     */
    private function sources(): array
    {
        return [
            // ==========================================
            // BERITA BAHASA INDONESIA
            // ==========================================

            [
                'name' => 'CNBC Indonesia',
                'language' => 'id',
                'category' => 'Ekonomi & Bisnis',
                'url' => 'https://www.cnbcindonesia.com/rss',
            ],
            [
                'name' => 'ANTARA Ekonomi',
                'language' => 'id',
                'category' => 'Ekonomi',
                'url' => 'https://www.antaranews.com/rss/ekonomi.xml',
            ],
            [
                'name' => 'ANTARA Finansial',
                'language' => 'id',
                'category' => 'Finansial',
                'url' => 'https://www.antaranews.com/rss/ekonomi-finansial.xml',
            ],

            // ==========================================
            // INTERNATIONAL NEWS - ENGLISH
            // ==========================================

            [
                'name' => 'BBC World News',
                'language' => 'en',
                'category' => 'World News',
                'url' => 'https://feeds.bbci.co.uk/news/world/rss.xml',
            ],
            [
                'name' => 'BBC Business',
                'language' => 'en',
                'category' => 'Business & Economy',
                'url' => 'https://feeds.bbci.co.uk/news/business/rss.xml',
            ],
            [
                'name' => 'The Guardian World',
                'language' => 'en',
                'category' => 'World News',
                'url' => 'https://www.theguardian.com/world/rss',
            ],
            [
                'name' => 'Al Jazeera English',
                'language' => 'en',
                'category' => 'International',
                'url' => 'https://www.aljazeera.com/xml/rss/all.xml',
            ],
            [
                'name' => 'Deutsche Welle',
                'language' => 'en',
                'category' => 'World & Economy',
                'url' => 'https://rss.dw.com/xml/rss-en-all',
            ],
            [
                'name' => 'CNBC Top News',
                'language' => 'en',
                'category' => 'World Business',
                'url' => 'https://www.cnbc.com/id/100003114/device/rss/rss.html',
            ],
        ];
    }

    /**
     * Mengambil seluruh berita dari semua sumber RSS.
     * Hasil disimpan dalam cache selama 5 menit.
     */
    public function getAllNews(): array
    {
        return Cache::remember(
            'ewf_news_aggregator_v2',
            now()->addMinutes(5),
            function () {
                $allNews = [];

                foreach ($this->sources() as $source) {
                    try {
                        $response = Http::timeout(15)
                            ->withHeaders([
                                'User-Agent' => 'Mozilla/5.0 EWFNewsAggregator/1.0',
                                'Accept' => 'application/rss+xml, application/xml, text/xml, */*',
                            ])
                            ->get($source['url']);

                        if (!$response->successful()) {
                            continue;
                        }

                        $xml = $this->parseXml($response->body());

                        if (!$xml) {
                            continue;
                        }

                        // Mengambil item dari RSS channel.
                        $items = $xml->channel->item ?? [];

                        foreach ($items as $item) {
                            $article = $this->formatArticle(
                                $item,
                                $source
                            );

                            if ($article) {
                                $allNews[] = $article;
                            }
                        }
                    } catch (Throwable $e) {
                        // Jika satu sumber gagal,
                        // sumber lainnya tetap diproses.
                        report($e);
                        continue;
                    }
                }

                // Hilangkan berita dengan URL yang sama.
                $uniqueNews = collect($allNews)
                    ->filter(fn ($article) => !empty($article['link']))
                    ->unique('link')
                    ->sortByDesc('timestamp')
                    ->values()
                    ->all();

                return $uniqueNews;
            }
        );
    }

    /**
     * Mengubah XML RSS menjadi objek SimpleXML.
     */
    private function parseXml(string $content): ?SimpleXMLElement
    {
        libxml_use_internal_errors(true);

        $xml = simplexml_load_string(
            $content,
            SimpleXMLElement::class,
            LIBXML_NOCDATA | LIBXML_NONET
        );

        libxml_clear_errors();

        return $xml ?: null;
    }

    /**
     * Mengolah satu berita RSS.
     */
    private function formatArticle(
        SimpleXMLElement $item,
        array $source
    ): ?array {
        $title = trim((string) ($item->title ?? ''));
        $link = trim((string) ($item->link ?? ''));

        $descriptionHtml = (string) ($item->description ?? '');
        $contentHtml = '';

        // Mendukung RSS dengan namespace content:encoded.
        $contentNamespace = $item->children(
            'http://purl.org/rss/1.0/modules/content/'
        );

        if (isset($contentNamespace->encoded)) {
            $contentHtml = (string) $contentNamespace->encoded;
        }

        if ($title === '' || $link === '') {
            return null;
        }

        // Pastikan URL berita valid.
        if (!$this->isValidImageUrl($link)) {
            return null;
        }

        // Mengambil ringkasan berita.
        $excerptSource = $descriptionHtml ?: $contentHtml;

        $excerpt = html_entity_decode(
            strip_tags($excerptSource),
            ENT_QUOTES | ENT_HTML5,
            'UTF-8'
        );

        // Membersihkan spasi dan karakter kosong.
        $excerpt = preg_replace('/\s+/u', ' ', $excerpt);
        $excerpt = trim($excerpt);

        $excerpt = Str::limit(
            $excerpt ?: 'Read the full article from the original news source.',
            180
        );

        // Mengambil gambar dari RSS.
        $image = $this->getImage(
            $item,
            $descriptionHtml,
            $contentHtml
        );

        // Mengambil tanggal publikasi.
        $dateString = (string) (
            $item->pubDate ?? $item->date ?? ''
        );

        try {
            $publishedAt = $dateString
                ? Carbon::parse($dateString)
                : now();
        } catch (Throwable $e) {
            $publishedAt = now();
        }

        // Membuat slug unik berdasarkan URL berita.
        $slug = Str::slug($title)
            . '-'
            . substr(sha1($link), 0, 8);

        return [
            'slug' => $slug,
            'title' => $title,
            'excerpt' => $excerpt,
            'link' => $link,
            'image' => $image,
            'source' => $source['name'],
            'category' => $source['category'],
            'language' => $source['language'],
            'published_at' => $publishedAt->toIso8601String(),
            'timestamp' => $publishedAt->timestamp,
        ];
    }

    /**
     * Mengambil gambar berita dari RSS.
     */
    private function getImage(
        SimpleXMLElement $item,
        string $description,
        string $content
    ): ?string {
        // ==========================================
        // 1. CEK ENCLOSURE
        // ==========================================

        if (isset($item->enclosure)) {
            $attributes = $item->enclosure->attributes();

            $imageUrl = (string) ($attributes['url'] ?? '');
            $mimeType = (string) ($attributes['type'] ?? '');

            if (
                $this->isValidImageUrl($imageUrl)
                && (
                    $mimeType === ''
                    || str_starts_with(strtolower($mimeType), 'image/')
                )
            ) {
                return $imageUrl;
            }
        }

        // ==========================================
        // 2. CEK MEDIA:CONTENT DAN MEDIA:THUMBNAIL
        // ==========================================

        $media = $item->children(
            'http://search.yahoo.com/mrss/'
        );

        foreach (['thumbnail', 'content'] as $mediaType) {
            if (isset($media->{$mediaType})) {
                $attributes = $media->{$mediaType}->attributes();

                $imageUrl = (string) ($attributes['url'] ?? '');

                if ($this->isValidImageUrl($imageUrl)) {
                    return $imageUrl;
                }
            }
        }

        // ==========================================
        // 3. CEK GAMBAR DI DESCRIPTION / CONTENT
        // ==========================================

        $html = $description . ' ' . $content;

        if (
            preg_match(
                '~<img\b[^>]*\bsrc\s*=\s*["\']([^"\']+)["\']~i',
                $html,
                $matches
            )
        ) {
            $imageUrl = html_entity_decode(
                $matches[1],
                ENT_QUOTES | ENT_HTML5,
                'UTF-8'
            );

            if ($this->isValidImageUrl($imageUrl)) {
                return $imageUrl;
            }
        }

        return null;
    }

    /**
     * Validasi URL.
     */
    private function isValidImageUrl(string $url): bool
    {
        return filter_var($url, FILTER_VALIDATE_URL)
            && in_array(
                strtolower(parse_url($url, PHP_URL_SCHEME) ?? ''),
                ['http', 'https'],
                true
            );
    }

    /**
     * Mengambil satu berita berdasarkan slug.
     */
    public function getNewsBySlug(string $slug): ?array
    {
        return collect($this->getAllNews())
            ->firstWhere('slug', $slug);
    }
}
