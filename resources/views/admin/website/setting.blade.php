@extends('admin.master')
@section('title','Website Information Settings')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Website Information</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Website</li>
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
                                <h3 class="card-title">Update Website Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('update.setting')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Website Name/Title</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Website Name" value="{{$setting->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Website Footer Text</label>
                                        <input type="text" name="footer" class="form-control" placeholder="All Rights Reserved Powered by websiteowner" value="{{$setting->footer}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Website Author Name<small class="text-sm text-gray-400">(Optional)</small></label>
                                        <input type="text" name="author" class="form-control" placeholder="Website Author Name" value="{{$setting->author}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Website URL</label>
                                        <input type="text" name="url" class="form-control" placeholder="Website URL" value="{{$setting->url}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Website Keywords</label>
                                        <input type="text" name="keywords" class="form-control" placeholder="Website Keywords" value="{{$setting->keywords}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Website Description <small>(It also appear in Footer About Us)</small></label>
                                        <textarea name="description" id="" cols="10" rows="5" class="form-control" placeholder="Write a short Description">{{$setting->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Google Verification Code <small class="text-sm text-gray-400">(Optional)</small></label>
                                        <input type="text" name="google" class="form-control" placeholder="Enter Category Title" value="{{$setting->google}}">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Website Image, LOGO <small>(Width 325px X Height 100px)</small></label>
                                                <input class="dropify" type="file" name="website_logo" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Existing Image</label> <br>
                                                <img src="{{asset($setting->website_logo)}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Website FavIcon <small> (Width 80px X Height 80px)</small></label>
                                                <input class="dropify" type="file" name="fav_icon" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Existing Image</label> <br>
                                                <img src="{{asset($setting->fav_icon)}}" alt="" width="80px" height="80px">
                                            </div>
                                        </div>
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
