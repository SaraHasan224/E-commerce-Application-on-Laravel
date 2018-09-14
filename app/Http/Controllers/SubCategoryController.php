<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;

class SubCategoryController extends Controller
{
    public function sub_categories()
    {   
        $subCategory = SubCategory::get();
        $subCategory = json_decode(json_encode($subCategory));
       // echo '<pre>'; print_r($subCategory); die;
        return view('BackEnd.sub-categories.subCategories')->with(compact('subCategory'));
    }
    public function add(Request $request)
    {
        if($request->isMethod('POST'))
        {
            $data = $request->all();
            $subCategory=new SubCategory();
            $subCategory->sub_category_name = $data['subCategoryName'];
            $subCategory->category_id = $data['CategoryId'];
            $subCategory->url = $data['url'];
            $subCategory->description = $data['description'];
            $subCategory->remember_token = str_random(50);
            $subCategory -> save();
            return redirect('/admin/subCategories')->with('success','Category updated successfully!');
        }
        return view('BackEnd.sub-categories.addSubCategories');
    }
    public function edit(Request $request,$id = null)
    {
        if($request -> isMethod('POST'))
        {
            $data = $request -> all();
           // dd ($data);
            SubCategory::where([
                'sub_category_id'=>$id])->update([
                    'sub_category_name' => $data['subCatName'],
                    'category_id' => $data['parentId'],
                    'status' => $data['status'],
                    'description' => $data['description'],
                    'url' => $data['url']
                ]);
                
            return redirect('/admin/subCategories')->with('success','Category updated successfully!');
        }
        $sub_category = SubCategory::where(['sub_category_id' => $id])->first();
        return view('BackEnd.sub-categories.editSubCategories')->with(compact('sub_category'));                
    }

    public function delete(Request $request,$id = null)
    {
        if(!empty($id))
        {
            SubCategory::where(['sub_category_id' => $id])->delete();
            return redirect()->back()->with('success','Category deleted successfully!');
        }
    }
}
