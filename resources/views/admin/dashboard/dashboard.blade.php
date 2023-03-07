@extends('admin.master')
@section('title','Dashboard')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
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
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-pencil-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Blog Post</span>
                <span class="info-box-number">
                  {{$postcount}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fas fa-tags"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Category</span>
                <span class="info-box-number">{{$categorycount}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">User</span>
                <span class="info-box-number">{{$usercount}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-md-12">
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Recent Blog Post</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="example" class="table table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Blog Image</th>
                                                        <th>Blog Title</th>
                                                        <th>Blog Category</th>
                                                        <th>Blog Description</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($blogs as $blog)
                                                        <tr>
                                                            <td><img src="{{asset($blog->image)}}" alt="" width="150px" height="100px"></td>
                                                            <td>{{$blog->title}}</td>
                                                            <td>{{$blog->category->name}}</td>
                                                            <td>{{Str::limit($blog->description, 150)}}</td>
                                                            <td class="{{$blog->status==1? 'text-success':'text-danger'}}">{{$blog->status == 1? 'Published': 'Unpublished'}}</td>
                                                            <td>
                                                                <a href="" class="btn btn-sm btn-primary"> <i class="fas fa-edit"></i></a>
                                                                <a href="" class="btn  btn-sm  btn-danger"> <i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->

                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </section>


                    </div>
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
