<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insertOrIgnore([
            [
                'id' => 1,
                'uuid' => (string) Str::uuid(),
                'project_category_id' => 2,
                'project_name' => 'Project Alpha',
                'description' => 'Modern, fast, and mobile-first company profile website',
                'client_name' => 'Apsoro',
                'year' => 2026,
                'image' => 'projects/a9QWbydpJGKJBXhoTjitW3yWiGY3KqzyaRUxaBGf.jpg',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'uuid' => (string) Str::uuid(),
                'project_category_id' => 1,
                'project_name' => 'Aurora Company Profile',
                'description' => 'Corporate profile with clean UI and clear messaging',
                'client_name' => 'Aurora Holdings',
                'year' => 2026,
                'image' => 'projects/d2ljdkPkOYhyAsv0XFkqiAdcdMr3MfoHLo7Ghfb9.png',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'uuid' => (string) Str::uuid(),
                'project_category_id' => 3,
                'project_name' => 'Atlas Ops Dashboard',
                'description' => 'Internal dashboard for KPI and reporting',
                'client_name' => 'Atlas Logistics',
                'year' => 2025,
                'image' => 'projects/VVbRpSADIqfpUAmP0lTHDwsviMWn89g4jSProFnN.jpg',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'uuid' => (string) Str::uuid(),
                'project_category_id' => 4,
                'project_name' => 'GreenCart Store',
                'description' => 'Product catalog, cart, and payment integration.',
                'client_name' => 'GreenCart',
                'year' => 2024,
                'image' => 'projects/Ffx1ZuGLwpPubYDwmgJfT7sgyjyGpJEXIfbjkGUz.webp',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'uuid' => (string) Str::uuid(),
                'project_category_id' => 5,
                'project_name' => 'PixelCraft Redesign',
                'description' => 'UI refresh and design system for web app.',
                'client_name' => 'PixelCraft Studio',
                'year' => 2025,
                'image' => 'projects/hGcteOFuH9g6xkVDaDwj4K8ZjQH67c42KVMchMsx.png',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'uuid' => (string) Str::uuid(),
                'project_category_id' => 2,
                'project_name' => 'Nova Launch Page',
                'description' => 'Conversion-focused campaign landing page.',
                'client_name' => 'Nova Labs',
                'year' => 2026,
                'image' => 'projects/yDf8DLIEmPY3NhB2yF8WZXYZcUvnFndS4UXPOL91.jpg',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
