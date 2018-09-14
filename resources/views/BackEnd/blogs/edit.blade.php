
@extends('layouts.adminLayout.admin_header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/blogs')}}" title="Go to Blogs" class="tip-bottom"><i class="icon-tags"></i> Blog Posts</a> 
        <a href="{{url('/admin/blogs/edit')}}" title="Edit Blogs" class="tip-bottom"><i class="icon-plus"></i>Edit Blog Post</a> 
    </div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Blog Posts</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{url('/admin/blogs/edit/'.$post->id)}}" name="category_validate" id="category_validate" method="post" class="form-horizontal">{{csrf_field()}}
            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input type="text" name="title" class="span11" value="{{$post->title}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description</label>
              <div class="controls">
                <textarea class="span11" name="description" >{{$post->description}}</textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">File upload input</label>
              <div class="controls">
                <input type="file" name="file" id="file" />
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


