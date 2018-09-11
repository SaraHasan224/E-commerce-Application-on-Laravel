
@extends('layouts.adminLayout.admin_header')
@section('content')
<!--main-container-part-->

<!--breadcrumbs-->
 
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/settings')}}" title="Go to Settings" class="tip-bottom"><i class="icon-cogs"></i> Settings</a> 
    </div>
    <h1>Settings</h1>
   @if(Session::has('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{!!session('error')!!}</strong>
                    </div>
                @endif

                @if(Session::has('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{!!session('success')!!}</strong>
                    </div>
                @endif
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-key"></i> </span>
              <h5>Password Settings</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{ url('/admin/update-pwd') }}" name="password_validate" id="password_validate" novalidate="novalidate">{{ csrf_field() }}
                <div class="control-group">
                  <label class="control-label">Current Password</label>
                  <div class="controls">
                    <input type="password" name="current_pwd" id="current_pwd" />
                    <span id="chkPwd"></span>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">New Password</label>
                  <div class="controls">
                    <input type="password" name="new_pwd" id="new_pwd" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Confirm Password</label>
                  <div class="controls">
                    <input type="password" name="confirm_pwd" id="confirm_pwd" />
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="Update Password" class="btn btn-success">
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

