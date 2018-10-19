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
    .card-container{
        /*width: 500px;*/
        /*height: 400px;*/
        border: none;
        padding: none;
        margin: 10px 10px 10px 10px;

    }
    .card{
        /*width: 500px;*/
        /*height: 400px;*/
        z-index: 10;
    }

    .centermx{
        margin-left:auto;
        margin-right: auto;
    }

    .card-header {
        margin-top: 20px;
        font-size: 20px;
        line-height: 2rem;
        font-weight: bold;
        text-align: center;
        border-bottom: none;
        background-color: #CCF;
    }

    .card-body{
      padding: 5px 10px 5px 10px;
  }
  .card-footer {
      font-size: 12px;
      line-height: 2rem;
      font-weight: bold;
      text-align: center;
      border-top: none;
      background-color: #DDD;
  }

  .condensed{
    color: rgba(0,0,0,0.5)
}

.drop-shadow {
  position: relative;
  border: 1px solid #DDD;
  /*width: 40%;*/
  /*padding: 1em;*/
  margin-top: 2em;
  background: #fff;
  -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3) , 0 0 40px rgba(0, 0, 0, 0.1) inset;
  -mox-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3) , 0 0 40px rgba(0, 0, 0, 0.1) inset;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3) , 0 0 40px rgba(0, 0, 0, 0.1) inset;
}

