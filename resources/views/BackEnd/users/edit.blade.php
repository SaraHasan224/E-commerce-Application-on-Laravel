@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/users')}}" title="Go to Users" class="tip-bottom"><i class="icon-tags"></i> Users</a> 
        <a href="{{url('/admin/users/edit')}}" title="Edit Users" class="tip-bottom"><i class="icon-plus"></i>Edit Users</a> 
    </div>
<div class="container-fluid">
  <hr>
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
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Users</h5>
        </div>
        <div class="widget-content nopadding">
          <form  enctype="multipart/form-data"  action="{{url('/admin/users/edit/'.$post->id)}}" name="" id="" method="post" class="form-horizontal">{{csrf_field()}}
             <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
                <input type="text" name="name" id="link" class="span11" value="{{$post->name}}" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Email Address :</label>
              <div class="controls">
                <input type="email" name="email" id="email" class="span11" value="{{$post->email}}" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Role :</label>
              <div class="controls">
                 <select class="form-control" id="role" name="role" value="{{$post->admin}}">
                  @if (($post->admin) == 1)
                  <option value="1">
                    Admin
                  </option>
                  <option value="0">
                    User
                  </option>
                  @else
                  <option value="0">                
                    User
                  </option>
                  <option value="1">
                    Admin
                  </option>
                  @endif
                </select>
              </div>
            </div>            
             <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                 <select class="form-control" id="status" name="status" value="{{$post->status}}">
                  @if (($post->status) == 1)
                  <option value="1">
                    <button type="button" class="btn btn-info">Enable</button>
                  </option>
                  <option value="0">
                    <button type="button" class="btn btn-info">Disable</button>
                  </option>
                  @else
                  <option value="0">                
                    <button type="button" class="btn btn-warning">Disable</button>
                  </option>
                  <option value="1">
                    <button type="button" class="btn btn-info">Enable</button>
                  </option>
                  @endif
                </select>
              </div>
            </div>
            <div class="form-actions pull-right">
              <button type="submit" value="Edit Sub Categories" class="btn btn-success">Save</button>
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


