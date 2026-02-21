<?php

namespace Database\Seeders;

use Database\Seeders\ArticleCategoriesSeeder;
use Database\Seeders\ArticlesSeeder;
use Database\Seeders\AdminUserSeeder;
use Database\Seeders\ProjectsSeeder;
use Database\Seeders\ProjectCategoriesSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            ProjectCategoriesSeeder::class,
            ArticleCategoriesSeeder::class,
            ArticlesSeeder::class,
            ProjectsSeeder::class,
        ]);
    }
}
