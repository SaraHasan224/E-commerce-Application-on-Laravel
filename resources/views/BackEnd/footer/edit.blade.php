@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/footer')}}" title="Go to Footer" class="tip-bottom"><i class="icon-tags"></i> Footer</a> 
        <a href="JavaScript:void(0);" title="Edit Footer" class="tip-bottom"><i class="icon-plus"></i>Edit Footer</a> 
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
@if(!(empty($getLinks)))
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Footer Links</h5>
        </div>
        <div class="widget-content nopadding">
          <form  enctype="multipart/form-data"  action="{{url('/admin/footer/edit/'.$getLinks->id)}}" name="" id="" method="post" class="form-horizontal">{{csrf_field()}}
            
            <div class="control-group">
              <label class="control-label">Page Title :</label>
              <div class="controls">
                <input type="text" name="title" id="title" class="span11" value="{{$getLinks->page_title}}" />
              </div>
            </div>            
            <div class="control-group">
              <label class="control-label">URL :</label>
              <div class="controls">
                <input type="text" name="url" id="url" class="span11" value="{{$getLinks->url}}" />
              </div>
            </div>            
             <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                 <select class="form-control" id="status" name="status" value="{{$getLinks->status}}">
                  @if (($getLinks->status) == 1)
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
@elseif(!(empty($getMedia)))
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit social media account links on website</h5>
        </div>
        <div class="widget-content nopadding">
          <form  enctype="multipart/form-data"  action="{{url('/admin/media/edit/'.$getMedia->id)}}" name="" id="" method="post" class="form-horizontal">{{csrf_field()}}
            
            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input type="text" name="name" id="name" class="span11" value="{{$getMedia->name}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Link :</label>
              <div class="controls">
                <input type="text" name="link" id="link" class="span11" value="{{$getMedia->link}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Icon :</label>
              <div class="controls">
                <input type="text" name="icon" id="icon" class="span11" value="{{$getMedia->icon}}" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                 <select class="form-control" id="status" name="status" value="{{$getMedia->status}}">
                  @if (($getMedia->status) == 1)
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
              <a  href="/admin/footer" class="btn btn-default">Back</a>
            </div>
          </form>
        </div>
      </div>   
    </div>
  </div>
@elseif(!(empty($getPhotoStream)))
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit PhotoStream</h5>
        </div>
        <div class="widget-content nopadding">
          <form  enctype="multipart/form-data"  action="{{url('/admin/photostream/edit/'.$getPhotoStream->id)}}" name="" id="" method="post" class="form-horizontal">{{csrf_field()}}


            <div class="control-group">
              <label class="control-label">Image</label>
              <div class="controls">
                <input type="hidden" name="current_image" value="{{$getPhotoStream->image}}" />
                <input type="file" name="image" id="image" />
                @if(!empty($getPhotoStream->image))
                  <img style="width:70px;" src="{{asset('/images/backend_images/footer/'.$getPhotoStream->image)}}"/> | <a href={{url('/admin/photostream/deleteImage/'.$getPhotoStream->id)}}>Delete</a>
                @endif
              </div>
            </div>            
            <div class="control-group">
              <label class="control-label">Link to :</label>
              <div class="controls">
                <input type="text" name="link" id="link" class="span11" value="{{$getPhotoStream->link_to}}" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                 <select class="form-control" id="status" name="status" value="{{$getPhotoStream->status}}">
                  @if (($getPhotoStream->status) == 1)
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

