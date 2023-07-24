<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name'=>'MOLA BUTİK',
            'image'=>null,
            'content'=>'hakkımızda yazısı burada',
        ]);
    }
}
