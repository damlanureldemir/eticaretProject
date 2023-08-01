<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function products(Request $request,$slug=null){
        $category=request()->segment(1) ?? null;
        $size=$request->size ?? null;
        $color=$request->color ?? null;
        $startprice=$request->start_price ?? null;
        $endprice=$request->end_price ?? null;
        $order=$request->order ?? 'id';
        $short=$request->short ?? 'desc';
        $products=Product::where('status','1')->select('id','name','slug','size','color','price','category_id','image')
            ->where(function ($q) use($size,$color,$startprice,$endprice){
                if(!empty($size)){
                    $q->where('size',$size);
                }
                if(!empty($color)){
                    $q->where('color',$color);
                }
                if(!empty($startprice) && $endprice){
                    $q->whereBetween('price',[$startprice,$endprice]);
                }
                return $q;
            })
            ->with('category:id,name,slug')
            ->whereHas('category', function ($q) use($slug){
                if(!empty($slug)){
                    $q->where('slug',$slug);
                }
                return $q;
            });

             $minprice=$products->min('price');
             $maxprice=$products->max('price');
             $sizelists=Product::where('status','1')->groupBy('size')->get();
             $colorlists=Product::where('status','1')->groupBy('color')->get();
            $products=$products->orderBy($order,$short)->paginate(1);
        return view('admin.products.products',compact('products','minprice','maxprice','sizelists','colorlists'));
    }
    public function discounted_products(){
        return view('admin.products.products');
    }

    public function detail($slug){
        $product=Product::where('slug',$slug)->where('status','1')->firstOrFail();
        $products=Product::where('id','!=',$product->id)
        ->where('category_id',$product->category_id)
        ->where('status','1')
        ->limit(6)
        ->get();
        return view('admin.products.product_detail',compact('product','products'));
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
