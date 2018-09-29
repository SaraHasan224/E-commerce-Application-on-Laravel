
@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/about')}}" title="Go to Banner" class="tip-bottom"><i class="icon-tags"></i> About Page Content</a> 
    </div>
    <h1>About Page Content</h1>
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
            <h5>About Us</h5>
            <div class="pull-right">
                <a href="{{url('/admin/about/add')}}" type="button" class="btn btn-primary" style="margin-top:3px; margin-right:10px">Add</a>
            </div>
          </div>
          <div class="widget-content ">
            <table class="table table-bordered table-striped with-check data-table">
              <thead>
                <tr>
                  <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                  <th>Title</th>
                  <th>Paragraph 1</th>
                  <th>Paragraph 2</th>
                  <th>Highlighted text</th>
                  <th>Cover Image</th>
                  <th>Status</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                    @foreach($data as $item)   
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>{{$item->heading}}</td>
                        <td>{{$item->description1}}</td>
                        <td>{{$item->description2}}</td>
                        <td>
                        @if($item->cover_image == "")
                          <img src="{{asset('/images/backend_images/products/'.$item->cover_image)}}" style="width:150px; height:100px;" />
                        @else
                          <img src="{{asset('/images/backend_images/about/'.$item->cover_image)}}" style="width:350px;" />
                        @endif
                        </td>
                        <td>
                            @if($item->status == 1)                              
                              <button type="button" class="btn btn-info">Active</button>
                            @else
                              <button type="button" class="btn btn-warning">Dis active</button>
                            @endif
                        </td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                          <a href="{{url('/admin/about/edit/'.$item->id)}}" type="button" class="btn btn-primary">Edit</a>
                          <a href="{{url('/admin/about/delete/'.$item->id)}}" type="button" class="btn btn-danger delete">Delete</a>
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
    <div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-tags"></i> </span>
            <h5>Our Team Members</h5>
            <div class="pull-right">
                <a href="{{url('/admin/our-team/add')}}" type="button" class="btn btn-primary" style="margin-top:3px; margin-right:10px">Add</a>
            </div>
          </div>
          <div class="widget-content ">
            <table class="table table-bordered table-striped with-check data-table">
              <thead>
                <tr>
                  <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                    @foreach($posts as $post)   
                    <tr>
                        <td><input type="checkbox" /></td>                        
                        <td>{{$post->name}}</td>
                        <td>{{$post->position}}</td>
                        <td>
                        @if($post->image == "")
                          <img src="{{asset('/images/backend_images/products/'.$post->image)}}" style="width:100px; height:50px;" />
                        @else
                          <img src="{{asset('/images/backend_images/our-team/'.$post->image)}}" style="width:150px;" />
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
                        <td>
                          <a href="{{url('/admin/our-team/edit/'.$post->id)}}" type="button" class="btn btn-primary">Edit</a>
                          <a href="{{url('/admin/our-team/delete/'.$post->id)}}" type="button" class="btn btn-danger delete">Delete</a>
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


