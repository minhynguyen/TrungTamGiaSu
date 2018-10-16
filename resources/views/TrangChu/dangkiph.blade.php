
<!DOCTYPE HTML>
<html>
<head>
<title>ĐĂNG KÍ TÀI KHOẢN GIA SƯ</title>
<!-- Meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta tags -->
<!-- font-awesome-icons -->
<link rel="stylesheet" href="{{ asset ('Theme/Register/css/font-awesome.css') }}">
<!-- <link href="css/font-awesome.css" rel="stylesheet">  -->
<!-- //font-awesome-icons -->
<!-- Stylesheet -->

<link rel="stylesheet" href="{{ asset ('Theme/Register/css/style.css') }}">
<!-- <link href="css/style.css" rel='stylesheet' type='text/css' /> -->
<!-- //Stylesheet -->
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
<h1> ĐĂNG KÍ TÀI KHOẢN PHỤ HUYNH</h1>
    <div class="bg-agile">
    <div class="book-appointment">
    <h2>Form Đăng Kí</h2>
    <div class="row" style="margin: 15px;  ">
    <h4 style="color: red">* Vui lòng cung cấp đầy đủ thông tin bên dưới để chúng tôi tiện liên lạc.</h4>
    </div>
                        <div class="book-form agileits-login">
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="loaitk" id="loaitk" class="form-control" value="0" required="required" title="">
                                <div class="agileits_reservation_grid">
                                <div class="span1_of_1">
                                        <!-- start_section_room -->
                                        <div class="section_room">
                                            <i class="fa fa-magic " aria-hidden="true"></i>
                                            
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Tên Hiển Thị">

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>  
                                    </div>
                                    <div class="span1_of_1 phone_email1">
                                        <!-- start_section_room -->
                                        <div class="section_room">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>  
                                    </div>

                                <div class="phone_email">
                                    <div class="form-text">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                        <!-- <input type="text" name="Name" placeholder="Họ & Tên" required=""> -->
                                        <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Mật Khẩu">
                                    </div> 
                                </div>

                                <div class="span1_of_1 phone_email1">
                                    <!-- start_section_room -->
                                    <div class="section_room">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Xác Nhận Mật Khẩu">
                                    </div>  
                                </div>

                                        
                                <div class="phone_email">
                                    <div class="form-text">
                                        <i class="fa fa-spinner" aria-hidden="true"></i>
                                         <input id="ph_ten" type="text" class="form-control" name="ph_ten" required placeholder="Tên Phụ Huynh">
                                    </div> 
                                </div>

                                <div class="phone_email phone_email1">
                                    <div class="form-text">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <input id="ph_sdt" type="text" class="form-control" name="ph_sdt" required placeholder="Số Điện Thoại">
                                    </div>
                                </div>

                                
                                
                                <div class="phone_email ">
                                    <div class="form-text">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <input id="ph_diachi" type="text" class="form-control" name="ph_diachi" required placeholder="Địa chỉ">
                                    </div>
                                </div>
                                    <div class="clear"></div>
                                </div> 

                                <input type="submit" value="Đăng Kí">
                                <div class="clear"></div>
                            </form>
                        </div>

        </div>
   </div>
  <!--copyright-->
    <!-- <div class="copy w3ls">
        <p>&copy; 2018 Resort Booking Form . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div> -->
<!--//copyright-->
        <script src="{{ asset ('theme/Register/js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ asset ('theme/Register/js/jquery-ui.js') }}"></script>
        <!-- <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> -->
        <!-- Calendar -->
                <!-- <link rel="stylesheet" href="css/jquery-ui.css" /> -->
                <link rel="stylesheet" href="{{ asset ('theme/Register/css/jquery-ui.css') }}" />
                <!-- <script src="js/jquery-ui.js"></script> -->
                  <script>
                          $(function() {
                            $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
                          });
                  </script>
            <!-- //Calendar -->


</body>
</html>