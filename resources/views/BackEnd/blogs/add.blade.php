
@extends('layouts.adminLayout.admin_header')
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
          <h5>Add Blog Posts</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ url('/admin/blogs/add') }}" method="post" class="form-horizontal" id="blogs_validate" name="blogs_validate">{{csrf_field()}}
            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input type="text" class="span11" name="title" id="title" placeholder="Enter title" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
                <textarea class="span11" name="description" id="description"></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">URL :</label>
              <div class="controls">
                <input type="text" class="span11" name="url" id="url" placeholder="Enter URL" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">File upload input</label>
              <div class="controls">
                <input type="file" name="file" id="file" />
              </div>
            </div>
            <div class="form-actions pull-right">
              <button type="submit" class="btn btn-success">Save</button>
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


