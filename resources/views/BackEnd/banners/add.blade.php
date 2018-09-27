@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/slider')}}" title="Go to Banners" class="tip-bottom"><i class="icon-tags"></i> Slider</a> 
        <a href="{{url('/admin/slider/add')}}" title="Add Banners" class="tip-bottom"><i class="icon-plus"></i>Add Slider</a> 
    </div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Homepage Banner</h5>
        </div>
        <div class="widget-content nopadding">
          <form enctype="multipart/form-data" action="{{ url('/admin/banners/add') }}" method="post" class="form-horizontal" id="slider_validate" name="slider_validate">{{csrf_field()}}
            <div class="control-group">
              <label class="control-label">Image</label>
              <div class="controls">                
                <input type="file"  name="image" id="image"/>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Link to :</label>
              <div class="controls">
                <input type="text" class="span11" name="url" id="url" placeholder="Enter link of page" />
              </div>
            </div>
            <div class="form-actions pull-right">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
            <div class="pull-left form-actions">
              <a  href="/admin/banners" class="btn btn-default">Back</a>
            </div>
          </form>
        </div>
      </div>
    
      
    </div>
      </div>
 
</div></div>
<!--end-main-container-part-->
@endsection


