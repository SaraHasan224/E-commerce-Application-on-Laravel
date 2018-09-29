@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/blogs')}}" title="Go to Blogs" class="tip-bottom"><i class="icon-tags"></i> Blogs</a> 
        <a href="{{url('/admin/blogs/add')}}" title="Add Blogs" class="tip-bottom"><i class="icon-plus"></i>Add Blogs</a> 
    </div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Blogs</h5>
        </div>
        <div class="widget-content nopadding">
          <form enctype="multipart/form-data" action="{{ url('/admin/blogs/add') }}" method="post" class="form-horizontal" id="post_validate" name="post_validate">{{csrf_field()}}
            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input type="text" class="span11" name="title" id="title" placeholder="Enter title" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Author :</label>
              <div class="controls">
                <input type="text" class="span11" name="author" id="author" placeholder="Enter Author" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">URL :</label>
              <div class="controls">
                <input type="text" class="span11" name="url" id="url" placeholder="Enter URL" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description</label>
              <div class="controls">
                <textarea class="span11" name="description" id="description"></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description 2</label>
              <div class="controls">
                <textarea class="span11" name="description2" id="description2"></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Highlighted Text</label>
              <div class="controls">
                <textarea class="span11" name="emphasized_text" id="emphasized_text"></textarea>
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Image :</label>
              <div class="controls">
                <input type="file"  name="image" id="image"/>
              </div>
            </div>
            <div class="form-actions pull-right">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
            <div class="pull-left form-actions">
              <a  href="/admin/subCategories" class="btn btn-default">Back</a>
            </div>
          </form>
        </div>
      </div>
    
      
    </div>
      </div>
 
</div></div>
<!--end-main-container-part-->
@endsection


