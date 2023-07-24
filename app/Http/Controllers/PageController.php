<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function products(){
        return view('admin.products.products');
    }
    public function discounted_products(){
        return view('admin.products.products');
    }

    public function detail(){
        return view('admin.products.product_detail');
    }

    public function cart(){
        return view('admin.cart.cart');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function about(){
        $about=About::where('id',1)->first();
        return view('frontend.pages.about',compact('about'));
    }
}
