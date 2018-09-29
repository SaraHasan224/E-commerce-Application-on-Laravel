@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/about')}}" title="Go to Index Page Content" class="tip-bottom"><i class="icon-tags"></i>  About Us Page Content</a> 
        <a href="{{url('/admin/about/edit')}}" title="Edit Index Page Content" class="tip-bottom"><i class="icon-plus"></i>Edit About Us Page Content</a> 
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
          <h5>Edit About Us</h5>
        </div>
        <div class="widget-content nopadding">
          <form  enctype="multipart/form-data"  action="{{url('admin/about/edit/'.$post->id)}}" name="" id="" method="post" class="form-horizontal">{{csrf_field()}}
            
            <div class="control-group">
              <label class="control-label">Heading :</label>
              <div class="controls">
                <input type="text" name="heading" id="heading" class="span11" value="{{$post->heading}}" />
              </div>
            </div>            
            <div class="control-group">
              <label class="control-label">Description 1 :</label>
              <div class="controls">
                <input type="text" name="text" id="text" class="span11" value="{{$post->text}}" />
              </div>
            </div>           
            <div class="control-group">
              <label class="control-label">Description 2 :</label>
              <div class="controls">
                <input type="text" name="text" id="text" class="span11" value="{{$post->text}}" />
              </div>
            </div>            
            <div class="control-group">
              <label class="control-label">Highlighted Tect :</label>
              <div class="controls">
                <input type="text" name="icon" id="icon" class="span11" value="{{$post->icon}}" />
              </div>
            </div>                  
            <div class="control-group">
              <label class="control-label">Cover Image</label>
              <div class="controls">
                <input type="hidden" name="current_image" value="{{$views->image}}" />
                <input type="file" name="image" id="image" />
                @if(!empty($views->image))
                  <img style="width:70px;" src="{{asset('/images/backend_images/about/'.$views->image)}}"/> | <a href={{url('/admin/owner-view/deleteViewImage/'.$views->id)}}>Delete</a>
                @endif
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
              <a  href="/admin/index" class="btn btn-default">Back</a>
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
          <h5>Edit Our Team Member's Credentials</h5>
        </div>
        <div class="widget-content nopadding">
          <form  enctype="multipart/form-data"  action="{{url('/admin/our-team/edit/'.$views->id)}}" name="" id="" method="post" class="form-horizontal">{{csrf_field()}}
            
            <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
                <input type="text" name="name" id="name" class="span11" value="{{$views->name}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Position :</label>
              <div class="controls">
                <input type="text" name="position" id="position" class="span11" value="{{$views->position}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Image</label>
              <div class="controls">
                <input type="hidden" name="current_image" value="{{$views->image}}" />
                <input type="file" name="image" id="image" />
                @if(!empty($views->image))
                  <img style="width:70px;" src="{{asset('/images/backend_images/our-team/'.$views->image)}}"/> | <a href={{url('/admin/our-team/deleteTeamImage/'.$views->id)}}>Delete</a>
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


