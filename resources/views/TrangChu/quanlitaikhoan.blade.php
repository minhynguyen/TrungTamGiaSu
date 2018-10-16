<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Trung Tâm Gia Sư</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/skills/progressbar.css') }}">
        <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/skills/style.css') }}">
        <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/navmenu/styles.css') }}">
        <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/portfolio.jquery.css') }}">
        <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/fonticons.css') }}"> 
        <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/fonts/stylesheet.css') }}">
        <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/skills/progressbar.css') }}">
        <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/bootstrap.min.css') }}">


        <!--For Plugins external css-->

        <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/teamslide.css') }}">
        <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/teamslide.css') }}">
        <script src="{{ asset ('theme/TrangChu/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
    <style type="text/css">
        .box {
    width: 500px;
    margin: 200px 0;
}
.form-control1{
    background-color: white;
    opacity: 1; 
    border: 1px solid rgba(0, 0, 0, 0.08);
    font-size: 16px;
    height: 30px;
}

.shape1{
    position: relative;
    height: 150px;
    width: 150px;
    background-color: white;
    border-radius: 80px;
    float: left;
    margin-right: -50px;
}
.shape2 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: white;
    border-radius: 80px;
    margin-top: -30px;
    float: left;
}
.shape3 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: white;
    border-radius: 80px;
    margin-top: -30px;
    float: left;
    margin-left: -31px;
}
.shape4 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: white;
    border-radius: 80px;
    margin-top: -25px;
    float: left;
    margin-left: -32px;
}
.shape5 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: white;
    border-radius: 80px;
    float: left;
    margin-right: -48px;
    margin-left: -32px;
    margin-top: -30px;
}
.shape6 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: white;
    border-radius: 80px;
    float: left;
    margin-right: -20px;
    margin-top: -35px;
}
.shape7 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: white;
    border-radius: 80px;
    float: left;
    margin-right: -20px;
    margin-top: -57px;
}
.float {
    position: absolute;
    z-index: 2;
}

.form {
    margin-left: 145px;
}
.square, .btn {
    border-radius: 0px!important;
}

/* -- color classes -- */
.coralbg {
    background-color: #004c69;
} 

.coral {
    color: #004c69;
}

.turqbg {
    background-color: #46D8D2;
}

.turq {
    color: #46D8D2;
}

.white {
    color: #fff!important;
}

/* -- The "User's Menu Container" specific elements. Custom container for the snippet -- */
div.user-menu-container {
  z-index: 10;
  background-color: #fff;
  margin-top: 20px;
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}

div.user-menu-container .btn-lg {
    padding: 0px 12px;
}

div.user-menu-container h4 {
    font-weight: 300;
    color: #8b8b8b;
}

div.user-menu-container a, div.user-menu-container .btn  {
    transition: 1s ease;
}

div.user-menu-container .thumbnail {
   width:80%;
   min-height:200px;
   border: 0px!important;
   padding: 0px;
   border-radius: 0;
   border: 0px!important;
}

/* -- Vertical Button Group -- */
div.user-menu-container .btn-group-vertical {
    display: block;
}

div.user-menu-container .btn-group-vertical>a {
    padding: 20px 25px;
    background-color: #46D8D2;
    color: white;
    border-color: #fff;
}

div.btn-group-vertical>a:hover {
    color: white;
    border-color: white;
}

div.btn-group-vertical>a.active {
    background: #004c69;
    box-shadow: none;
    color: white;
}
/* -- Individual button styles of vertical btn group -- */
div.user-menu-btns {
    padding-right: 0;
    padding-left: 0;
    padding-bottom: 0;
}

div.user-menu-btns div.btn-group-vertical>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #46D8D2;
}
/* -- The main tab & content styling of the vertical buttons info-- */
div.user-menu-content {
    color: #323232;
}

ul.user-menu-list {
    list-style: none;
    margin-top: 20px;
    margin-bottom: 0;
    padding: 10px;
    border: 1px solid #eee;
}
ul.user-menu-list>li {
    padding-bottom: 8px;
    text-align: center;
}

div.user-menu div.user-menu-content:not(.active){
  display: none;
}

/* -- The btn stylings for the btn icons -- */
.btn-label {position: relative;left: -12px;display: inline-block;padding: 6px 12px;background: rgba(0,0,0,0.15);border-radius: 3px 0 0 3px;}
.btn-labeled {padding-top: 0;padding-bottom: 0;}

/* -- Custom classes for the snippet, won't effect any existing bootstrap classes of your site, but can be reused. -- */

.user-pad {
    padding: 20px 25px;
}

