
@extends('layouts.adminLayout.admin_header')
@section('content')
<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/categories')}}" title="Go to Categories" class="tip-bottom"><i class="icon-tags"></i> Categories</a> 
    </div>
    <h1>Categories</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-tags"></i> </span>
            <h5>Categories</h5>
          </div>
          <div class="widget-content ">
            <table class="table table-bordered table-striped with-check data-table">
              <thead>
                <tr>
                  <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                  <th>Category Id</th>
                  <th>Category Name</th>
                  <th>Description</th>
                  <th>URL</th>
                  <th>Status</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @if(count($services) > 0)
                    @foreach($categories as $category)   
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>{{$category->id}}</td>
                        <td>{{$category->id}}</td>
                        <td>{{$category->id}}</td>
                        <td>{{$category->id}}</td>
                        <td>{{$category->id}}</td>
                        <td>{{$category->id}}</td>
                        <td>{{$category->id}}</td>
                        <td><button type="button" class="btn btn-primary">Edit</button></td>
                    </tr>
                    @endforeach
                @endif
                  
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


