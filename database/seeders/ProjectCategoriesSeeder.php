<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project_categories')->insertOrIgnore([
            [
                'id' => 1,
                'uuid' => Str::uuid(),
                'category' => 'Company Profile',
                'description' => 'Professional websites that build brand trust and credibility.',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'uuid' => Str::uuid(),
                'category' => 'Landing Page',
                'description' => 'Conversion-focused landing pages for marketing campaigns.',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'uuid' => Str::uuid(),
                'category' => 'Web App',
                'description' => 'Efficient dashboards and internal web applications.',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'uuid' => Str::uuid(),
                'category' => 'E-commerce',
                'description' => 'Catalog, checkout, and payment integrations.',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'uuid' => Str::uuid(),
                'category' => 'UI/UX Design',
                'description' => 'Wireframing, prototyping, and design systems.',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'uuid' => Str::uuid(),
                'category' => 'Maintenance',
                'description' => 'Ongoing updates, security, and optimization.',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
