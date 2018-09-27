@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/products')}}" title="Go to Categories" class="tip-bottom"><i class="icon-tags"></i> Products</a> 
    </div>
    <h1>Products</h1>
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
        <a href="{{url('/admin/products/add')}}" type="button" class="btn btn-primary">Add</a>
        <a type="button" class="btn btn-danger">Delete</a>
    </div>
    <div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-tags"></i> </span>
            <h5>Products</h5>
          </div>
          <div class="widget-content ">
            <table class="table table-bordered table-striped with-check data-table">
              <thead>
                <tr>
                  <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                  <th>Product Code</th>
                  <th>Product Name</th>
                  <th>Parent Category</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Product Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
           
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>{{$product->product_code}}</td>
                        <td>{{$product->name}}</td>
                        <td> 
                                @foreach($categoryName as $name)
                                    @if($product->category_id == $name->category_id)
                                    {{$name->category_name}} 
                                    @endif
                                @endforeach                          
                      </td>   
                        <td>{{$product->Quantity}}</td>
                        <td>$ {{$product->Price}}</td>
                      <td>
                        @if($product->image == "NoImageFound.jpg")
                          <img src="{{asset('/images/backend_images/products/'.$product->image)}}" style="width:75px; height:75px;" />
                        @else
                          <img src="{{asset('/images/backend_images/products/small/'.$product->image)}}" style="width:75px; height:75px;" />
                        @endif
                      </td>
                        {{-- <td>{{$product->url}}</td> --}}
                        {{-- <td>
                            @if($product->status == 1)                              
                              <button type="button" class="btn btn-info">Active</button>
                            @else
                              <button type="button" class="btn btn-warning">Dis active</button>
                            @endif
                        </td> --}}
                       
                        <td>
                        
                          <a href="#myModal{{$product->product_id}}" data-toggle="modal" class="btn btn-success">View</a>
                          <a href="{{url('/admin/products/edit/'.$product->product_id)}}" type="button" class="btn btn-primary">Edit</a>
                         
                          <a href="{{url('admin/products/attribute/'.$product->product_id)}}" type="button" class="btn btn-primary">Attributes</a>
                          
                          {{-- <a href="{{url('/admin/products/delete/'.$product->product_id)}}" type="button" class="btn btn-danger delete">Delete</a> --}}
                          <a rel="{{$product->product_id}}" rell="delete" href="JavaScript:void(0)" type="button" class="btn btn-danger deleteRecord">Delete</a>
                      
                    </tr>
                     <div id="myModal{{$product->product_id}}" class="modal hide">
                      <div class="modal-header">
                        <button data-dismiss="modal" class="close" type="button">×</button>
                        <h3>Product Detail</h3>
                      </div>
                      <div class="modal-body">
                          <p align="center">
                              <img src="{{asset('/images/backend_images/products/small/'.$product->image)}}"/>
                          </p>
                          <p><b>Product Code:</b> {{$product->product_code}}</p>
                        <p><b>Product Name:</b>  {{$product->name}}</p>
                        @foreach($categoryName as $Catparent)
                          @if($product->category_id == $Catparent->category_name)
                            <b><p>Category Name:</b> {{$Catparent->category_name}}</p>
                          @endif
                        @endforeach
                        <p><b>URL:</b> {{$product->url}}</p>
                        <p><b>Description:</b> {{$product->description}}</p>      
                        <p><b>Price:</b> {{$product->Price}}</p>
                        <p><b>Quantity:</b> {{$product->Quantity}}</p>
                        <p><b>Color:</b> {{$product->Color}}</p>
                        <p><b>Status:</b>
                          @if($product->status == 1)                              
                               <strong style="color:green">Active</strong>
                             @else
                               <strong style="color:red">Disactive</strong>
                             @endif
                         </p>
                        <p><b>Created At:</b> {{$product->created_at}}</p>
                        <p><b>Updated At:</b> {{$product->updated_at}}</p>
                      </div>
                    </div>
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


