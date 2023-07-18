<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageHomeController extends Controller
{
    public function index(){
        $slider=Slider::where('status','1')->first();
        $title="anasayfa";
        $categories=Category::where('status','1')->get();
        return view('frontend.pages.index',compact('slider','title','categories'));
    }
}
