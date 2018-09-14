
@extends('layouts.adminLayout.admin_header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/products')}}" title="Go to Products" class="tip-bottom"><i class="icon-tags"></i> Products</a> 
        <a href="{{url('/admin/products/add')}}" title="Add Products" class="tip-bottom"><i class="icon-plus"></i>Add products</a> 
    </div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Products</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ url('/admin/products/add') }}" method="post" class="form-horizontal" id="product_validate" name="product_validate">{{csrf_field()}}
            <div class="control-group">
              <label class="control-label">Product Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="productName" id="productName" placeholder="Enter Product Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Category Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="categoryName" id="categoryName" placeholder="Enter Category Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Sub Category Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="subCategoryName" id="subCategoryName" placeholder="Enter sub category Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">URL :</label>
              <div class="controls">
                <input type="text" class="span11" name="url" id="url" placeholder="Enter URL" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
                <textarea class="span11" name="description" id="description"></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Image :</label>
              <div class="controls">
                <input type="file"  name="Productimage" id="Productimage"/>
              </div>
            </div>
            <div class="form-actions pull-right">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
            <div class="pull-left form-actions">
              <a  href="/admin/products" class="btn btn-default">Back</a>
            </div>
          </form>
        </div>
      </div>
    
      
    </div>
      </div>
 
</div></div>
<!--end-main-container-part-->
@endsection


