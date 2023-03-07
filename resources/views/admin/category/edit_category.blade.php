@extends('admin.master')
@section('title','Edit Category')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Category</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('category.update',$category->id)}}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <input type="hidden" name="id" value="{{$category->id}}">
                                        <input type="text" name="name" class="form-control" placeholder="Enter Category Title" value="{{$category->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Description <span class="text-sm text-gray-400">(Optional)</span></label>
                                        <textarea name="description" id="" cols="30" rows="7" class="form-control" placeholder="Write a short Description in 125 words">{{$category->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Status</label>
                                        <select class="custom-select" name="status">
                                            <option {{$category->status==1 ? 'selected':''}} value="1">Published</option>
                                            <option {{$category->status==0 ? 'selected':''}} value="0">Unpublished</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
