@extends('BackEnd.include.header')
@section('content')
<!--main-container-part-->
<div id="content">
<div id="breadcrumb"> 
        <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="{{url('/admin/subCategories')}}" title="Go to Sub Categories" class="tip-bottom"><i class="icon-tags"></i> Sub Categories</a> 
        <a href="{{url('/admin/subCategories/add')}}" title="Add Sub Category" class="tip-bottom"><i class="icon-plus"></i>Edit Sub Categories</a> 
    </div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Sub Categories</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{url('/admin/subCategories/edit/'.$sub_category->category_id)}}" name="category_validate" id="category_validate" method="post" class="form-horizontal">{{csrf_field()}}
            <div class="control-group">
              <label class="control-label">Category Name :</label>
              <div class="controls">
                <input type="text" name="subCatName" id="subCatName" class="span11" value="{{$sub_category->category_name}}" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Main Category :</label>
              <div class="controls">
                 <select class="form-control" id="parentId" name="parentId">
                   @foreach ($categoryName as $item)
                   <option value="{{$item->category_id}}">{{ $item->category_name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">URL :</label>
              <div class="controls">
                <input type="text" name="url" id="url" class="span11" value="{{$sub_category->url}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description</label>
              <div class="controls">
                <textarea class="span11" id="description" name="description" >{{$sub_category->description}}</textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                 <select class="form-control" id="status" name="status" value="{{$sub_category->status}}">
                  <option value="1">
                    <button type="button" class="btn btn-info">Enable</button>
                  </option>
                  <option value="0">                
                    <button type="button" class="btn btn-warning">Disable</button>
                  </option>
                </select>
              </div>
            </div>
            <div class="form-actions pull-right">
              <button type="submit" value="Edit Sub Categories" class="btn btn-success">Save</button>
            </div>
            <div class="pull-left form-actions">
              <a  href="/admin/subCategories" class="btn btn-default">Back</a>
            </div>
          </form>
        </div>
      </div>
    
      
    </div>
      </div>
 
</div></div>
<!--end-main-container-part-->
@endsection


