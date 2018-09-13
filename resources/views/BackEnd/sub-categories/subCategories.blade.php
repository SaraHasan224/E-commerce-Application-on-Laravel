
@extends('layouts.adminLayout.admin_header')
@section('content')
<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/subCategories')}}" title="Go to Categories" class="tip-bottom"><i class="icon-tags"></i> Sub Categories</a> 
    </div>
    <h1>Categories</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="pull-right">
        <a href="{{url('/admin/subCategories/add')}}" type="button" class="btn btn-primary">Add</a>
        <a type="button" class="btn btn-danger">Delete</a>
    </div>
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
                  <th>Sub Category Id</th>
                  <th>Parent Id</th>
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
                
                    @foreach($subCategory as $subCategories)   
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>{{$subCategories->sub_category_id}}</td>
                        <td>{{$subCategories->category_id}}</td>
                        <td>{{$subCategories->sub_category_name}}</td>
                        <td>{{$subCategories->description}}</td>
                        <td>{{$subCategories->url}}</td>
                        <td>
                            @if($subCategories->status == 1)                              
                              <button type="button" class="btn btn-info">Active</button>
                            @else
                              <button type="button" class="btn btn-warning">Dis active</button>
                            @endif
                        </td>
                        <td>{{$subCategories->created_at}}</td>
                        <td>{{$subCategories->updated_at}}</td>
                        <td><a href="/admin/subCategories/edit/{{$subCategories->updated_at}}" type="button" class="btn btn-primary">Edit</button></td>
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