.drop-shadow:before,
.drop-shadow:after {
  content: "";
  position: absolute;
  z-index: -2;
}
.card-body p {
  font-size: 16px;
  font-weight: bold;
}
.lifted {
  -moz-border-radius: 4px;
  border-radius: 4px;
  border: none;

}
.lifted:before,
.lifted:after {
  bottom: 12px;
  left: 10px;
  width: 50%;
  height: 20%;
  max-width: 300px;
  max-height: 100px;
  -webkit-box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
  -mox-box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
  box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  transform: rotate(-3deg);
}
.lifted:after {
  right: 10px;
  left: auto;
  -webkit-transform: rotate(3deg);
  -moz-transform: rotate(3deg);
  -ms-transform: rotate(3deg);
  -o-transform: rotate(3deg);
  transform: rotate(3deg);
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
                                            <li>
                                                @if( Auth::user()->loai === 1 )
                                                <li>
                                                  <a href="{{ route('Profilegs') }}" target="_blank">Thông Tin Tài Khoản</a>
                                              </li>
                                              @else
                                              <li>
                                                  <a href="{{ route('Profileph') }}" target="_blank">Thông Tin Tài Khoản</a>
                                              </li>
                                              @endif
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





      <section id="home" class="home">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="main_home_slider">
                            <div class="single_home_slider">
                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                    <h1>TRUNG TÂM GIA SƯ</h1>
                                    <p class="subtitle">Uy Tín - Chất Lượng</p>

                                    <div class="home_btn">
                                        <!-- <a href="" class="btn btn-primary">LEARN MORE</a> -->
                                        <!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a> -->
                                    </div>

                                </div>
                            </div>
                            <div class="single_home_slider">
                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                    <h1>TRUNG TÂM GIA SƯ</h1>
                                    <p class="subtitle">Uy Tín - Chất Lượng</p>

                                    <div class="home_btn">
                                        <a href="" class="btn btn-primary">LEARN MORE</a>
                                    </div>

                                </div>
                            </div>
                            <div class="single_home_slider">
                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                    <h1>TRUNG TÂM GIA SƯ</h1>
                                    <p class="subtitle">Uy Tín - Chất Lượng</p>

                                    <div class="home_btn">
                                        <a href="" class="btn btn-primary">LEARN MORE</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section id="gellary" class="gellary">
        <div class="right_about_top_content" style="text-align: center;">
            <h3>THông Tin Gia Sư Tìm Lớp</h3>
            <div class="separator"></div>
        </div>
        <div class="container">
            @foreach($thongtindangki as $dk)
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="card-container centermx drop-shadow lifted">
                      <div class="card">
                        <div class="card-header ">
                            Thông Tin Gia Sư
                        </div>
                        <div class="card-body">
                            <img src="{{asset ('Theme/TrangChu/images/teacher.jpg')}}" width="262", height="270" alt="" style="margin: 5px 40px 5px 40px" />    
                            <h3 style="text-align: center;">{{$dk->gs_ten}}</h3>
                            <p>Email: {{$dk->email}}</p>
                            <p>SĐT: {{$dk->gs_sdt}}</p>
                            @if($dk->gs_gioitinh === 0)
                            <p>Giới Tính: Nam</p>
                            @else
                            <p>Giới Tính: Nam</p>
                            @endif
                            <p>Địa Chỉ: {{$dk->gs_diachi}}</p>
                            <p>Học Vị: {{$dk->gs_hocvi}}</p>
                            <p>Giới Thiệu: {{$dk->gs_gioithieu}}</p>
                        </div>
                        <div class="card-footer condensed">
                            <!-- This is a muted footer -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="card-container centermx drop-shadow lifted">
                      <div class="card">
                        <div class="card-header ">
                            Thông Tin Đăng Kí Tìm Lớp
                        </div>
                        <div class="card-body">
                            <p>Môn: {{$dk->m_ten}}</p>    
                            <p>Trình Độ Dạy: {{$dk->tdd_ten}}</p>    
                            <p>Học Phí Đề Nghị: {{$dk->dk_hocphi}}</p>    
                            <p>Ngày Tạo: {{$dk->dk_taomoi}}</p>    
                        </div>
                        <div class="card-footer condensed">
                            <!-- This is a muted footer -->
                        </div>
                    </div>
            </div>
        </div>
        </div>
        @endforeach
    </div>
</section>




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


<section id="pepper" class="pepper">
    <div class="container-fluid">
        <div class="row">
            <div class="main_pepper text-center">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="single_pepper">
                        <h5>salt and pepper</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            In consectetur convallis nunc, at ullamcorper turpis 
                        gravida nec. Praesent eu ultrices nunc.</p>
                        <a href="" class="btn btn-md">SUBSCRIBE</a>
                    </div>
                    <div class="single_pepper">
                        <h5>salt and pepper</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            In consectetur convallis nunc, at ullamcorper turpis 
                        gravida nec. Praesent eu ultrices nunc.</p>
                        <a href="" class="btn btn-md">SUBSCRIBE</a>
                    </div>
                </div>
                <div class="col-sm-6 no-padding">
                    <div class="single_pepper_right">
                        <img src="{{asset ('Theme/TrangChu/images/pepper.jpg')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section id="team" class="team">
    <div class="container">
        <div class="row">
            <div class="main_team sections">
                <div class="head_title text-center">
                    <h2>OUR TEAM</h2>
                    <div class="separator"></div>
                    <p>Suspendisse ac nulla eros. Vestibulum elementum placerat erat ac maximus. 
                        Aliquam quis nisi quis arcu dapibus ornare. Donec vel ex urna. 
                    Ut in odio ultricies mauris fringilla placerat commodo in augue. </p>

                </div>


                <div class="col-sm-12">
                    <div class="row">
                        <div class="main_team_content">  
                            <div class="single_team">
                                <div class="col-sm-3 col-xs-6">
                                    <div class="single_item">
                                        <img src="{{asset ('Theme/TrangChu/images/pepper.jpg')}}" alt="" />
                                        <div class="single_team_overlay">
                                            <h4>Angelo Frigo</h4>
                                            <p>master chef</p>
                                            <div class="team_socail">
                                                <a href=""><i class="fa fa-facebook"></i></a>
                                                <a href=""><i class="fa fa-twitter"></i></a>
                                                <a href=""><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="single_item">
                                        <img src="assets/images/nhanlop.jpg" alt="" />
                                        <div class="single_team_overlay">
                                            <h4>Angelo Frigo</h4>
                                            <p>master chef</p>
                                            <div class="team_socail">
                                                <a href=""><i class="fa fa-facebook"></i></a>
                                                <a href=""><i class="fa fa-twitter"></i></a>
                                                <a href=""><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="single_item">
                                        <img src="{{asset ('Theme/TrangChu/images/pepper.jpg')}}" alt="" />
                                        <div class="single_team_overlay">
                                            <h4>Angelo Frigo</h4>
                                            <p>master chef</p>
                                            <div class="team_socail">
                                                <a href=""><i class="fa fa-facebook"></i></a>
                                                <a href=""><i class="fa fa-twitter"></i></a>
                                                <a href=""><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="single_item">
                                        <img src="{{asset ('Theme/TrangChu/images/pepper.jpg')}}" alt="" />
                                        <div class="single_team_overlay">
                                            <h4>Angelo Frigo</h4>
                                            <p>master chef</p>
                                            <div class="team_socail">
                                                <a href=""><i class="fa fa-facebook"></i></a>
                                                <a href=""><i class="fa fa-twitter"></i></a>
                                                <a href=""><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="single_team">
                                <div class="col-sm-3 col-xs-6">
                                    <div class="single_item">
                                        <img src="{{asset ('Theme/TrangChu/images/pepper.jpg')}}" alt="" />
                                        <div class="single_team_overlay">
                                            <h4>Angelo Frigo</h4>
                                            <p>master chef</p>
                                            <div class="team_socail">
                                                <a href=""><i class="fa fa-facebook"></i></a>
                                                <a href=""><i class="fa fa-twitter"></i></a>
                                                <a href=""><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="single_item">
                                        <img src="{{asset ('Theme/TrangChu/images/pepper.jpg')}}" alt="" />
                                        <div class="single_team_overlay">
                                            <h4>Angelo Frigo</h4>
                                            <p>master chef</p>
                                            <div class="team_socail">
                                                <a href=""><i class="fa fa-facebook"></i></a>
                                                <a href=""><i class="fa fa-twitter"></i></a>
                                                <a href=""><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="single_item">
                                        <img src="{{asset ('Theme/TrangChu/images/pepper.jpg')}}" alt="" />
                                        <div class="single_team_overlay">
                                            <h4>Angelo Frigo</h4>
                                            <p>master chef</p>
                                            <div class="team_socail">
                                                <a href=""><i class="fa fa-facebook"></i></a>
                                                <a href=""><i class="fa fa-twitter"></i></a>
                                                <a href=""><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="single_item">
                                        <img src="{{asset ('Theme/TrangChu/images/fg5.jpg')}}" alt="" />
                                        <div class="single_team_overlay">
                                            <h4>Angelo Frigo</h4>
                                            <p>master chef</p>
                                            <div class="team_socail">
                                                <a href=""><i class="fa fa-facebook"></i></a>
                                                <a href=""><i class="fa fa-twitter"></i></a>
                                                <a href=""><i class="fa fa-google-plus"></i></a>
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




<section id="contact" class="contact sections">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="head_title text-center">
                    <h2>CONTACT US VERY FAST!</h2>
                    <div class="separator"></div>
                </div>

                <div class="row">
                    <div class="contact_contant">
                        <div class="col-sm-6">
                            <div class="single_contant_left">
                                <form action="#" id="formid">
                                    <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="first name" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
                                        </div>

                                        <div class="text-center">
                                            <input type="submit" value="SEND MESSAGE" class="btn btn-primary">
                                        </div>
                                        <!--</div>--> 
                                    </form>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="single_message_right">
                                    <h4>About Us</h4>
                                    <div class="separator4"></div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Ut iaculis et eros a porta. Cras lacinia consequat ante et pulvinar. 
                                    </p>
                                    <p>Morbi efficitur, arcu ut eleifend viverra, est lorem hendrerit arcu, 
                                    vel finibus lectus quam sit amet mauris.</p>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="single_message_right_info">
                                    <h4>Info</h4>
                                    <div class="separator4"></div>
                                    <ul>
                                        <li><a href=""><i class="fa fa-envelope"></i> info@graphicsdrawer.com</a></li>
                                        <li><a href=""><i class="fa fa-phone"></i> 0123 456 789 0112</a></li>
                                        <li><a href=""><i class="fa fa-map-marker"></i> Greenplatz Ben 29, Germany 60435</a></li>
                                        <li><a href=""><i class="fa fa-fax"></i> (0012) 654 356 445</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- End of messsage contant-->
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- <section id="map" class="map">  
            <div class="ourmaps">
                <div class="container">


                </div>
            </div>
        </section> -->




        <section id="contact" class="footer_widget">
            <div class="container">
                <div class="row">
                    <div class="main_widget">


                        <div class="row">

                            <div class="col-sm-4  col-xs-12">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <h4 class="footer_title">CONTACT</h4>
                                    <div class="separator4"></div>
                                    <ul>
                                        <li><a href=""><i class="fa fa-envelope"></i> info@guitarchoose.com</a></li>
                                        <li><a href=""><i class="fa fa-phone"></i> 0123 456 789 0112</a></li>
                                        <li><a href=""><i class="fa fa-map-marker"></i> Greenplatz Ben 29, Germany 60435</a></li>
                                        <li><a href=""><i class="fa fa-fax"></i> (0012) 654 356 445</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <h4 class="footer_title">LATEST NEWS</h4>
                                    <div class="separator4"></div>

                                    <div class="footer_gellary">
                                        <img src="{{asset ('Theme/TrangChu/images/teacher.jpg')}}" alt="" />
                                        <img src="{{asset ('Theme/TrangChu/images/fg2.jpg')}}" alt="" />
                                        <img src="{{asset ('Theme/TrangChu/images/fg3.jpg')}}" alt="" />
                                        <img src="{{asset ('Theme/TrangChu/images/fg4.jpg')}}" alt="" />
                                        <img src="{{asset ('Theme/TrangChu/images/fg5.jpg')}}" alt="" />
                                        <img src="{{asset ('Theme/TrangChu/images/fg6.jpg')}}" alt="" />
                                        <img src="{{asset ('Theme/TrangChu/images/fg7.jpg')}}" alt="" />
                                        <img src="{{asset ('Theme/TrangChu/images/fg8.jpg')}}" alt="" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <div class="footer_logo">
                                        <!-- <img src="assets/images/footerlogo.png" alt="" /> -->
                                        <img src="{{asset ('Theme/TrangChu/images/footerlogo.png')}}" alt="" />
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. 
                                    Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. </p>
                                    <p>Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. 
                                    Etiam vehicula efficitur mi.</p>


                                    <a class="weblink" href="">www.cookingschool.com</a>
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