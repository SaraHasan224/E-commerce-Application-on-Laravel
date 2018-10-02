@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/reach-us-at')}}" title="Go to Index Page Content" class="tip-bottom"><i class="icon-tags"></i> Reach Us At</a> 
        <a href="JavaScript:void(0);" title="Edit Index Page Content" class="tip-bottom"><i class="icon-plus"></i>Edit</a> 
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
@if(!(empty($post)))
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Reach Us At</h5>
        </div>
        <div class="widget-content nopadding">
          <form  enctype="multipart/form-data"  action="{{url('/admin/reach-us-at/edit/'.$post->id)}}" name="" id="" method="post" class="form-horizontal">{{csrf_field()}}
            
            <div class="control-group">
              <label class="control-label">Location :</label>
              <div class="controls">
                <input type="text" name="location" id="location" class="span11" value="{{$post->location}}" />
              </div>
            </div>            
            <div class="control-group">
              <label class="control-label">Email Address :</label>
              <div class="controls">
                <input type="email" name="email" id="email" class="span11" value="{{$post->email}}" />
              </div>
            </div>            
            <div class="control-group">
              <label class="control-label">Contact Number :</label>
              <div class="controls">
                <input type="text" name="number" id="number" class="span11" value="{{$post->contactNumber}}" />
              </div>
            </div>           
             <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                 <select class="form-control" id="status" name="status" value="{{$post->status}}">
                  @if (($post->status) == 1)
                  <option value="1">
                    <button type="button" class="btn btn-info">Enable</button>
                  </option>
                  <option value="0">
                    <button type="button" class="btn btn-info">Disable</button>
                  </option>
                  @else
                  <option value="0">                
                    <button type="button" class="btn btn-warning">Disable</button>
                  </option>
                  <option value="1">
                    <button type="button" class="btn btn-info">Enable</button>
                  </option>
                  @endif
                </select>
              </div>
            </div>
            <div class="form-actions pull-right">
              <button type="submit" value="Edit Sub Categories" class="btn btn-success">Save</button>
            </div>
            <div class="pull-left form-actions">
              <a  href="/admin/reach-us-at" class="btn btn-default">Back</a>
            </div>
          </form>
        </div>
      </div>   
    </div>
  </div>

  {{-- Customer saying --}}
@elseif(!(empty($views)))
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit customer saying for index page</h5>
        </div>
        <div class="widget-content nopadding">
          <form  enctype="multipart/form-data"  action="{{url('/admin/owner-view/edit/'.$views->id)}}" name="" id="" method="post" class="form-horizontal">{{csrf_field()}}
            
            <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
                <input type="text" name="name" id="name" class="span11" value="{{$views->name}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Designation/Position :</label>
              <div class="controls">
                <input type="text" name="position" id="position" class="span11" value="{{$views->position}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Thoughts/Views :</label>
              <div class="controls">
                <input type="text" name="views" id="views" class="span11" value="{{$views->view}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Image</label>
              <div class="controls">
                <input type="hidden" name="current_image" value="{{$views->image}}" />
                <input type="file" name="image" id="image" />
                @if(!empty($views->image))
                  <img style="width:70px;" src="{{asset('/images/backend_images/index/views/'.$views->image)}}"/> | <a href={{url('/admin/owner-view/deleteViewImage/'.$views->id)}}>Delete</a>
                @endif
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                 <select class="form-control" id="status" name="status" value="{{$views->status}}">
                  @if (($views->status) == 1)
                  <option value="1">
                    <button type="button" class="btn btn-info">Enable</button>
                  </option>
                  <option value="0">
                    <button type="button" class="btn btn-info">Disable</button>
                  </option>
                  @else
                  <option value="0">                
                    <button type="button" class="btn btn-warning">Disable</button>
                  </option>
                  <option value="1">
                    <button type="button" class="btn btn-info">Enable</button>
                  </option>
                  @endif
                </select>
              </div>
            </div>
            <div class="form-actions pull-right">
              <button type="submit" value="Edit Sub Categories" class="btn btn-success">Save</button>
            </div>
            <div class="pull-left form-actions">
              <a  href="/admin/index" class="btn btn-default">Back</a>
            </div>
          </form>
        </div>
      </div>   
    </div>
  </div>
@endif
   
  </div>
</div>
<!--end-main-container-part-->
@endsection


