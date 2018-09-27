<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use App\Category;
use App\Banner;
use App\Slider;
use App\Blogs;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class IndexController extends Controller
{
    public function render($request, Exception $e)
    {
        if($e instanceof NotFoundHttpException)
        {
            return response()->view('missing', [], 404);
        }
        return parent::render($request, $e);
    }
    //Index Page Loads Here...
    public function index()
    {
        $getSliders = Slider::orderBy('id')->where('status','<>',0)->get();
        $getBanners = Banner::orderBy('id')->where('status','<>',0)->get();
        $getBlogs   = Blogs::latest()->where('status','<>',0)->take(3)->get();
        $latestProducts   = Products::latest()->where('status','<>',0)->take(8)->get();
       // $bestSellerProducts = Products::orderBy('sell', 'desc')->take(3)->get();
        return view('FrontEnd.index')->with(compact('getBanners','getSliders','getBlogs','latestProducts','bestSellerProducts'));
    }
    //Products Page Loads Here...
    public function shop()
    {
        $getProducts = Products::orderBy('product_id')->where('status','<>',0)->get();
        //Fetching categories and sub-categories uding basic approach
        $getcategories = Category::where(['sub_category_id'=>0])->get();

        
        return view('FrontEnd.shop')->with(compact('getProducts','getcategories'));
    }

    //Shop by category opens here
    public function shopByCategory($url = null)
    {
        //Fetching categories and sub-categories uding basic approach
        $getcategories = Category::where(['sub_category_id'=>0])->get();
        $categoryDetail = Category::where(['url'=>$url])->first();
        if($categoryDetail->sub_category_id==0)
        {
            $subcategories = Category::where(['sub_category_id'=>$categoryDetail->category_id])->get();
            $subCategories = Category::where(['category_id'=>$categoryDetail->category_id])->get();
            foreach($subcategories as $subcategory)
            {
                $cat_ids[] = $subcategory->category_id;
            }
            foreach($subCategories as $subcategory)
            {
                $cat_ids[] = $subcategory->category_id;
            }
            $getProducts = Products::whereIn('category_id',$cat_ids)->where('status','<>',0)->get();
        }        
        else
        {
            $getProducts = Products::where(['category_id'=>$categoryDetail->category_id])->where('status','<>',0)->get();
        }
        return view('FrontEnd.shop')->with(compact('getcategories','getProducts','categoryDetail'));
    }
    
    //Blogs Page Loads Here...
    public function blog()
    { 
        $getBlogs = Blogs::orderBy('title')->where('status','<>',0)->get();
        return view('FrontEnd.blog')->with(compact('getBlogs'));
    }  
    
    //Page Not Found Page Loads Here...
    public function error()
    {
        return view('FrontEnd.404');
    }

    public function products($id = null)
    {
        $getProducts = Products::where(['product_id'=>$id])->where('status','<>',0)->first();
        return view('FrontEnd.product-detail')->with(compact('getProducts'));
    }
}
