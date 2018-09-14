<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use DB;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
     
        
    public function index(request $request)
    {
        $products = Products::all();
        //$products = json_decode(json_encode($products));
        // foreach($products as $product):
        //          $product->category->category_name;
        //          $product->subcategory->sub_category_name;
        // endforeach;
        return view('BackEnd.products.products')->with(compact('products'));
    }
    
    public function delete(Request $request,$id=null)
    {
        if(!empty($id))
        {
            Products::where(['product_id'=>$id])->delete();
            return redirect()->back()->with('error','Product deleted successfully!!');
        }
    }
    public function add(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request -> all();
            $product = new Products;
            $product -> name = $data['productName'];
            $product -> category_id = $data['categoryName'];
            $product -> sub_category_id = $data['subCategoryName'];
            $product -> description = $data['description'];
            $product -> url = $data['url'];
            $product -> image = $data['Productimage'];
            $product -> save();
            return redirect('/admin/products')->with('success','Product added successfully!!');   
        }
        return view('BackEnd.products.add');
    }
    public function edit(Request $request,$id=null)
    {
        if($request -> isMethod('post'))
        {
            $data = $request ->  all();
            Products::where(['product_id' => $id])->update([
                'name' => $data['name'],
                'category_id' => $data['pCategory'],
                'sub_category_id' => $data['cCategory'],
                'description' => $data['description'],
                'url' => $data['url'],
                'status' => $data['status'],
                'image' => $data['image']
            ]);
            return redirect('/admin/products')->with('success','Product successfully updated');
        }
        $product = Products::where(['product_id'=>$id])->first();
        return view('BackEnd.products.edit')->with(compact('product'));
    }
}
