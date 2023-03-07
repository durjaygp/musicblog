<footer id="footer-container" class="enable_footer_columns_dark">
    <div class="footer-columns">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="jl_none_space"></span>
                    <div id="disto_about_us_widget-3" class="widget jellywp_about_us_widget">
                        <div class="widget_jl_wrapper about_widget_content">
                            <span class="jl_none_space"></span>
                            <div class="widget-title">
                                <h2>About us</h2>
                            </div>
                            <div class="jellywp_about_us_widget_wrapper">
                                <p>
                                    {{$website->description}}
                                </p>
                            </div>
                            <span class="jl_none_space"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="jl_none_space"></span>
                    <div id="disto_recent_post_widget-3" class="widget post_list_widget">
                        <div class="widget_jl_wrapper">
                            <span class="jl_none_space"></span>
                            <div class="widget-title">
                                <h2>Recent Posts</h2>
                            </div>
                            <div>
                                <ul class="feature-post-list recent-post-widget">
                                    @foreach($footer_recentblog as $recentfooter)
                                    <li>
                                        <a href="{{route('blog',$recentfooter->slug)}}"
                                           class="jl_small_format feature-image-link image_post featured-thumbnail"
                                           title="Round white dining table on brown hardwood">
                                            <img width="120" height="120"
                                                 src="{{asset($recentfooter->image)}}"
                                                 class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                                 alt="{{$recentfooter->title}}" />
                                            <div class="background_over_image"></div>
                                        </a>
                                        <div class="item-details">
                                          <span class="meta-category-small"><a class="post-category-color-text"
                                                                               style="background: #36c942" href="{{route('category.wise.blog',$recentfooter->category->slug)}}">{{$recentfooter->category->name}}</a></span>
                                            <h3 class="feature-post-title">
                                                <a href="{{route('blog',$recentfooter->slug)}}">{{$recentfooter->title}}</a>
                                            </h3>
                                            <span class="post-meta meta-main-img auto_image_with_date">
                                             <span class="post-date"><i class="fa fa-clock-o"></i>{{ $recentfooter->created_at->format('M d, Y') }}</span></span>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            <span class="jl_none_space"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="categories-4" class="widget widget_categories">
                        <div class="widget-title">
                            <h2>Categories</h2>
                        </div>
                        <ul>
                            @foreach($footer_categories as $footer_category)
                            <li class="cat-item cat-item-2">
                                <a href="{{route('category.wise.blog',$footer_category->slug)}}" title="{{$footer_category->description}}">{{$footer_category->name}}</a>
                                <span>{{$footer_category->blogs_count}}</span>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom enable_footer_copyright_dark">
        <div class="container">
            <div class="row bottom_footer_menu_text">
                <div class="col-md-6 footer-left-copyright">
                    © Copyright @php echo date('Y'); @endphp {{$website->footer}}
                </div>
            </div>
        </div>
    </div>
</footer>