.no-pad {
    padding-right: 0;
    padding-left: 0;
    padding-bottom: 0;
}

.user-details {
    background: #eee;
    min-height: 333px;
}

.user-image {
  max-height:200px;
  overflow:hidden;
}

.overview h3 {
    font-weight: 300;
    margin-top: 15px;
    margin: 10px 0 0 0;
}

.overview h4 {
    font-weight: bold!important;
    font-size: 40px;
    margin-top: 0;
}

.view {
    position:relative;
    overflow:hidden;
    margin-top: 10px;
}

.view p {
    margin-top: 20px;
    margin-bottom: 0;
}
 
.caption {
    position:absolute;
    top:0;
    right:0;
    background: rgba(70, 216, 210, 0.44);
    width:100%;
    height:100%;
    padding:2%;
    display: none;
    text-align:center;
    color:#fff !important;
    z-index:2;
}

.caption a {
    padding-right: 10px;
    color: #fff;
}

.info {
    display: block;
    padding: 10px;
    background: #eee;
    text-transform: uppercase;
    font-weight: 300;
    text-align: right;
}

.info p, .stats p {
    margin-bottom: 0;
}

.stats {
    display: block;
    padding: 10px;
    color: white;
}

.share-links {
    border: 1px solid #eee;
    padding: 15px;
    margin-top: 15px;
}

.square, .btn {
    border-radius: 0px!important;
}

