@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/banners')}}" title="Go to Banners" class="tip-bottom"><i class="icon-tags"></i> Banners/a> 
        <a href="{{url('/admin/banners/add')}}" title="Add Banners" class="tip-bottom"><i class="icon-plus"></i>Edit Banners</a> 
    </div>
<div class="container-fluid">
  <hr>
  @if(Session::has('error'))
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
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Banners</h5>
        </div>
        <div class="widget-content nopadding">
          <form  enctype="multipart/form-data" action="{{url('/admin/slider/edit/'.$post->id)}}" name="" id="" method="post" class="form-horizontal">{{csrf_field()}}
            <div class="control-group">
              <label class="control-label">Main title :</label>
              <div class="controls">
                <input type="text" name="title" id="title" class="span11" value="{{$post->title}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Title description :</label>
              <div class="controls">
                <input type="text" name="description" id="description" class="span11" value="{{$post->description}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Text :</label>
              <div class="controls">
                <input type="text" name="text" id="text" class="span11" value="{{$post->text}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Link to :</label>
              <div class="controls">
                <input type="text" name="link" id="link" class="span11" value="{{$post->link}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Image</label>
              <div class="controls">
                <input type="hidden" name="current_image" value="{{$post->image}}" />
                <input type="file" name="image" id="image" />
                @if(!empty($post->image))
                  <img style="width:70px;" src="{{asset('/images/backend_images/slider/'.$post->image)}}"/> | <a href={{url('/admin/slider/deleteProductImage/'.$post->id)}}>Delete</a>
                @endif
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                 <select class="form-control" id="status" name="status" value="{{$post->status}}">
                  <option value="1">
                    <button type="button" class="btn btn-info">Enable</button>
                  </option>
                  <option value="0">                
                    <button type="button" class="btn btn-warning">Disable</button>
                  </option>
                </select>
              </div>
            </div>
            <div class="form-actions pull-right">
              <button type="submit" value="Edit Sub Categories" class="btn btn-success">Save</button>
            </div>
            <div class="pull-left form-actions">
              <a  href="/admin/slider" class="btn btn-default">Back</a>
            </div>
          </form>
        </div>
      </div>
    
      
    </div>
      </div>
 
</div></div>
<!--end-main-container-part-->
@endsection


