<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use App\Category;

class SubCategoryController extends Controller
{
    public function sub_categories()
    {   
        $parentName = Category::all(); 
        $subCategory = Category::where('sub_category_id','>',0)->get(); 
        //dd($id);
        $parentName  = Category::where(['sub_category_id' => 0])->get();
    
        return view('BackEnd.sub-categories.subCategories')->with(compact('subCategory','parentName'));
    }
    public function add(Request $request)
    { 
        if($request->isMethod('POST'))
        {
            $data = $request->all();
            $subCategory=new Category();
            $subCategory->category_name = $data['subCategoryName'];
            $subCategory->sub_category_id = $data['parentId'];
            $subCategory->url = $data['url'];
            $subCategory->description = $data['description'];
            $subCategory->remember_token = str_random(50);
            $subCategory -> save();
            return redirect('/admin/subCategories')->with('success','Sub category updated successfully!');
        }
        $data = $request->all();
       
        $collection = Category::where(['sub_category_id' =>  0])->get();           
        $collection = json_decode(json_encode($collection));
        return view('BackEnd.sub-categories.addSubCategories')->with(compact('collection'));
    }
    public function edit(Request $request,$id = null)
    {
        if($request -> isMethod('POST'))
        {
            $data = $request -> all();        
             $catedit = Category::where(['category_id'=>$id])->first();
             //dd($data);
             $catedit -> category_name = $data['subCatName'];
             $catedit -> sub_category_id = $data['parentId'];
             $catedit -> status = $data['status'];
             $catedit -> description = $data['description'];
             $catedit -> url = $data['url'];
             $catedit -> save();
            return redirect('/admin/subCategories')->with('success','Sub category updated successfully!');
        }
        $categoryName = Category::where(['sub_category_id'=>0])->get();   
        $sub_category = Category::where(['category_id' => $id])->first();
        return view('BackEnd.sub-categories.editSubCategories')->with(compact('sub_category','categoryName'));                
    }

    public function delete(Request $request,$id = null)
    {
        if(!empty($id))
        {
            Category::where(['category_id' => $id])->delete();
            return redirect()->back()->with('success','Sub category deleted successfully!');
        }
    }
}
