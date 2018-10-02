<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use App\Category;
use App\Banner;
use App\IndexPageData;
use App\Slider;
use App\OwnersView;
use App\Blogs;
use App\Brands;
use App\About;
use App\OurTeam;
use App\Videos;
use App\ReachUsAt;
use App\Location;           //CRUD not done yet
use App\Footer;
use App\PhotoStream;
use App\SocialMediaAccounts;

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
    public function index(FooterRepository $getFooterLink)
    {
        $getViews = OwnersView::orderBy('id')->where('status','<>',0)->get();
        $getContent = IndexPageData::orderBy('id')->where('status','<>',0)->get();
        $getSliders = Slider::orderBy('id')->where('status','<>',0)->get();
        $getBanners = Banner::orderBy('id')->where('status','<>',0)->get();
        $getBlogs   = Blogs::latest()->where('status','<>',0)->take(3)->get();
        $latestProducts   = Products::latest()->where('status','<>',0)->take(8)->get();
       // $bestSellerProducts = Products::orderBy('sell', 'desc')->take(3)->get();
        return view('FrontEnd.index')->with(compact('getBanners','getSliders','getBlogs','latestProducts','bestSellerProducts','getViews','getContent'));
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
     
    //Blog detail Page Loads Here...
    public function blogDetail($id = null)
    {
        $getData = Blogs::where(['id'=>$id])->where('status','<>',0)->get();
        return view('FrontEnd.blog-detail')->with(compact('getData'));
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


    //About Page Loads Here...
    public function about()
    {
        $getTeam = OurTeam::orderBy('id')->where('status','<>',0)->get();
        $getContent = About::orderBy('id')->where('status','<>',0)->take(1)->get();
        return view('FrontEnd.about')->with(compact('getTeam','getContent'));
    }
    
    //Contact Page Loads Here...
    public function contact()
    { 
        $getAddress = ReachUsAt::orderBy('id')->where('status','<>',0)->take(1)->get();
        // $getLocation = Location::orderBy('id')->where('status','<>',0)->take(1)->get();
        return view('FrontEnd.contact')->with(compact('getAddress','getLocation'));
    }  
         
    //Video Page Loads Here...
    public function video()
    { 
        $getVideos = Videos::orderBy('id')->where('status','<>',0)->get();
        return view('FrontEnd.video')->with(compact('getVideos'));
    }       

    //Wishlist Page Loads Here...
    public function wishlist()
    { 
        return view('FrontEnd.wishlist');
    }        

    //User Login Loads Here...
    public function userLogin()
    { 
        return view('FrontEnd.userlogin');
    }  
     
    //User Register Page Loads Here...
    public function register()
    { 
        return view('FrontEnd.userlogin');
    }  
    //User Login Loads Here...
    public function userAccount()
    { 
        return view('FrontEnd.account');
    }  
    //Checkout Page Loads Here...
    public function checkout()
    { 
        return view('FrontEnd.checkout');
    }  
     
    //Cart Page Loads Here...
    public function cart()
    { 
        return view('FrontEnd.cart');
    }  
     
    //Product Compare Page Loads Here...
    public function productCompare()
    { 
        return view('FrontEnd.product-compare');
    }  
     

    public function footer()
    {        
        $getFooterLink = Footer::orderBy('id')->where('status','<>',0)->get();
        $getMedia = SocialMediaAccounts::orderBy('id')->where('status','<>',0)->get();
        $getPhotoStream = PhotoStream::orderBy('id')->where('status','<>',0)->get();
        return view('FrontEnd.video')->with(compact('Footer','getMedia','getPhotoStream'));
    }
     
}
