@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/index')}}" title="Go to Banners" class="tip-bottom"><i class="icon-tags"></i> Index Page Content</a> 
        <a href="{{url('/admin/index/add')}}" title="Add Banners" class="tip-bottom"><i class="icon-plus"></i>Add Index Page Content</a> 
    </div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add content for index page</h5>
        </div>
        <div class="widget-content nopadding">
          <form enctype="multipart/form-data" action="{{ url('/admin/index/add') }}" method="post" class="form-horizontal" id="index_validate" name="index_validate">{{csrf_field()}}
             <div class="control-group">
              <label class="control-label">Heading :</label>
              <div class="controls">
                <input type="text" class="span11" name="heading" id="heading" placeholder="Enter heading for index page" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Text :</label>
              <div class="controls">
                <input type="text" class="span11" name="text" id="text" placeholder="Enter text for index page" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Icon :</label>
              <div class="controls">
                <input type="text" class="span11" name="icon" id="icon" placeholder="Enter icon class for index page" />
              </div>
            </div>
            <div class="form-actions pull-right">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
            <div class="pull-left form-actions">
              <a  href="/admin/index" class="btn btn-default">Back</a>
            </div>
          </form>
        </div>
      </div>
    
      
    </div>
      </div>
 
  </div>
  {{-- Owner's View / Customer Saying --}}
  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Add Customer Saying for index page</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" action="{{ url('/admin/owner-view/add') }}" method="post" class="form-horizontal" id="view_validate" name="view_validate">{{csrf_field()}}
              <div class="control-group">
                <label class="control-label">Name :</label>
                <div class="controls">
                  <input type="text" class="span11" name="name" id="name" placeholder="Enter name of reviewer" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Designation/Position :</label>
                <div class="controls">
                  <input type="text" class="span11" name="position" id="position" placeholder="Enter position of reviewer" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Thoughts/Views :</label>
                <div class="controls">
                  <input type="text" class="span11" name="views" id="views" placeholder="Enter your views here" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Image</label>
                <div class="controls">                
                  <input type="file"  name="image" id="image"/>
                </div>
              </div>
              <div class="form-actions pull-right">
                <button type="submit" class="btn btn-success">Save</button>
              </div>
              <div class="pull-left form-actions">
                <a  href="/admin/index" class="btn btn-default">Back</a>
              </div>
            </form>
          </div>
        </div>
      
        
      </div>
        </div>
  
    </div>
  </div>
</div>


<!--end-main-container-part-->

@endsection