/* -- media query for user profile image -- */
@media (max-width: 767px) {
    .user-image {
        max-height: 400px;
    }
}
    </style>


		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="main_menu" class="header navbar-fixed-top">            
            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu">
                            <nav class="navbar navbar-default" id="navmenu">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#home">
                                            <!-- <img src="assets/images/logo.png"/> -->
                                            <img src="{{asset ('Theme/TrangChu/images/logo.png')}}" alt=""  width="60", height="40" />
                                        </a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->



                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#home">Home</a></li>
                                            <li><a href="#service">Recipes</a></li>
                                            <li><a href="#about"> About us</a></li>
                                            <li><a href="#team">Blog</a></li>
                                            <li><a href="#gellary">Gallery</a></li>
                                            <li><a href="#contact">Contact</a></li>
                                            <!-- <li><a data-toggle="modal" href='#modal-id'>Đăng Nhập</a></li> -->
                                            @guest
                                                <li class="nav-item">
                                                    <a data-toggle="modal" href='#modal-id'>Đăng Nhập</a>
                                                </li>
                                                <!-- <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li> -->
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest
                                        </ul>
                                    </div>

                                </div>
                            </nav>
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->


        <div class="banner-breadcum section">
            <div class="row">
                <div class="breadcrumb-image" style="background-image: url(https://www.startleint.com/application/files/7514/8043/6240/9-Restaurant-desktop.jpg);">
                    <div class="container text-center">
                        <h1>Thông Tin Tài Khoản Gia Sư</h1>
                            <div class="breadcrumbs_path">
                                <a href="#">Home</a>  -   FAQ's
                            </div>      
                    </div>
                </div>
            </div>
        </div>
        @foreach ($thongtin as $tt)
        <div class="row user-menu-container square" style="margin-top: 0px;">
        <div class="col-md-7 user-details">
            <div class="row coralbg white">
                <div class="col-md-6 no-pad">
                    <div class="user-image">
                        <img src="{{asset ('Theme/TrangChu/images/teacher.jpg')}}" alt=""  class="img-responsive thumbnail">
                    </div>
                </div>
                <div class="col-md-6 no-pad">
                    <div class="user-pad">
                        <!-- <h3>Welcome back, Jessica</h3> -->
                        <h4 class="white"><i class="fa fa-heart-o"></i> {{$tt->gs_ten}}</h4>
                        <h4 class="white"><i class="fa fa-envelope-o"></i> {{$tt->email}}</h4>
                        <button type="button" class="btn btn-labeled btn-info" href="#">
                            <span class="btn-label"><i class="fa fa-pencil"></i></span>Update</button>
                    </div>
                </div>
                
            </div>
            <div class="row overview">
                <div class="col-md-6 user-pad text-center">
                    <h3>Đánh Giá</h3>
                    <h4>4.5 <i class="fa fa-star"></i></h4>
                </div>
                <div class="col-md-6 user-pad text-center">
                    <h3>Số Lớp</h3>
                    <h4>2</h4>
                </div>
            </div>
        </div>
        <div class="col-md-1 user-menu-btns">
            <div class="btn-group-vertical square" id="responsive" >
                <a href="#" class="btn btn-block btn-default active">
                  <i class="fa fa-paper-plane-o  fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default" style="margin-top: 2px">
                  <i class="fa fa-paper-plane-o  fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default" style="margin-top: 2px">
                  <i class="fa fa-paper-plane-o  fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default" style="margin-top: 2px">
                  <i class="fa fa-paper-plane-o  fa-3x"></i>
                </a>
            </div>
        </div>
        <div class="col-md-4 user-menu user-pad">
            <div class="user-menu-content active">
                <h4>Thông Tin Cơ Bản</h4>
                    <div class="col-md-6">
                        <h5> <i class="fa fa-paper-plane-o coral"></i> {{$tt->gs_sdt}}</h5>
                    </div>
                    <div class="col-md-6">
                        @if($tt->gs_gioitinh===0)
                        <h5> <i class="fa fa-paper-plane-o coral"></i> Nam</h5>
                        @else
                        <h5> <i class="fa fa-paper-plane-o coral"></i> Nữ</h5>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <h5> <i class="fa fa-paper-plane-o coral"></i> {{$tt->gs_hocvi}}</h5>
                    </div>
                    <div class="col-md-6">
                        <h5> <i class="fa fa-paper-plane-o coral"></i> {{$tt->gs_diachi}}</h5>
                    </div>
                    <div class="col-md-6">
                        <h5> <i class="fa fa-paper-plane-o coral"></i> {{$tt->cn_ten}}</h5>
                    </div>
                    
            </div>
             @endforeach

            <div class="user-menu-content">
                <h3>
                    Thông Tin Đăng Kí
                </h3>
                @foreach ($thongtindangki as $ttdk)
                    <div class="col-md-6">
                        <h5> <i class="fa fa-paper-plane-o coral"></i> {{$ttdk->m_ten}}</h5>
                    </div>
                    <div class="col-md-6">
                        <h5> <i class="fa fa-paper-plane-o coral"></i> {{$ttdk->tdd_ten}}</h5>
                    </div>
                @endforeach
            </div>
            <div class="user-menu-content">
                <h3>
                    Trending
                </h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="view">
                            <div class="caption">
                                <p>47LabsDesign</p>
                                <a href="" rel="tooltip" title="Appreciate"><span class="fa fa-heart-o fa-2x"></span></a>
                                <a href="" rel="tooltip" title="View"><span class="fa fa-search fa-2x"></span></a>
                            </div>
                            <img src="http://24.media.tumblr.com/273167b30c7af4437dcf14ed894b0768/tumblr_n5waxesawa1st5lhmo1_1280.jpg" class="img-responsive">
                        </div>
                        <div class="info">
                            <p class="small" style="text-overflow: ellipsis">An Awesome Title</p>
                            <p class="small coral text-right"><i class="fa fa-clock-o"></i> Posted Today | 10:42 A.M.</small>
                        </div>
                        <!-- <div class="stats turqbg">
                            <span class="fa fa-heart-o"> <strong>47</strong></span>
                            <span class="fa fa-eye pull-right"> <strong>137</strong></span>
                        </div> -->
                    </div>
                    <div class="col-md-6">
                        <div class="view">
                            <div class="caption">
                                <p>47LabsDesign</p>
                                <a href="" rel="tooltip" title="Appreciate"><span class="fa fa-heart-o fa-2x"></span></a>
                                <a href="" rel="tooltip" title="View"><span class="fa fa-search fa-2x"></span></a>
                            </div>
                            <img src="http://24.media.tumblr.com/282fadab7d782edce9debf3872c00ef1/tumblr_n3tswomqPS1st5lhmo1_1280.jpg" class="img-responsive">
                        </div>
                        <div class="info">
                            <p class="small" style="text-overflow: ellipsis">An Awesome Title</p>
                            <p class="small coral text-right"><i class="fa fa-clock-o"></i> Posted Today | 10:42 A.M.</small>
                        </div>
                        <!-- <div class="stats turqbg">
                            <span class="fa fa-heart-o"> <strong>47</strong></span>
                            <span class="fa fa-eye pull-right"> <strong>137</strong></span>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="user-menu-content">
                <h2 class="text-center">
                    START SHARING
                </h2>
                <center><i class="fa fa-cloud-upload fa-4x"></i></center>
                <div class="share-links">
                    <center><button type="button" class="btn btn-lg btn-labeled btn-success" href="#" style="margin-bottom: 15px;">
                            <span class="btn-label"><i class="fa fa-bell-o"></i></span>A FINISHED PROJECT
                    </button></center>
                    <center><button type="button" class="btn btn-lg btn-labeled btn-warning" href="#">
                            <span class="btn-label"><i class="fa fa-bell-o"></i></span>A WORK IN PROGRESS
                    </button></center>
                </div>
            </div>
        </div>
    </div>
   
        
        <div class="head_title text-center">
                            <h2>THÔNG TIN TÀI KHOẢN</h2>
                            <div class="separator"></div>
                            <p>Suspendisse ac nulla eros. Vestibulum elementum placerat erat ac maximus. 
                                Aliquam quis nisi quis arcu dapibus ornare. Donec vel ex urna. 
                                Ut in odio ultricies mauris fringilla placerat commodo in augue. </p>

                        </div>
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="main_about sections">

                        <div class="main_about_content_area">
                            <div class="single_about_left_img">
                                <!-- <img src="assets/images/ab.jpg" alt="" /> -->
                                <img src="{{asset ('Theme/TrangChu/images/ab.jpg')}}" alt="" />
                            </div> 


                            <!-- bar 1 -->
                            <div class="col-sm-8 col-sm-offset-4">
                                <div class="single_about_right_content">
                                    <div class="demo4">
                                        <div class="right_single_about_skill">
                                            <div class="right_about_top_cotent">
                                                <div class="right_about_top_img">
                                                    <img src="{{asset ('Theme/TrangChu/images/s_ab1.png')}}" alt="" />

                                                    <!-- <img src="assets/images/s_ab1.png" alt="" /> -->

                                                </div>
                                                <div class="right_about_top_content">
                                                    <h3>COOKCING BOOK</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc, 
                                                        at ullamcorper turpis gravida nec. Praesent eu ultrices nunc.</p>
                                                </div>
                                            </div>
                                            <div class="right_about_bottom_cotent">
                                                <!-- bar 1 -->
                                                <div class="progress-bar4" data-percentage="76%">
                                                    <h4 class="progress-title-holder">
                                                        <span class="progress-number-wrapper">
                                                            <span class="progress-number-mark">
                                                                <span class="percent"></span>
                                                                <span class="down-arrow"></span>
                                                            </span>
                                                        </span>
                                                    </h4>
                                                    <div class="progress-content-outter">
                                                        <div class="progress-content"></div>
                                                    </div>
                                                </div> 

                                            </div>
                                        </div>

                                        <div class="right_single_about_skill">
                                            <div class="right_about_top_cotent">
                                                <div class="right_about_top_img">
                                                    <img src="{{asset ('Theme/TrangChu/images/s_ab2.png')}}" alt="" />
                                                    <!-- <img src="assets/images/s_ab2.png" alt="" /> -->
                                                </div>
                                                <div class="right_about_top_content">
                                                    <h3>COOKCING BOOK</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc, 
                                                        at ullamcorper turpis gravida nec. Praesent eu ultrices nunc.</p>
                                                </div>
                                            </div>
                                            <div class="right_about_bottom_cotent">
                                                <!-- bar 2 -->
                                                <div class="progress-bar4" data-percentage="43%">
                                                    <h4 class="progress-title-holder">
                                                        <span class="progress-number-wrapper">
                                                            <span class="progress-number-mark">
                                                                <span class="percent"></span>
                                                                <span class="down-arrow"></span>
                                                            </span>
                                                        </span>
                                                    </h4>
                                                    <div class="progress-content-outter">
                                                        <div class="progress-content"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="right_single_about_skill">
                                            <div class="right_about_top_cotent">
                                                <div class="right_about_top_img">
                                                    <img src="{{asset ('Theme/TrangChu/images/s_ab3.png')}}" alt="" />
                                                    <!-- <img src="assets/images/s_ab3.png" alt="" /> -->
                                                </div>
                                                <div class="right_about_top_content">
                                                    <h3>COOKCING BOOK</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc, 
                                                        at ullamcorper turpis gravida nec. Praesent eu ultrices nunc.</p>
                                                </div>
                                            </div>
                                            <div class="right_about_bottom_cotent">
                                                <!-- bar 3 -->
                                                <div class="progress-bar4" data-percentage="92%">
                                                    <h4 class="progress-title-holder">
                                                        <span class="progress-number-wrapper">
                                                            <span class="progress-number-mark">
                                                                <span class="percent"></span>
                                                                <span class="down-arrow"></span>
                                                            </span>
                                                        </span>
                                                    </h4>
                                                    <div class="progress-content-outter">
                                                        <div class="progress-content"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>   

                            </div>
                        </div>
                    </div>                    

                </div>
            </div>
        </section>





        

        <section id="newsletter" class="newsletter text-center">
            <div class="container">
                <div class="row">
                    <div class="main_newsletter sections">
                        <div class="col-sm-12">
                            <div class="single_newsletter_head">
                                <h2>JOIN OUR NEWSLETTER</h2>
                                <p>Suspendisse ac nulla eros. Vestibulum elementum placerat erat ac maximus. 
                                    Aliquam quis nisi quis arcu dapibus ornare. Donec vel ex urna. Ut in odio ultricies
                                    mauris fringilla placerat commodo in augue. </p>
                            </div>

                            <div class="single_sewsletter_content">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="first name" required="">
                                            <input type="submit" value="SUBSCRIBE" class="btn btn-primary"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="modal-id">
            <div class="modal-dialog">

                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div class="box">
                            <div class="shape1"></div>
                            <div class="shape2"></div>
                            <div class="shape3"></div>
                            <div class="shape4"></div>
                            <div class="shape5"></div>
                            <div class="shape6"></div>
                            <div class="shape7"></div>
                            <div class="float">

                                <!-- <form class="form" action="" > -->
                                    <!-- <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="form">
                                        @csrf -->
                                    <form  method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                                        <div class="form"> 
                                    <h4 style="margin-left: -5px; color: #0073c7"><i class="fa fa-graduation-cap"></i> Đăng Nhập</h4>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label for="username" class="text-white">Email:</label>
                                        <!-- <input type="text" name="username" id="username" class="form-control1"> -->
                                        <input id="email" type="email" class="form-control1{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label for="password" class="text-white">Password:</label>
                                        <input id="password" type="password" class="form-control1{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <button  class="btn btn-info btn-sm"><i class="fa fa-sign-in"></i> Đăng Nhập</button> 
                                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-sign-out"></i> </button>
                                    </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>



        <footer id="footer" class="footer">
            <div class="container">
                <div class="main_footer">
                    <div class="row">

                        <div class="col-sm-6 col-xs-12">
                            <div class="copyright_text">
                                <p class=" wow fadeInRight" data-wow-duration="1s">Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">Bootstrap Themes</a>2016. All Rights Reserved</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="footer_socail">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
        <script src="{{ asset ('theme/TrangChu/js/vendor/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset ('theme/TrangChu/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset ('theme/TrangChu/js/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset ('theme/TrangChu/js/portfolio.jquery.js') }}"></script>
        <script src="{{ asset ('theme/TrangChu/js/jquery.mixitup.min.js') }}"></script>
        <script src="{{ asset ('theme/TrangChu/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset ('theme/TrangChu/css/skills/inview.min.js') }}"></script>
        <script src="{{ asset ('theme/TrangChu/css/skills/progressbar.js') }}"></script>
        <script src="{{ asset ('theme/TrangChu/css/skills/main.js') }}"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="{{ asset ('theme/TrangChu/js/gmaps.min.js') }}"></script>
        
    




        <!-- <script src="assets/js/vendor/jquery-1.11.2.min.js"></script> -->
        <!-- <script src="assets/js/vendor/bootstrap.min.js"></script> -->

        <!-- <script src="assets/js/jquery.easypiechart.min.js"></script> -->
        <!-- <script src="assets/js/portfolio.jquery.js"></script> -->
        <!-- <script src="assets/js/jquery.mixitup.min.js"></script> -->
        <!-- <script src="assets/js/jquery.easing.1.3.js"></script> -->
        <!-- <script src="assets/css/skills/inview.min.js"></script> -->
        <!-- <script src="assets/css/skills/progressbar.js"></script> -->
        <!-- <script src="assets/css/skills/main.js"></script> -->
        <!--This is link only for gmaps-->
        <!-- <script src="http://maps.google.com/maps/api/js"></script> -->
        <!-- <script src="assets/js/gmaps.min.js"></script> -->
        <!-- <script>
            var map = new GMaps({
                el: '.ourmaps',
                scrollwheel: false,
                lat: -12.043333,
                lng: -77.028333
            });
        </script> -->

        <script src="{{ asset ('theme/TrangChu/js/plugins.js') }}"></script>
        <script src="{{ asset ('theme/TrangChu/js/main.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
    var $btnSets = $('#responsive'),
    $btnLinks = $btnSets.find('a');
 
    $btnLinks.click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.user-menu>div.user-menu-content").removeClass("active");
        $("div.user-menu>div.user-menu-content").eq(index).addClass("active");
    });
});

$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.view').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});
        </script>
        <!-- <script>
          $(document).ready(function(){
            $(".dropdown").hover(            
                function() {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');        
                },
                function() {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');       
                }
            );
        });
        </script> -->
        <!-- <script src="assets/js/plugins.js"></script> -->
        <!-- <script src="assets/js/main.js"></script> -->

    </body>
</html>