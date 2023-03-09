@extends('admin.master')
@section('title','Edit Admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Admin Settings</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Admin</li>
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
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Edit Admin</h3>
                            </div>
                            <form action="{{route('admin.create.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <label for="exampleInputEmail1">Admin Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{$user->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Admin E-mail</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{$user->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="password">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Profile Image</label>
                                                <input class="dropify" type="file" name="image" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Existing Image</label><br>
                                                <img src="{{asset($user->image)}}" alt="" width="250px" height="250px">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Your Description (details) <span class="text-sm text-gray-400">(Optional)</span></label>
                                        <textarea name="description" id="" cols="10" rows="5" class="form-control" placeholder="Write a short Description">{{$user->description}}</textarea>
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
