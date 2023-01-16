<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NewsBox</title>
    <link rel="icon" href="{{asset('Frontend/img/core-img/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('Frontend/style.css')}}">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="newsbox-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newsboxNav">

                        <!-- Nav brand -->
                        <a href="" class="nav-brand"><img src="{{asset('Frontend/img/core-img/logo.png')}}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#">International</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Europe</li>
                                                <li><a href="#">United Kingdom</a></li>
                                                <li><a href="#">Germany</a></li>
                                                <li><a href="#">Latvia</a></li>
                                                <li><a href="#">Poland</a></li>
                                                <li><a href="#">Italy</a></li>
                                                <li><a href="#">France</a></li>
                                                <li><a href="#">Crotia</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Africa</li>
                                                <li><a href="#">Algeria</a></li>
                                                <li><a href="#">Angola</a></li>
                                                <li><a href="#">Benin</a></li>
                                                <li><a href="#">Botswana</a></li>
                                                <li><a href="#">Burkina Faso</a></li>
                                                <li><a href="#">Burundi</a></li>
                                                <li><a href="#">Cameroon</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Asia</li>
                                                <li><a href="#">Bangladesh</a></li>
                                                <li><a href="#">Chaina</a></li>
                                                <li><a href="#">India</a></li>
                                                <li><a href="#">Afganistan</a></li>
                                                <li><a href="#">Sri Lanka</a></li>
                                                <li><a href="#">Nepal</a></li>
                                                <li><a href="#">Bhutan</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">USA &amp; Canada</li>
                                                <li><a href="#">California</a></li>
                                                <li><a href="#">Florida</a></li>
                                                <li><a href="#">Alabama</a></li>
                                                <li><a href="#">New Yorks</a></li>
                                                <li><a href="#">Texas</a></li>
                                                <li><a href="#">Lowa</a></li>
                                                <li><a href="#">Montana</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">Local News</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="catagory.html">Catagory</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sport</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Archery</a></li>
                                            <li><a href="#">Badminton</a></li>
                                            <li><a href="#">Baseball</a></li>
                                            <li><a href="#">Boxing</a></li>
                                            <li><a href="#">Climbing</a></li>
                                            <li><a href="#">Cricket</a></li>
                                            <li><a href="#">Football</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Lifestyle</a></li>   
                                </ul>
                                
                                <ul class="header-links pull-right">
                                    
                                @auth
                                    <ul>
                                        <li><a href="#" style="color:red;" class="">{{Auth::user()->name}}</a></li>
                                        <li>    

                                    <a href="{{route('home')}}" style=";margin-left:15px" class="ml-4">Dashboard</a></li>
                                    </ul>
                                @else
                                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></a></li></li>

                                    @if (Route::has('register'))
                                       <li> 
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></a></li>
                                    @endif
                                @endauth
                                </div>              
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breaking News Area Start ##### -->
    <section class="breaking-news-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-ticker d-flex flex-wrap align-items-center">
                        <div class="title">
                            <h6>Breaking News</h6>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                @foreach ( $all_news_show as $breaking)
                                    <li><a href="#">{{$breaking->breaking_news}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breaking News Area End ##### -->

    <!-- ##### Intro News Area Start ##### -->
    <section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <h6>All the news</h6>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Latest</a>
                                    <a class="nav-item nav-link" id="nav2" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Popular</a>
                                    <a class="nav-item nav-link" id="nav3" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">International</a>
                                   
                                </div>
                            </nav>
                        </div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                                <div class="row">
                                    @foreach ($left_news as $left )
                                        
                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{asset('Uploads/leftNews')}}/{{$left->photo}}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">{{ \Carbon\Carbon::parse($left->from_date)->format('d :M :Y')}}</span>
                                                <a href="#" class="post-title">{{$left->news_headline}}</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                   {{-- small news --}}

                                    <!-- Single News Area -->
                                    @foreach ($title_news as $title )
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{asset('Uploads/Title')}}/{{$title->title_photo}}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">{{ \Carbon\Carbon::parse($left->from_date)->format('d :M :Y')}}</span>
                                                <a href="#" class="post-title">{{$title->title_headline}}</a>
                                            </div>
                                        </div>
                                    </div>       
                                    @endforeach
                                   
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav2">
                                <div class="row">
                                    @foreach ($popular_news as $popular)                                              
                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{asset('Uploads/Popular')}}/{{$popular->popular_photo}}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">{{ \Carbon\Carbon::parse($left->from_date)->format('d :M :Y')}}</span>
                                                <a href="{{route('newsbody')}}" class="post-title">{{$popular->popular_headline}}</a>
                                                <a href="#" class="post-author">By 
                                                       {{$popular->author}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <!-- Single News Area -->
                                    @foreach ($title_news as $title )
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{asset('Uploads/Title')}}/{{$title->title_photo}}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">{{ \Carbon\Carbon::parse($left->from_date)->format('d :M :Y')}}</span>
                                                <a href="#" class="post-title">{{$title->title_headline}}</a>
                                            </div>
                                        </div>
                                    </div>       
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav3">
                                <div class="row">
                                    @foreach($international_news as $international)
                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{asset('Uploads/International')}}/{{$international->inter_photo}}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">{{ \Carbon\Carbon::parse($left->from_date)->format('d :M :Y')}}</span>
                                                <a href="{{route('newsbody')}}" class="post-title">{{$international->inter_headline}}</a>
                                                <a href="#" class="post-author">By  
                                                    {{$international->author}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                
                                    <!-- Single latest title small News Area -->
                                    @foreach ($title_news as $title )
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{asset('Uploads/Title')}}/{{$title->title_photo}}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">{{ \Carbon\Carbon::parse($left->from_date)->format('d :M :Y')}}</span>
                                                <a href="#" class="post-title">{{$title->title_headline}}</a>
                                            </div>
                                        </div>
                                    </div>       
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                        <div class="single-widget-area newsletter-widget mb-30">
                            <h4>Subscribe to our newsletter</h4>
                            <form action="#" method="post">
                                <input type="email" name="nl-email" id="nlemail" placeholder="Your E-mail">
                                <button type="submit" class="btn newsbox-btn w-100">Subscribe</button>
                            </form>
                            <p class="mt-30">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh . volutpat lobortis.</p>
                        </div>

                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mb-30">
                            <a href="#">
                                <img src="img/bg-img/add3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div>
                       <!-- Single latest title small News Area -->
                        @foreach ($side_news as $side )
                        <div class="">
                            <div style="border-bottom: 1px solid gray;" class="mb-5 single-blog-post d-flex style-4 mb-30">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="{{asset('Uploads/Sidenews')}}/{{$side->photo}}" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    
                                    <a href="#" class="post-title">{{$side->headline}}</a>
                                </div>
                            </div>
                        </div>       
                        @endforeach 
                    </div>
                </div>
                >
            </div>
        </div>
    </section>
    <!-- ##### Intro News Area End ##### -->

    <!-- ##### Top News Area Start ##### -->
    <div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row">
                @foreach ($category as $cat )               
                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                       <div class="card" style="height: 450px;">
                        <div class="card-header">
                             <div class="blog-content">
                                <a href="#" class=""><h3> <div class="blog-content">
                                <a href="#" class="post-title">{{$cat->category_name}}</a>
                            </div></h3></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="blog-thumbnail">
                                <a href="#"><img style="height:280px;" src="{{asset('Uploads/Category')}}/{{$cat->category_image}}" alt=""></a>
                            </div>         
                        </div>
                       </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ##### Top News Area End ##### -->

    <!-- ##### Add Area Start ##### -->
    <div class="big-add-area mb-100">
        <div class="container-fluid">
            <a href="#"><img src="{{asset('Frontend/img/bg-img/add2.png')}}" alt=""></a>
        </div>
    </div>
    <!-- ##### Add Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Footer Logo -->
        <div class="footer-logo mb-100">
            <a href="index.html"><img src="{{asset('Frontend/img/core-img/logo.png')}}" alt=""></a>
        </div>
        <!-- Footer Content -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content text-center">
                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <ul>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Closed Captioning</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('Frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('Frontend/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('Frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('Frontend/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('Frontend/js/active.js')}}"></script>
</body>
</html>