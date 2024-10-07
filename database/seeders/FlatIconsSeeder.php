<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FlatIconsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $icons = [
            ['icon_code' => 'flaticon-web-development'],
            ['icon_code' => 'flaticon-design'],
            ['icon_code' => 'flaticon-targeted-marketing'],
            ['icon_code' => 'flaticon-diplomat'],
            ['icon_code' => 'flaticon-teaching'],
            ['icon_code' => 'flaticon-laptop'],
            ['icon_code' => 'flaticon-health-check'],
            ['icon_code' => 'flaticon-bank'],
            ['icon_code' => 'flaticon-success'],
            ['icon_code' => 'flaticon-recommend'],
            ['icon_code' => 'flaticon-marketing'],
            ['icon_code' => 'flaticon-job-promotion'],
            ['icon_code' => 'flaticon-completed-task'],
            ['icon_code' => 'flaticon-settings'],
            ['icon_code' => 'flaticon-rating'],
            ['icon_code' => 'flaticon-group'],
            ['icon_code' => 'flaticon-learning'],
            ['icon_code' => 'flaticon-cloud'],
            ['icon_code' => 'flaticon-digital-services'],
            ['icon_code' => 'flaticon-graphic-design'],
            ['icon_code' => 'flaticon-technology'],
            ['icon_code' => 'flaticon-phone-call'],
            ['icon_code' => 'flaticon-visitor'],
            ['icon_code' => 'flaticon-promotion'],
 
        ];

        foreach ($icons as $icon) {
            DB::table('flat_icons')->insert([
                'icon_code' => $icon['icon_code'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
