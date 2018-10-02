@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/footer')}}" title="Go to Footer" class="tip-bottom"><i class="icon-tags"></i> Footer </a> 
        <a href="{{url('/admin/footer/add')}}" title="Add Footer Links to website" class="tip-bottom"><i class="icon-plus"></i>Add Links</a> 
    </div>
<div class="container-fluid">
  <hr>
  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Add footer links to website</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" action="{{ url('/admin/footer/add') }}" method="post" class="form-horizontal" id="" name="">{{csrf_field()}}
              <div class="control-group">
                <label class="control-label">Title :</label>
                <div class="controls">
                  <input type="text" class="span11" name="name" id="name" placeholder="Enter title of your social media account" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Link to account :</label>
                <div class="controls">
                  <input type="text" class="span11" name="link" id="link" placeholder="Enter link" />
                </div>
              </div>
              <div class="form-actions pull-right">
                <button type="submit" class="btn btn-success">Save</button>
              </div>
              <div class="pull-left form-actions">
                <a  href="/admin/footer" class="btn btn-default">Back</a>
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

