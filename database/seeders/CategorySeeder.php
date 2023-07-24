<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $erkek=Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>null,
            'name'=>'Erkek',
            'content'=>'Erkek Giyim',
            'status'=>'1',
        ]);
        Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$erkek->id,
            'name'=>'Erkek Kazak',
            'content'=>'Erkek Kazaklar',
            'status'=>'1',
        ]);
        Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$erkek->id,
            'name'=>'Erkek pantolon',
            'content'=>'Erkek pantolonlar',
            'status'=>'1',
        ]);
        $kadin=Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>null,
            'name'=>'Kadın',
            'content'=>'Erkek Giyim',
            'status'=>'1',
        ]);
        Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$kadin->id,
            'name'=>'kadın çanta',
            'content'=>'Kadın çantalar',
            'status'=>'1',
        ]);
        Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$kadin->id,
            'name'=>'kadın pantolon',
            'content'=>'Kadın pantolonlar',
            'status'=>'1',
        ]);

        $cocuk=Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>null,
            'name'=>'cocuk',
            'content'=>'cocuk Giyim',
            'status'=>'1',
        ]);
        Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$cocuk->id,
            'name'=>'Çocuk oyuncaklar',
            'content'=>'Çocuk oyuncaklar',
            'status'=>'1',
        ]);
        Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'cat_ust'=>$cocuk->id,
            'name'=>'cocuk pantolon',
            'content'=>'cocuk pantolonlar',
            'status'=>'1',
        ]);
    }
}
