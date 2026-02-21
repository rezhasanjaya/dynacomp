<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('article')->insertOrIgnore([
            [
                'id' => 1,
                'uuid' => (string) Str::uuid(),
                'article_category_id' => 1,
                'title' => '5 Elements of a Modern Company Profile',
                'content' => 'Structure, clarity, and trust cues that make your brand stand out.',
                'author' => 'DynaComp',
                'published_date' => '2026-02-21',
                'image' => 'articles/ibyMoo2kd7Y4CMWcXc27mZMIkcJtc2lcRzrnY5ii.jpg',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'uuid' => (string) Str::uuid(),
                'article_category_id' => 1,
                'title' => 'Designing a Trustworthy Company Profile',
                'content' => 'Clear structure, consistent branding, and a focused story help visitors quickly trust your business …',
                'author' => 'DynaComp',
                'published_date' => '2026-02-17',
                'image' => 'articles/LR63NPQhbONHL6aaEXVE8HA6vBMxHuGFvRAW5Si6.jpg',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'uuid' => (string) Str::uuid(),
                'article_category_id' => 2,
                'title' => 'Fast Websites, Better Conversions',
                'content' => 'Speed improves SEO, user experience, and conversion rates. Optimize images, reduce scripts, and use …',
                'author' => 'Aldo Pratama',
                'published_date' => '2026-02-05',
                'image' => 'articles/JNvIo2Nrlvj4xfZN2eCzOrC8c0AGf1Q88YXkDepC.png',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
