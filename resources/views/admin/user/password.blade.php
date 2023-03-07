@extends('admin.master')
@section('title','Update your profile')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Change E-mail and Password</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">User</li>
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
                                <h3 class="card-title">Update User Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('password.update')}}" method="post" >
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Admin User Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Category Title" value="{{$user->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Admin User Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="Enter your email address" value="{{$user->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Admin Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter your password">
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
