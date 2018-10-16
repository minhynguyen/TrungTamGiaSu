<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trung Tâm Gia Sư</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Consultancy Profile Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- js -->
<script src="{{ asset ('Theme/Profile/js/jquery-2.1.3.min.js') }}" type="text/javascript"></script>

<script type="text/javascript" src="{{ asset ('Theme/Profile/js/sliding.form.js') }}"></script>

<!-- //js -->
<link href="{{ asset ('Theme/Profile/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset ('Theme/Profile/css/font-awesome.min.css') }}" />

<link rel="stylesheet" href="{{ asset ('Theme/Profile/css/smoothbox.css') }}" type='text/css' media="all" />
<link href="//fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/navmenu/styles.css') }}">
<link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/style.css') }}">
<link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/responsive.css') }}">
</head>
<body>
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
                                        <img src="{{asset ('Theme/TrangChu/images/logo.png')}}" alt=""  width="60", height="40" />
                                    </a>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#home">Home</a></li>
                                        <li><a href="#service">Recipes</a></li>
                                        <li><a href="#about"> About us</a></li>
                                        <li><a href="#team">Blog</a></li>
                                        <li><a href="#gellary">Gallery</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                        @guest
                                        <li class="nav-item">
                                            <a data-toggle="modal" href='#modal-id'>Đăng Nhập</a>
                                        </li>
                                                @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        @if( Auth::user()->loai === 1 )
                                                        <a href="{{ route('Profilegs') }}" target="_blank">Thông Tin Tài Khoản</a>
                                                        @else
                                                        <a href="{{ route('Profileph') }}" target="_blank">Thông Tin Tài Khoản</a>
                                                        @endif
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <br/>
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
        <div class="main" style="margin-top: 100px;">
            <h1>Quản Lí Tài Khoản Phụ Huynh</h1>
            <div id="navigation" style="display:none;" class="w3_agile">
                <ul>
                    <li class="selected">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-folder" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
                <div id="steps" style="margin:0 auto;" class="agileits w3_steps" >
                    <form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy">
                        <fieldset class="step agileinfo w3ls_fancy_step">
                            <legend>Thông Tin Cơ Bản</legend>
                            <div class="abt-agile">
                                <div class="abt-agile-left" style="background: url({{asset ('Theme/TrangChu/images/teacher.jpg')}}); no-repeat 1px 0px;">
                                </div>
                                @foreach ($thongtin as $tt)
                                <div class="abt-agile-right">
                                    <h3>Tên Hển Thị: {{$tt->name}}</h3>
                                    <h5>Tên Phụ Huynh: {{$tt->ph_ten}}</h5>
                                    <ul class="address">
                                        <li>
                                            <ul class="address-text">
                                                <li><b>ĐỊA CHỈ</b></li>
                                                <li>: {{$tt->ph_diachi}}</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="address-text">
                                                <li><b>SĐT</b></li>
                                                <li>: {{$tt->ph_sdt}}</li>
                                            </ul>
                                        </li>
                                    <!-- <li>
                                        <ul class="address-text">
                                            <li><b>ADDRESS </b></li>
                                            <li>: 22 Russell Street, AUSTRALIA.</li>
                                        </ul>
                                    </li> -->
                                    <li>
                                        <ul class="address-text">
                                            <li><b>E-MAIL </b></li>
                                            <li><a href="mailto:example@mail.com">: {{$tt->email}}</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li>
                                        <ul class="address-text">
                                            <li><b>WEBSITE </b></li>
                                            <li><a href="http://w3layouts.com">: www.myresume.com</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </div>
                            @endforeach
                            <div class="clear"></div>
                        </div>
                    </fieldset>
                    <fieldset class="step wthree">
                        <legend>Yêu Cầu Gia Sư</legend>
                        <div class="work-w3agile">
                            <div class="work-w3agile-top">
                                <div class="agileits_w3layouts_work_grid1 w3layouts_work_grid1 hover14 column">
                                    @foreach ($yeucau as $yc)
                                    <h5 style="color: #00e8ff;">Yêu Cầu Thứ {{ $loop->index + 1}}</h5>
                                    <div class="w3_agile_work_effect">
                                        <ul>
                                            <li>
                                                <ul class="address-text">
                                                    <li style="color: #00e8ff;"><b>Môn: </b></li>
                                                    <li><a href="mailto:example@mail.com">{{$yc->m_ten}}</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="address-text">
                                                    <li style="color: #00e8ff;"><b>Trình Độ: </b></li>
                                                    <li><a href="mailto:example@mail.com">{{$yc->tdd_ten}}</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="address-text">
                                                    <li style="color: #00e8ff;"><b>Giới Tính: </b></li>
                                                    @if($yc->yc_gioitinh === 0)
                                                    <li><a href="mailto:example@mail.com">Nam</a></li>
                                                    @else
                                                    <li><a href="mailto:example@mail.com">Nữ</a></li>
                                                    @endif
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="address-text">
                                                    <li style="color: #00e8ff;"><b>Ngày Học: </b></li>
                                                    <li><a href="mailto:example@mail.com">{{$yc->yc_ngayhoc}}</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="address-text">
                                                    <li style="color: #00e8ff;"><b>Giờ Học: </b></li>
                                                    <li><a href="mailto:example@mail.com">{{$yc->yc_giobatdau}} {{$yc->yc_gioketthuc}}</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="address-text">
                                                    <li style="color: #00e8ff;"><b>Địa chỉ: </b></li>
                                                    <li><a href="mailto:example@mail.com">{{$yc->yc_diachi}}</a></li>
                                                </ul>
                                            </li>
                                            <div class="clear"></div>


                                            @endforeach
                                            

                                        </ul> 

                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="step w3_agileits">
                        <legend>Contact</legend>
                        <div class="agilecontactw3ls-grid">
                            <div class="agile-con-left">
                                <form action="#" method="post">
                                    <input type="text" name="First Name" placeholder="FIRST NAME" required="">
                                    <input type="email" name="Email" placeholder="EMAIL" required="">
                                    <textarea name="Message" placeholder="MESSAGE" required=""></textarea>
                                    <div class="send-button">
                                        <input type="submit" value="SEND">
                                    </div>
                                </form>
                            </div>
                            <div class="agile-con-right">
                                <h6>Address :-</h6>
                                <p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>22 Russell Street, Victoria ,Melbourne AUSTRALIA </p>
                                <p><span><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">E: info [at] domain.com</a> </p>
                                <p><span><i class="fa fa-mobile" aria-hidden="true"></i></span>P: +254 2564584 / +542 8245658 </p>
                                <p><span><i class="fa fa-globe" aria-hidden="true"></i></span><a href="#">W: www.w3layouts.com</a></p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="agileits_copyright">
            <!-- <p>© 2017 Consultancy Profile Widget. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p> -->
        </div>
    </div>
    <script type="text/javascript" src="{{ asset ('Theme/Profile/js/smoothbox.jquery2.js') }}"></script>
    <script src="{{ asset ('theme/TrangChu/js/vendor/bootstrap.min.js') }}"></script>

</body>
</html>