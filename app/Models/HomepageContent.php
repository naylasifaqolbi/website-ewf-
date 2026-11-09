<?php

namespace App\Models;

class HomepageContent
{
    public static function getContent(): array
    {
        return [
            'company_name' => 'PT Equityworld Futures',

            'hero_label' => 'INFORMASI RESMI PERUSAHAAN',

            'hero_title' => 'Mengenal Peluang dan Layanan Bersama EWF',

            'hero_description' => 'Temukan informasi mengenai PT Equityworld Futures, produk, layanan, berita, legalitas, serta kesempatan karier dan magang melalui website perusahaan.',

            'about_title' => 'Mengenal PT Equityworld Futures',

            'about_description' => 'PT Equityworld Futures merupakan perusahaan yang bergerak di bidang perdagangan berjangka. Website ini menyediakan informasi perusahaan, produk dan layanan, berita, serta informasi lain yang diperlukan pengunjung.',

            'services' => [
                [
                    'icon' => '◆',
                    'title' => 'Produk',
                    'description' => 'Informasi produk dan layanan perusahaan untuk membantu pengunjung mengenal produk yang tersedia.',
                    'url' => '#kontak',
                ],
                [
                    'icon' => '▥',
                    'title' => 'Data Historis',
                    'description' => 'Informasi historis produk yang dapat dikembangkan menjadi halaman data dan grafik.',
                    'url' => '#kontak',
                ],
                [
                    'icon' => '▤',
                    'title' => 'Berita',
                    'description' => 'Informasi dan pembaruan perusahaan dalam satu halaman yang mudah diakses.',
                    'url' => '#berita',
                ],
                [
                    'icon' => '◎',
                    'title' => 'Informasi Perusahaan',
                    'description' => 'Informasi profil perusahaan, legalitas, layanan, serta saluran komunikasi.',
                    'url' => '#tentang',
                ],
            ],

            'news' => [
                [
                    'category' => 'Perusahaan',
                    'date' => 'Informasi perusahaan',
                    'title' => 'Mengenal PT Equityworld Futures',
                    'description' => 'Informasi umum mengenai profil, layanan, dan kegiatan perusahaan.',
                ],
                [
                    'category' => 'Produk',
                    'date' => 'Informasi produk',
                    'title' => 'Informasi Produk dan Layanan',
                    'description' => 'Kenali informasi produk dan layanan yang tersedia melalui perusahaan.',
                ],
                [
                    'category' => 'Karier',
                    'date' => 'Informasi karier',
                    'title' => 'Kesempatan Karier dan Magang',
                    'description' => 'Informasi mengenai kesempatan bergabung dan program magang.',
                ],
            ],
        ];
    }
}