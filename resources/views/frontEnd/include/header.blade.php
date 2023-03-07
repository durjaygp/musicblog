<header>
    <div class="header-wraper jl_header_magazine_style two_header_top_style header_layout_style3_custom jl_cusdate_head">
    <!-- Start Main menu -->
    <div class="jl_blank_nav"></div>
    <div id="menu_wrapper" class="menu_wrapper jl_menu_sticky jl_stick">
        <div class="container">
            <div class="row">
                <div class="main_menu col-md-12">
                    <div class="logo_small_wrapper_table">
                        <div class="logo_small_wrapper">
                            <!-- begin logo -->
                            <a class="logo_link" href="{{route('home')}}">
                                <img src="{{asset($website->website_logo)}}" alt="{{$website->name}}" />
                            </a>
                            <!-- end logo -->
                        </div>
                    </div>
                    <!-- main menu -->
                    <div class="menu-primary-container navigation_wrapper">
                        <ul id="mainmenu" class="jl_main_menu">
                            <li class="menu-item">
                                <a href="{{route('home')}}">Home<span class="border-menu"></span></a>
                            </li>
                            @foreach($header_categories as $header_category)
                            <li class="menu-item">
                                <a href="{{route('category.wise.blog',$header_category->slug)}}">{{$header_category->name}}<span class="border-menu"></span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end main menu -->
                    <div class="search_header_menu">
                        <div class="menu_mobile_icons">
                            <i class="fa fa-bars"></i>
                        </div>
                        <div class="search_header_wrapper search_form_menu_personal_click">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
<div id="content_nav" class="jl_mobile_nav_wrapper">
    <div id="nav" class="jl_mobile_nav_inner">
        <div class="menu_mobile_icons mobile_close_icons closed_menu">
            <span class="jl_close_wapper"><span class="jl_close_1"></span><span class="jl_close_2"></span></span>
        </div>
        <ul id="mobile_menu_slide" class="menu_moble_slide">
            <li class="menu-item">
                <a href="#">Home<span class="border-menu"></span></a>
            </li>
            @foreach($header_categories as $header_category)
            <li class="menu-item">
                <a href="{{route('category.wise.blog',$header_category->slug)}}">{{$header_category->name}}<span class="border-menu"></span></a>
            </li>
            @endforeach
        </ul>
        <span class="jl_none_space"></span>
        <div id="disto_about_us_widget-2" class="widget jellywp_about_us_widget">

        </div>
    </div>
</div>
<div class="search_form_menu_personal">
    <div class="menu_mobile_large_close">
               <span class="jl_close_wapper search_form_menu_personal_click"><span class="jl_close_1"></span><span
                       class="jl_close_2"></span></span>
    </div>
    <form method="post" class="searchform_theme" action="{{route('search.wise.blog')}}">
        @csrf
        <input type="text" placeholder="Search..." name="search" class="search_btn" />
        <button type="submit" class="button">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>
<div class="mobile_menu_overlay"></div>
