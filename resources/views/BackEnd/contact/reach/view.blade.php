
@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="JavaScript:void(0);" title="Reach us at" class="tip-bottom"><i class="icon-tags"></i> Reach Us at</a> 
    </div>
    <h1>Reach Us At</h1>
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
      <div class="row-fluid">
        <div class="span12">

          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-tags"></i> </span>
              <h5>Reach Us At</h5>
              <div class="pull-right">
                  <a href="{{url('/admin/reach-us-at/add')}}" type="button" class="btn btn-primary" style="margin-top:3px; margin-right:10px">Add</a>
              </div>
            </div>
            <div class="widget-content ">
              <table class="table table-bordered table-striped with-check data-table">
                <thead>
                  <tr>
                    <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                    <th>Location</th>
                    <th>Email Address</th>
                    <th>Contact Number</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                      @foreach($location as $post)   
                      <tr>
                          <td><input type="checkbox" /></td>                        
                          <td>{{$post->location}}</td>
                          <td>{{$post->email}}</td>
                          <td>{{$post->contactNumber}}</td>
                          <td>
                              @if($post->status == 1)                              
                                <button type="button" class="btn btn-info">Active</button>
                              @else
                                <button type="button" class="btn btn-warning">Dis active</button>
                              @endif
                          </td>
                          <td>{{$post->created_at}}</td>
                          <td>{{$post->updated_at}}</td>
                          <td>
                            <a href="{{url('/admin/reach-us-at/edit/'.$post->id)}}" type="button" class="btn btn-primary">Edit</a>
                            <a href="{{url('/admin/reach-us-at/delete/'.$post->id)}}" type="button" class="btn btn-danger delete">Delete</a>
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


