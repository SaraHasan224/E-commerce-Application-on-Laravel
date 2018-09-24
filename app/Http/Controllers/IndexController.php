<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use App\Category;
class IndexController extends Controller
{
    //Index Page Loads Here...
    public function index()
    {
        return view('FrontEnd.index');
    }
    //Products Page Loads Here...
    public function products()
    {
        $getProducts = Products::inRandomOrder()->get();

        //Fetching categories and sub-categories uding basic approach
        $getcategories = Category::where(['sub_category_id'=>0])->get();
        foreach($getcategories as $categories)
        {
            $categoryList = "<li class='closed'>";
            $categoryList .= " <li class='closed'><a href='#'>".$categories->category_name."</a>";
            $getsubcategories = Category::where(['sub_category_id'=>$categories->category_id])->get();
            foreach($getsubcategories as $subcategories)
            {
                $categoryList .="<ul><li><a href='#'>".$subcategories->category_name."</a></li></ul></li>";
            }
            
        }

        return view('FrontEnd.shop')->with(compact('getProducts','categoryList'));
    }
}
