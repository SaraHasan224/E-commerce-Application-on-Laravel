<?php
namespace App\Http\Controllers;
//require 'vendor/autoload.php';
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManager;
use Image;
use App\Products;
use App\ProductsAttribute;
use App\Category;
use Sessions;
use Auth;
use DB;
use App\Http\Controllers\Controller;
class ProductsController extends Controller
{
     
        
    public function index(request $request)
    {
        $products = Products::all();
        $categoryName = Category::all();
        // foreach($products as $product):
        //          $product->category->category_name;
        //          $product->subcategory->sub_category_name;
        // endforeach;
        return view('BackEnd.products.products')->with(compact('products','categoryName'));
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
          // echo "<pre>"; print_r($data);die;
            $product = new Products;
            $product -> name = $data['productName'];
            $product -> product_code = $data['code'];
            $product -> category_id = $data['category_id'];
            if(!empty($data['description']))
            {
                $product -> description = $data['description'];
            }
            else 
            {
                $product -> description = '';
            }
            $product -> price = $data['price'];
            $product -> color = $data['color'];                               //added
            $product -> quantity = $data['quantity'];                                 //added
            $product -> url = $data['url'];
            //File Upload
            if($request->hasFile('image'))
            {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid())
                {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).".".$extension;
                    $large_image_path = 'images/backend_images/products/large/'.$filename;
                    $medium_image_path = 'images/backend_images/products/medium/'.$filename;
                    $small_image_path = 'images/backend_images/products/small/'.$filename;
//                     //Image Resize
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);         
//                     //Store image name in products table
                } 
                $product->image = $filename;
            }
            $product->remember_token = str_random(50);
            $product->save();
            return redirect('/admin/products')->with('success','Product added successfully!!');   
        }
 
        $parent = Category::where(['sub_category_id'=>0])->get();
        $dropdown = "<option value='0' selected disabled>Select</option>";
        //dd($parent);
        foreach($parent as $Catparent)
        {
//      dd($Catparent->sub_category_id);
            $dropdown .= "<option value='".$Catparent->category_id."'>".$Catparent->category_name."</option>";
            $child = Category::where(['sub_category_id'=>$Catparent->category_id])->get(); 
 //dd($child);
            foreach($child as $Catchild)
            {
                $dropdown .= "<option value= '".$Catchild->category_id."'>&nbsp; -&nbsp;".$Catchild->category_name."</option>";
            }       
        }
        return view('BackEnd.products.add')->with(compact('dropdown'));
    }


    public function edit(Request $request,$id=null)
    {
        if($request -> isMethod('post'))
        {
            $data = $request ->  all();
            //dd($data);
            if($request->hasFile('image'))
            {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid())
                {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).".".$extension;
                    $large_image_path = 'images/backend_images/products/large/'.$filename;
                    $medium_image_path = 'images/backend_images/products/medium/'.$filename;
                    $small_image_path = 'images/backend_images/products/small/'.$filename;
//                     //Image Resize
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);         
                }
                else
                {
                    $filename = $data['current_image'];
                } 
                Products::where(['product_id' => $id])->update([
                    'name' => $data['name'],
                    'product_code' => $data['code'],
                    'category_id' => $data['pCategory'],          
                    'description' => $data['description'],
                    'price' => $data['price'],
                    'color' => $data['color'],
                    'size' => $data['size'],
                    'quantity' => $data['quantity'],
                    'url' => $data['url'],
                    'status' => $data['status'],
                    'image' => $filename
                ]);
            }
           
            return redirect('/admin/products')->with('success','Product successfully updated');
        }
        //Get product details
        $product = Products::where(['product_id'=>$id])->first();
        
        //Categories dropdown starts here
        $categories = Category::where('sub_category_id','==',0)->get();
        //dropdown starts here
        $dropdown = "<option value='' selected disables>Select</option>";
        
        foreach($categories as $cat)
        {
            if($cat->category_id == $product->category_id)
            {
                $selected = "selected";
            }
            else
            {
                $selected = "";
            }
            $dropdown .= "<option value='".$cat->category_id."' ".$selected.">".$cat->category_name."</option>"; 
            $subCategories = Category::where(['sub_category_id'=>$cat->category_id])->get(); 
            //sub categories dropdown starts here
        
           // $subCategories = Category::where('sub_category_id','>',0)->get();
            foreach($subCategories as $subCat)
            {
                if($subCat->category_id == $product->category_id)
                {
                    $selected = "selected";
                }
                else
                {
                    $selected = "";
                }
                $dropdown .= "<option value='".$subCat->category_id."'".$selected.">&nbsp;--&nbsp".$subCat->category_name."</option>"; 
            }
        }
        
        return view('BackEnd.products.edit')->with(compact('product','dropdown'));
    }


    public function deleteProductImage($id = null)
    {
     
        Products::where(['product_id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('success','Product Image has been deleted successfully!!');
    }
        
    public function addAttribute(Request $request,$id=null)
    {
       
        $productDetails = Products::with('attributes')->where(['product_id'=>$id])->first();
        if($request -> isMethod('post'))
        {
            $data = $request -> all();
            foreach($data['sku'] as $key => $val)
            {
                if(!empty($val))
                {
                    $attribute = new ProductsAttribute;
                    $attribute -> product_id = $id;                    
                    $attribute -> sku = $val;                    
                    $attribute -> size = $data['size'][$key];
                    $attribute -> price = $data['price'][$key];
                    $attribute -> stock = $data['stock'][$key];
                    $attribute -> save();
                }
            }
            
        return redirect('/admin/products/attribute/'.$productDetails->product_id)->with('success','Product Attribute has been added successfully!!');
        }
        return view('BackEnd.products.addAttributes')->with(compact('productDetails'));
    }

    
       
    public function deleteAtribute(Request $request,$id=null)
    {
        if(!empty($id))
        {
            ProductsAttribute::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','Product deleted successfully!!');
        }
    }
}