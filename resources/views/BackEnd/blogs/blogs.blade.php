
@extends('layouts.adminLayout.admin_header')
@section('content')
<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/blogs')}}" title="Go to Blog Post" class="tip-bottom"><i class="icon-tags"></i> Blogs</a> 
    </div>
    <h1>Blogs</h1>
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
        <a href="{{url('/admin/blogs/add')}}" type="button" class="btn btn-primary">Add</a>
        <a type="button" class="btn btn-danger">Delete</a>
    </div>
    <div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-tags"></i> </span>
            <h5>Blogs</h5>
          </div>
          <div class="widget-content ">
            <table class="table table-bordered table-striped with-check data-table">
              <thead>
                <tr>
                  <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>URL</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                    @foreach($post as $posts)   
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>{{$posts->title}}</td>
                        <td>{{$posts->description}}</td>
                        <td>{{$posts->url}}</td>
                        {{-- <td>{{$posts->image}}</td> --}}
                        <td></td>
                        
                        <td>
                            @if($posts->status == 1)                              
                              <button type="button" class="btn btn-info">Active</button>
                            @else
                              <button type="button" class="btn btn-warning">Dis active</button>
                            @endif
                        </td>
                        <td>{{$posts->created_at}}</td>
                        <td>{{$posts->updated_at}}</td>
                        <td>
                          <a href="{{url('/admin/blogs/edit/'.$posts->id)}}" type="button" class="btn btn-primary">Edit</a>
                          <a href="{{url('/admin/blogs/delete/'.$posts->id)}}" type="button" class="btn btn-danger delete">Delete</a>
                        </td>
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


