<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Category;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(Request $request)
    {
        $category = Category::orderBy('id','asc');
//        return view('BackEnd.categories.categories') -> with('categories',$category);
return view('BackEnd.categories.categories');
    }
    public function addCategories()
    {
        return view('BackEnd.categories.add_categories');
    }
    public function deleteCategories()
    {
        
    }
    public function updateCategories()
    {
        
    }
    public function editCategories()
    {
        return view('BackEnd.categories.edit_categories');        
    }
}
