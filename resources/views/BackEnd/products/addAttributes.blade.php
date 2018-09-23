@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/products')}}" title="Go to Products" class="tip-bottom"><i class="icon-tags"></i> Products</a> 
        <a href="{{url('/admin/products/add')}}" title="Add Products" class="tip-bottom"><i class="icon-plus"></i>Add Product Attributes</a> 
    </div>
    <hr>  @if(Session::has('error'))
        <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>{!!session('error')!!}</strong>
        </div>
      @endif

      @if(Session::has('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>{!!session('success')!!}</strong>
        </div>
      @endif
  <div class="container-fluid">
    <hr>
    {{-- Add  --}}
   <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Add Product Attributes</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" action="{{ url('/admin/products/attribute/add/'.$productDetails->product_id) }}" method="post" class="form-horizontal" id="add_attribute" name="add_attribute">{{csrf_field()}}
              <input type="hidden" name="product_id" value="{{$productDetails->product_id}}" />
              <div class="control-group">
                <label class="control-label">Product Name :</label>
                <label class="control-label"> <strong>{{$productDetails->name}}</strong> </label>
              </div>
              <div class="control-group">
                <label class="control-label">Product Code :</label>
                <label class="control-label"> <strong>{{$productDetails->product_code}}</strong> </label>
              </div>
              <div class="control-group">
                <label class="control-label">Product Color :</label>
                <label class="control-label"> <strong>{{$productDetails->Color}}</strong> </label>
              </div>
              <div class="control-group">
                <label class="control-label">Sku :</label>
                  <div class="field_wrapper controls">
                      <div>
                          <input type="text" class="span11" name="sku" id="sku" placeholder="Enter sku"  style="width:120px;"/>
                          <input type="text" class="span11" name="size" id="size" placeholder="Enter Size"  style="width:120px;"/>
                          <input type="text" class="span11" name="price" id="price" placeholder="Enter Price"  style="width:120px;"/>
                          <input type="text" class="span11" name="stock" id="stock" placeholder="Enter Stock"  style="width:120px;"/>
                          <a href="javascript:void(0)" class="btn btn-default add_button"><span class="icon icon-plus" aria-hidden="true"></span> Add</a>
                      </div>
                  </div>
              </div>
            
              
              <div class="form-actions pull-right">
                <button type="submit" class="btn btn-success" value="Add Attributes">Save</button>
              </div>
              <div class="pull-left form-actions">
                <a  href="/admin/products" class="btn btn-default">Back</a>
              </div>
            </form>
          </div>
        </div>
      
        
      </div>
  </div>
  
  {{-- View --}}
    <div class="row-fluid">
        <div class="span12">
  
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-tags"></i> </span>
              <h5>Products Attributes</h5>
            </div>
            <div class="widget-content ">
              <table class="table table-bordered table-striped with-check data-table">
                <thead>
                  <tr>
                    <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Sku</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($productDetails->attributes as $attributes)
             
                      <tr>
                          <td><input type="checkbox" /></td>
                          <td>{{$productDetails->product_code}}</td>                     
                          <td>{{$productDetails->name}}</td>                     
                          <td>{{$attributes->sku}}</td>                     
                          <td>{{$attributes->size}}</td>                     
                          <td>{{$attributes->price}}</td>                     
                          <td>{{$attributes->stock}}</td>                     
                          <td>         
                            <a rel="{{$attributes->id}}" rell="delete" href="JavaScript:void(0)" type="button" class="btn btn-danger deleteAttribute">Delete</a>
                          </td>
                      </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
          </div>
         
        </div>
    </div>
    
  
    {{-- Edit  
    <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
              <h5>Edit Product Attributes</h5>
            </div>
            <div class="widget-content nopadding">
              <form enctype="multipart/form-data" action="{{ url('/admin/products/attribute/edit/'.$productDetails->product_id) }}" method="post" class="form-horizontal" id="product_validate" name="product_validate">{{csrf_field()}}
                <input type="hidden" name="product_id" value="{{$productDetails->product_id}}" />
                <div class="control-group">
                  <label class="control-label">Product Name :</label>
                  <label class="control-label"> <strong>{{$productDetails->name}}</strong> </label>
                </div>
                <div class="control-group">
                  <label class="control-label">Product Code :</label>
                  <label class="control-label"> <strong>{{$productDetails->product_code}}</strong> </label>
                </div>
                <div class="control-group">
                  <label class="control-label">Product Color :</label>
                  <label class="control-label"> <strong>{{$productDetails->Color}}</strong> </label>
                </div>
                <div class="control-group">
                  <label class="control-label">Sku :</label>
                    <div class="field_wrapper controls">
                        <div>
                            <input type="text" class="span11" name="sku[]" id="sku[]" placeholder="Enter sku"  style="width:120px;"/>
                            <input type="text" class="span11" name="size[]" id="size[]" placeholder="Enter Size"  style="width:120px;"/>
                            <input type="text" class="span11" name="price[]" id="price[]" placeholder="Enter Price"  style="width:120px;"/>
                            <input type="text" class="span11" name="stock[]" id="stock[]" placeholder="Enter Stock"  style="width:120px;"/>
                            <a href="javascript:void(0)" class="btn btn-default add_button"><span class="icon icon-plus" aria-hidden="true"></span> Add</a>
                        </div>
                    </div>
                </div>
              
                
                <div class="form-actions pull-right">
                  <button type="submit" class="btn btn-success" value="Add Attributes">Save</button>
                </div>
                <div class="pull-left form-actions">
                  <a  href="/admin/products" class="btn btn-default">Back</a>
                </div>
              </form>
            </div>
          </div>
        
          
        </div>
    </div>
    --}}
        
  
  </div>

  
</div>
<!--end-main-container-part-->
@endsection