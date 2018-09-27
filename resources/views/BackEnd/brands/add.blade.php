@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/brands')}}" title="Go to Banners" class="tip-bottom"><i class="icon-tags"></i> Brands</a> 
        <a href="{{url('/admin/brands/add')}}" title="Add Banners" class="tip-bottom"><i class="icon-plus"></i>Add Brands</a> 
    </div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Brands</h5>
        </div>
        <div class="widget-content nopadding">
          <form enctype="multipart/form-data" action="{{ url('/admin/brands/add') }}" method="post" class="form-horizontal" id="brand_validate" name="brand_validate">{{csrf_field()}}
            <div class="control-group">
              <label class="control-label">Brand name :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" id="name" placeholder="Enter brand name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
                <input type="text" class="span11" name="description" id="description" placeholder="Enter brand name" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">URL :</label>
              <div class="controls">
                <input type="text" class="span11" name="url" id="url" placeholder="Enter link of page" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Image</label>
              <div class="controls">                
                <input type="file"  name="image" id="image"/>
              </div>
            </div>
            <div class="form-actions pull-right">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
            <div class="pull-left form-actions">
              <a  href="/admin/brands" class="btn btn-default">Back</a>
            </div>
          </form>
        </div>
      </div>
    
      
    </div>
      </div>
 
</div></div>
<!--end-main-container-part-->
@endsection


