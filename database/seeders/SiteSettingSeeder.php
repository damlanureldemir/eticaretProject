<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'name'=>'adres',
            'data'=>'adres bilgilerim',
        ]);
        SiteSetting::create([
            'name'=>'phone',
            'data'=>'+2 392 3929 210',
        ]);
        SiteSetting::create([
            'name'=>'email',
            'data'=>'emailaddress@domain.com',
        ]);
    }
}
