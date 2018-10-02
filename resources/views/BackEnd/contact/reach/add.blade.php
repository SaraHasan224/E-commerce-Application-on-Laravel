@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/reach-us-at')}}" title="Go to Reach Us At" class="tip-bottom"><i class="icon-tags"></i> Reach Us At</a> 
        <a href="JavaScript:void(0);" title="Add" class="tip-bottom"><i class="icon-plus"></i> Add</a> 
    </div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Reach Us At</h5>
        </div>
        <div class="widget-content nopadding">
          <form enctype="multipart/form-data" action="{{ url('/admin/reach-us-at/add') }}" method="post" class="form-horizontal" id="" name="">{{csrf_field()}}
             <div class="control-group">
              <label class="control-label">Location :</label>
              <div class="controls">
                <input type="text" class="span11" name="location" id="location" placeholder="Enter your outlet location" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email Address :</label>
              <div class="controls">
                <input type="email" class="span11" name="email" id="email" placeholder="Enter your contact email address" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Contact Number :</label>
              <div class="controls">
                <input type="text" class="span11" name="number" id="number" placeholder="Enter your contact number" />
              </div>
            </div>
            <div class="form-actions pull-right">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
            <div class="pull-left form-actions">
              <a  href="/admin/reach-us-at" class="btn btn-default">Back</a>
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


