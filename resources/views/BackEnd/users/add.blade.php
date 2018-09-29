@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/users')}}" title="Go to Users" class="tip-bottom"><i class="icon-tags"></i> Users</a> 
        <a href="{{url('/admin/users/add')}}" title="Add Users" class="tip-bottom"><i class="icon-plus"></i>Add Users</a> 
    </div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Users</h5>
        </div>
        <div class="widget-content nopadding">
          <form enctype="multipart/form-data" action="{{ url('/admin/users/add') }}" method="post" class="form-horizontal" id="" name="">{{csrf_field()}}
            <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" id="name" placeholder="Enter user name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
                <input type="email" class="span11" name="email" id="email" placeholder="Enter user e-mail" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="password" class="span11" name="password" id="password" placeholder="Enter user password" />
              </div>
            </div>            
             <div class="control-group">
              <label class="control-label">Role :</label>
              <div class="controls">
                 <select class="form-control" id="role" name="role">
                  <option value="1">
                    <button type="button" class="btn btn-info">Admin</button>
                  </option>
                  <option value="0">
                    <button type="button" class="btn btn-info">User</button>
                  </option>
                </select>
              </div>
             <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                 <select class="form-control" id="status" name="status">
                  <option value="1">
                    <button type="button" class="btn btn-info">Active</button>
                  </option>
                  <option value="0">
                    <button type="button" class="btn btn-info">Disactive</button>
                  </option>
                </select>
              </div>
            <div class="form-actions pull-right">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
            <div class="pull-left form-actions">
              <a  href="/admin/users" class="btn btn-default">Back</a>
            </div>
          </form>
        </div>
      </div>
    
      
    </div>
      </div>
 
</div></div>
<!--end-main-container-part-->
@endsection


