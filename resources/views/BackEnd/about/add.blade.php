@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/about')}}" title="Go to About Page" class="tip-bottom"><i class="icon-tags"></i> About Page Content</a> 
        <a href="{{url('/admin/about/add')}}" title="Add About Page" class="tip-bottom"><i class="icon-plus"></i>Add About Page Content</a> 
    </div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add content for about page</h5>
        </div>
        <div class="widget-content nopadding">
          <form enctype="multipart/form-data" action="{{ url('/admin/about/add') }}" method="post" class="form-horizontal" id="index_validate" name="index_validate">{{csrf_field()}}
             <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input type="text" class="span11" name="heading" id="heading" placeholder="Enter title" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description 1 :</label>
              <div class="controls">
                <input type="text" class="span11" name="description1" id="description1" placeholder="Enter description for first paragraph" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description 2 :</label>
              <div class="controls">
                <input type="text" class="span11" name="description2" id="description2" placeholder="Enter description for second paragraph" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Highlighted Text :</label>
              <div class="controls">
                <input type="text" class="span11" name="emphasized_text" id="emphasized_text" placeholder="Enter emphasized text" />
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
              <a  href="/admin/about" class="btn btn-default">Back</a>
            </div>
          </form>
        </div>
      </div>
    
      
    </div>
      </div>
 
  </div>

</div>


<!--end-main-container-part-->

@endsection


