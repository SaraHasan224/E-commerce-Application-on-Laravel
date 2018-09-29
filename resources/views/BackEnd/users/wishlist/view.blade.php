
@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/users')}}" title="Go to Users" class="tip-bottom"><i class="icon-user"></i> Users</a>
        <a href="{{url('/admin/wishlist')}}" title="Go to Wishlist" class="tip-bottom"><i class="icon-tags"></i> Wishlist</a> 
    </div>
    <h1>Wishlist</h1>
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
    
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-tags"></i> </span>
            <h5>Wishlist</h5>
          </div>
          <div class="widget-content ">
            <table class="table table-bordered table-striped with-check data-table">
              <thead>
                <tr>
                  <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                  <th>User Name</th>
                  <th>Product Name</th>
                  <th>Product Image</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                    @foreach($data as $item)   
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>{{$item->heading}}</td>
                        <td>{{$item->text}}</td>
                        <td>{{$item->icon}}</td>
                        
                    </tr>
                    @endforeach
                  
              </tbody>
            </table>
          </div>
        </div>
       
      </div>
    </div>
    <hr>
  
  </div>
</div>
<!--end-main-container-part-->
@endsection


