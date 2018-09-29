@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/footer')}}" title="Go to Photo Stream" class="tip-bottom"><i class="icon-tags"></i> Index Photo Stream</a> 
        <a href="{{url('/admin/footer/add')}}" title="Add Photo Stream" class="tip-bottom"><i class="icon-plus"></i>Add Photo Stream</a> 
    </div>
<div class="container-fluid">
  <hr>
  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Add Photo Stream</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" action="{{ url('/admin/photostream/add') }}" method="post" class="form-horizontal" id="" name="">{{csrf_field()}}
              <div class="control-group">
                <label class="control-label">Image</label>
                <div class="controls">                
                  <input type="file"  name="image" id="image"/>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Link to :</label>
                <div class="controls">
                  <input type="text" class="span11" name="url" id="url" placeholder="Enter link" />
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


