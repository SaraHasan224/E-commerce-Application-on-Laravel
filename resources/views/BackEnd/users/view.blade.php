
@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/users')}}" title="Go to Users" class="tip-bottom"><i class="icon-tags"></i> Users</a> 
    </div>
    <h1>Users</h1>
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
  <div class="container-fluid">
    <hr>
    <div class="pull-right">
        <a href="{{url('/admin/users/add')}}" type="button" class="btn btn-primary">Add</a>
    </div>
    <div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-tags"></i> </span>
            <h5>Users</h5>
          </div>
          <div class="widget-content ">
            <table class="table table-bordered table-striped with-check data-table">
              <thead>
                <tr>
                  <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                    @foreach($data as $post)   
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>{{$post->name}}</td>
                        <td>{{$post->email}}</td>
                        <td>
                          @if($post->admin == 0)
                            User
                          @elseif($post->admin == 1)
                            Admin
                          @endif
                        </td>
                        <td>
                            @if($post->status == 1)                              
                              <button type="button" class="btn btn-info">Active</button>
                            @else
                              <button type="button" class="btn btn-warning">Dis active</button>
                            @endif
                        </td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                        @if($post->admin == 1)
                        <td>
                          <a href="{{url('/admin/users/edit/'.$post->id)}}" type="button" class="btn btn-primary">Edit</a>
                          <a href="{{url('/admin/users/delete/'.$post->id)}}" type="button" class="btn btn-danger delete">Delete</a>
                        </td>
                        @else
                        <td></td>
                        @endif
                    </tr>
                    @endforeach
                  
              </tbody>
            </table>
          </div>
        </div>
       
      </div>
    </div>
  </div>
</div>
<!--end-main-container-part-->
@endsection


