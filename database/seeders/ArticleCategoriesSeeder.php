<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('article_categories')->insertOrIgnore([
            [
                'id' => 1,
                'uuid' => Str::uuid(),
                'category' => 'Design',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'uuid' => Str::uuid(),
                'category' => 'Development',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'uuid' => Str::uuid(),
                'category' => 'Branding',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'uuid' => Str::uuid(),
                'category' => 'Strategy',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'uuid' => Str::uuid(),
                'category' => 'SEO',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'uuid' => Str::uuid(),
                'category' => 'UX',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
