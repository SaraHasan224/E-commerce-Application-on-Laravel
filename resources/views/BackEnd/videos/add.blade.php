@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/video')}}" title="Go to Videos" class="tip-bottom"><i class="icon-tags"></i> Videos</a> 
        <a href="{{url('/admin/video/add')}}" title="Add Videos" class="tip-bottom"><i class="icon-plus"></i>Add Videos</a> 
    </div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Videos</h5>
        </div>
        <div class="widget-content nopadding">
          <form enctype="multipart/form-data" action="{{ url('/admin/video/add') }}" method="post" class="form-horizontal" id="" name="">{{csrf_field()}}
            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input type="text" class="span11" name="title" id="title" placeholder="Enter main title" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
                <input type="text" class="span11" name="description" id="description" placeholder="Enter title description" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="link" id="link" placeholder="Enter link of page" />
              </div>
            </div>
            <div class="form-actions pull-right">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
            <div class="pull-left form-actions">
              <a  href="/admin/video" class="btn btn-default">Back</a>
            </div>
          </form>
        </div>
      </div>
    
      
    </div>
      </div>
 
</div></div>
<!--end-main-container-part-->
@endsection


