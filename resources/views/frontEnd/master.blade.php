<!DOCTYPE html>
<html lang="en-US">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name="author" content="{{$website->author}}"/>
   <meta name="description" content="{{$website->description}}" />
   <meta name="keywords" content="{{$website->keywords}}" />
   <meta name="tags" content="{{$website->tags}}" />
   <meta name="url" content="{{$website->url}}" />
   <meta name="google-site-verification" content="{{$website->google}}">
   <!-- Title-->
   <title>@yield('title')</title>
   <!-- Favicon-->
   <link rel="icon" href="{{asset($website->fav_icon)}}" type="image/x-icon" />
   <!-- Stylesheets-->
   <link rel="stylesheet" href="{{asset('frontEnd')}}/css/bootstrap.css" type="text/css" media="all" />
   <link rel="stylesheet" href="{{asset('frontEnd')}}/css/style.css" type="text/css" media="all" />
   <link rel="stylesheet" href="{{asset('frontEnd')}}/css/responsive.css" type="text/css" media="all" />
   <link rel="stylesheet" href="{{asset('frontEnd')}}/css/main.css" type="text/css" media="all" />
   <!-- end head -->
</head>

<body class="mobile_nav_class jl-has-sidebar">
   <div class="options_layout_wrapper jl_radius jl_none_box_styles jl_border_radiuss">
      <div class="options_layout_container full_layout_enable_front">
         <!-- Start header -->
         @include('frontEnd.include.header')
          <!-- End header -->
         <!-- Feature section -->
         @yield('content')
         <!-- End Feature section -->

         <!-- Start footer -->
         @include('frontEnd.include.footer')
         <!-- End footer -->
      </div>
   </div>
   <div id="go-top">
      <a href="#go-top"><i class="fa fa-angle-up"></i></a>
   </div>
   <script src="{{asset('frontEnd')}}/js/jquery.js"></script>
   <script src="{{asset('frontEnd')}}/js/fluidvids.js"></script>
   <script src="{{asset('frontEnd')}}/js/infinitescroll.js"></script>
   <script src="{{asset('frontEnd')}}/js/justified.js"></script>
   <script src="{{asset('frontEnd')}}/js/slick.js"></script>
   <script src="{{asset('frontEnd')}}/js/theia-sticky-sidebar.js"></script>
   <script src="{{asset('frontEnd')}}/js/aos.js"></script>
   <script src="{{asset('frontEnd')}}/js/custom.js"></script>
   <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61540b79c857cd79"></script>

   <script>
      var d = (new Date()).toString().split('').splice(1,3).join(' ');
      document.getElementById("date").innerHTML = d;
      //date functions
   </script>
</body>

</html>
