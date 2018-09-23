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
        $category = Category::where(['sub_category_id'=> 0])->get();
        
        $category = json_decode(json_encode($category));
        return view('BackEnd.categories.categories')->with(compact('category'));
    }
    public function add(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
       // echo '<pre>'; print_r($data);die;
            $category = new Category();
            $category -> category_name = $data['categoryName'];
           // $category ->  sub_category_id = $data['id'];
            $category -> description = $data['description'];
            $category -> url = $data['url'];
            $category->remember_token = str_random(50);
            $category -> save();
            return redirect('/admin/categories')->with('success','Category added successfully!');
        }        
        $collection = Category::where(['sub_category_id'=>0])->get();
        return view('BackEnd.categories.add_categories')->with(compact('collection'));
    
    }
    public function delete(Request $request, $id = null)
    {
        if(!empty($id))
        {
            Category::where(['category_id'=>$id]) -> delete();
            return redirect()->back()->with('error','Category deleted successfully!');
        }
    }

    public function edit(Request $request, $id = null)
    {
        if($request->isMethod('post'))
        {
            // dd($id);
            $data = $request->all();
            //echo '<pre>'; print_r($data);die;
            Category::where(['category_id'=> $id])->update([
                    'category_name'=>$data['category_name'],
                    'url'=>$data['url'],
                    'description'=>$data['description']
                    ]);
            return redirect('/admin/categories')->with('success','Category updated successfully!');
        }
        $category = Category::where(['category_id'=>$id])->first();
        return view('BackEnd.categories.edit_categories')->with(compact('category'));        
    }
}
