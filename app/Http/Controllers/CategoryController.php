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
        $category = Category::get();
        $category = json_decode(json_encode($category));
//      return view('BackEnd.categories.categories') -> with('categories',$category);
        return view('BackEnd.categories.categories')->with(compact('category'));
    }
    public function addCategories(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
//          echo '<pre>'; print_r($data);die;
            $category = new Category();
            $category -> category_name = $data['categoryName'];
            $category -> description = $data['description'];
            $category -> url = $data['url'];
            $category->remember_token = str_random(50);
            $category -> save();
            return redirect('/admin/categories')->with('success','Category added successfully!');
        }        
        return view('BackEnd.categories.add_categories');
    
    }
    public function deleteCategories()
    {
        
    }

    public function editCategories(Request $request, $id = null)
    {
        if($request->isMethod('post'))
        {
            // dd($id);
            $data = $request->all();
            //echo '<pre>'; print_r($data);die;
            Category::where(['category_id'=> $id])->update(['category_name'=>$data['category_name'],'url'=>$data['url'],'description'=>$data['description']]);
            return redirect('/admin/categories')->with('success','Category updated successfully!');
        }
        $category = Category::where(['category_id'=>$id])->first();
        return view('BackEnd.categories.edit_categories')->with(compact('category'));        
    }
}
