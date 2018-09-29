@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/about')}}" title="Go to Our Team" class="tip-bottom"><i class="icon-tags"></i> Our Team</a> 
        <a href="{{url('/admin/our-team/add')}}" title="Add Our Team" class="tip-bottom"><i class="icon-plus"></i>Add Our Team</a> 
    </div>
<div class="container-fluid">
  <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Our Team</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" action="{{ url('/admin/our-team/add') }}" method="post" class="form-horizontal" id="team_validate" name="team_validate">{{csrf_field()}}
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


