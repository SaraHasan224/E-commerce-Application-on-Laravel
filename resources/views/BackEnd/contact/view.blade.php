
@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="JavaScript:void(0);" title="Customer Support" class="tip-bottom"><i class="icon-tags"></i> Customer support</a> 
    </div>
    <h1>Customer Support</h1>
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
            <h5>Customer Support</h5>
          </div>
          <div class="widget-content ">
            <table class="table table-bordered table-striped with-check data-table">
              <thead>
                <tr>
                  <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                  <th>Name</th>
                  <th>Email Address</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Status</th>
                  <th>Created At</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                    @foreach($data as $item)   
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->subject}}</td>
                        <td>{{$item->message}}</td>
                        <td>
                            @if($item->status == 1)                              
                              <button type="button" class="btn btn-info">Confirmed</button>
                            @else
                              <button type="button" class="btn btn-warning">Pending</button>
                            @endif
                        </td>
                        <td>{{$item->created_at}}</td>
                        <td>
                          <a href="{{url('/admin/support/reply/'.$item->id)}}" type="button" class="btn btn-primary">Reply</a>
                        </td>
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


