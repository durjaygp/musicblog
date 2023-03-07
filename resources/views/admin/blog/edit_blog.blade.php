@extends('admin.master')
@section('title','Update Blog')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Blog</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                        <a href="{{route('blog.manage')}}" class="btn btn-primary rounded"><i class="fa fa-arrow-left"></i> Blog List</a>
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
                                <h3 class="card-title">Create New Blog</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('blog.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$blog->id}}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Blog Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter Blog Title" value="{{$blog->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Short Description <span class="text-danger">*</span></label>
                                        <textarea name="description" id="" cols="30" rows="7" class="form-control" placeholder="Write a short Description in 125 words">{{$blog->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Category <span class="text-danger">*</span></label>
                                        <select class="custom-select" name="category_id">
                                            <option > Select Category</option>
                                            @foreach($categories as $category)
                                                <option {{$category->id==$blog->category_id ? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Blog Image<span class="text-danger">*</span></label>
                                        <img src="{{asset($blog->image)}}" class="img-fluid" alt="">
                                        <input class="dropify" type="file" name="image" accept="image/*">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blog Main Content (Body) <span class="text-danger">*</span></label>
                                        <textarea name="body" id="summernote" cols="30" rows="7" class="form-control" placeholder="Write a short Description in 125 words">{{$blog->body}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Status</label>
                                        <select class="custom-select" name="status">
                                            <option {{$blog->status==1 ? 'selected':''}} value="1">Published</option>
                                            <option {{$blog->status==0 ? 'selected':''}} value="0">Unpublished</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Feature Status</label>
                                        <select class="custom-select" name="feature">
                                            <option {{$blog->feature==1 ? 'selected':''}} value="1">Active</option>
                                            <option {{$blog->feature==0 ? 'selected':''}} value="0">Disabled</option>
                                            
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
