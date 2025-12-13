<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PageSectionSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        // =====================
        // PAGES
        // =====================
        DB::table('pages')->insert([
            [
                'name' => 'About',
                'slug' => 'about',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Services',
                'slug' => 'services',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Contact',
                'slug' => 'contact',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

        $aboutPageId = DB::table('pages')->where('slug', 'about')->value('id');
        $servicesPageId = DB::table('pages')->where('slug', 'services')->value('id');

        // =====================
        // SECTIONS
        // =====================
        DB::table('sections')->insert([
            [
                'page_id' => $aboutPageId,
                'name' => 'Company Overview',
                'code' => 'company_overview',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'page_id' => $aboutPageId,
                'name' => 'Vision & Mission',
                'code' => 'vision_mission',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'page_id' => $servicesPageId,
                'name' => 'Our Services',
                'code' => 'services_list',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
