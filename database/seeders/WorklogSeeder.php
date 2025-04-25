<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class WorklogSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('worklogs')->insert([
            [
                'client_id' => 1,
                'user_id' => 1,
                'action' => 'Technical SEO Audit',
                'notes' => 'Performed crawl and fixed missing meta tags.',
                'performed_at' => Carbon::now()->subDays(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 1,
                'user_id' => 1,
                'action' => 'Backlink Campaign',
                'notes' => 'Created 15 high-DA links via outreach.',
                'performed_at' => Carbon::now()->subDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 1,
                'user_id' => 1,
                'action' => 'Google Business Optimization',
                'notes' => 'Updated business categories and weekly posts.',
                'performed_at' => Carbon::now()->subDay(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
