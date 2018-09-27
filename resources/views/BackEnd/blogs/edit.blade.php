@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/blogs')}}" title="Go to Blogs" class="tip-bottom"><i class="icon-tags"></i> Blogs</a> 
        <a href="{{url('/admin/blogs/add')}}" title="Add Blog Post" class="tip-bottom"><i class="icon-plus"></i>Add Blog Post</a> 
    </div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Blog Post</h5>
        </div>
        <div class="widget-content nopadding">
          <form enctype="multipart/form-data" action="{{url('/admin/blogs/edit/'.$post->id)}}"  method="post" class="form-horizontal">{{csrf_field()}}
            <div class="control-group">
                <label class="control-label">Title :</label>
                <div class="controls">
                  <input type="text" name="title" id="title" class="span11" value="{{$post->title}}" />
                </div>
              </div>
            <div class="control-group">
              <label class="control-label">Author :</label>
              <div class="controls">
                <input type="text" name="author" class="author" value="{{$post->author}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">URL :</label>
              <div class="controls">
                <input type="text" name="url" class="span11" value="{{$post->url}}" />
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
            <div class="control-group">
              <label class="control-label">Description</label>
              <div class="controls">
                <textarea class="span11" name="description" >{{$post->description}}</textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Image</label>
              <div class="controls">
                <input type="file" name="image" id="image" />
                @if(!empty($post->image))
                  <img style="width:70px;" src="{{asset('/images/backend_images/blogs/'.$post->image)}}"/> | <a href={{url('/admin/blogs/deleteProductImage/'.$post->id)}}>Delete</a>
                @endif
              </div>
            </div>
            <div class="form-actions pull-right">
              <button type="submit" value="Edit Categories" class="btn btn-success">Save</button>
            </div>
            <div class="pull-left form-actions">
              <a  href="/admin/blogs" class="btn btn-default">Back</a>
            </div>
          </form>
        </div>
      </div>
    
      
    </div>
      </div>
 
</div></div>
<!--end-main-container-part-->
@endsection


