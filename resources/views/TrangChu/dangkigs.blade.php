
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

<link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/navmenu/styles.css') }}">
<link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/style.css') }}">
<!--//fonts--> 
</head>

<body>
<!--background-->
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
<!-- <h1> ĐĂNG KÍ LÀM GIA SƯ</h1> -->
    <div class="bg-agile">
    <div class="book-appointment" style="margin-top: 100px;">
    <h3 style="color: red; text-align: center;">Form Đăng Kí Làm Gia Sư</h3>
      <!-- <div class="row"> -->
        <h6 style="color: red">* Vui lòng cung cấp đầy đủ thông tin bên dưới để chúng tôi tiện liên lạc.</h6>
    </div>
                        <div class="book-form agileits-login">
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="loaitk" id="loaitk" class="form-control" value="1" required="required" title="">
                                <div class="agileits_reservation_grid">
                                <div class="span1_of_1">
                                        <!-- start_section_room -->
                                        <div class="section_room">
                                            <i class="fa fa-magic " aria-hidden="true"></i>
                                            
                                            <input id="name" type="text" class="country1 {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Tên Hiển Thị" style="width: 100%!important">

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
                                            <input id="email" type="email" class="country1 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email"  style="width: 100%!important">

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
                                        <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Mật Khẩu"  style="width: 100%!important">
                                    </div> 
                                </div>

                                <div class="span1_of_1 phone_email1">
                                    <!-- start_section_room -->
                                    <div class="section_room">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                        <input id="password-confirm" type="password" class="country1" name="password_confirmation" required placeholder="Xác Nhận Mật Khẩu"  style="width: 100%!important">
                                    </div>  
                                </div>

                                        
                                <div class="phone_email">
                                    <div class="form-text">
                                        <i class="fa fa-spinner" aria-hidden="true"></i>
                                        <!-- <input type="text" name="Phone no" placeholder="Số CMND" required=""> -->
                                         <input id="gs_ten" type="text" class="country1" name="gs_ten" required placeholder="Tên Gia Sư"  style="width: 100%!important">
                                    </div> 
                                </div>

                                <div class="span1_of_1 phone_email1">
                                    <!-- start_section_room -->
                                    <div class="form-text">
                                        <i class="fa fa-venus-mars" aria-hidden="true"></i>
                                        <select id="country1" onchange="change_country(this.value)" name="gs_gioitinh" id="gs_gioitinh" class="country1">
                                            <option value="" selected>Chọn Giới Tính</option>
                                            <option value="0">Nam</option>
                                            <option value="1">Nữ</option>
                                        </select>
                                    </div>  
                                </div>

                                <div class="phone_email ">
                                    <div class="form-text">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <input id="gs_sdt" type="text" class="country1" name="gs_sdt" required placeholder="Số Điện Thoại"  style="width: 100%!important">
                                    </div>
                                </div>

                                <div class="phone_email phone_email1">
                                    <div class="form-text">
                                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                                        <input id="gs_cmnd" type="text" class="country1" name="gs_cmnd" requiredv placeholder="Số CMND"  style="width: 100%!important">
                                    </div>
                                </div>
                                
                                <div class="phone_email ">
                                    <div class="form-text">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <input id="gs_diachi" type="text" class="country1" name="gs_diachi" required placeholder="Địa chỉ"  style="width: 100%!important">
                                    </div>
                                </div>

                                <div class="phone_email phone_email1">
                                    <div class="form-text">
                                        <i class="fa  fa-graduation-cap" aria-hidden="true"></i>
                                        <input id="gs_hocvi" type="text" class="country1" name="gs_hocvi" required placeholder="Học Vị"  style="width: 100%!important">
                                    </div>
                                </div>



                                <div class="phone_email">
                                    <div class="form-text">
                                        <i class="fa  fa-graduation-cap" aria-hidden="true"></i>
                                        <select id="country1" name="cn_ma" id="cn_ma" class="country1">
                                            <option value="" selected>Chuyên Ngành</option>
                                            @foreach($chuyennganh as $cn)
                                            
                                            <option value="{{$cn->cn_ma}}">{{$cn->cn_ten}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="phone_email phone_email1">
                                    <div class="form-text">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <select id="country1" name="tdd_ma" id="tdd_ma" class="country1">
                                            <option value="" selected>Trình độ dạy</option>
                                            @foreach($trinhdo as $td)
                                            <option value="{{$td->tdd_ma}}">{{$td->tdd_ten}}</option>
                                            <!-- <option value="1">Nữ</option> -->
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="phone_email">
                                    <div class="form-text">
                                        <i class="fa  fa-graduation-cap" aria-hidden="true"></i>
                                        <select id="country1" name="m_ma" id="m_ma" class="country1">
                                            <option value="" selected>Môn Dạy</option>
                                            @foreach($mon as $m)
                                            
                                            <option value="{{$m->m_ma}}">{{$m->m_ten}}</option>
                                            <!-- <option value="1">Nữ</option> -->
                                            @endforeach
                                        </select>
                                    </div>
                                </div>



                                <div class="phone_email phone_email1">
                                    <div class="form-text">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <input id="dk_hocphi" type="text" class="country1" name="dk_hocphi" required placeholder="Học Phí Đề Nghị"  style="width: 100%!important">
                                    </div>
                                </div>






                                <div class="phone_email" >
                                    <div class="form-text">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <input id="gs_gioithieu" type="text" class="country1" name="gs_gioithieu" required placeholder="Giới Thiệu"  style="width: 100%!important">
                                    </div>
                                </div>
<!-- 
                                <div class="phone_email  phone_email1" style="margin-left: 0px">
                                    <div id="filediv">
                                        <input type="file" id="file" name="images[]" multiple="multiple" accept="image/*" title="Select Images To Be Uploaded">
                                        <br>
                                    </div>
                                </div> -->
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
<script>
  $('#add_more').click(function() {
      "use strict";
      $(this).before($("<div/>", {
        id: 'filediv'
      }).fadeIn('slow').append(
        $("<input/>", {
          name: 'file[]',
          type: 'file',
          id: 'file',
          multiple: 'multiple',
          accept: 'image/*'
        })
      ));
    });

    $('#upload').click(function(e) {
      "use strict";
      e.preventDefault();

      if (window.filesToUpload.length === 0 || typeof window.filesToUpload === "undefined") {
        alert("No files are selected.");
        return false;
      }

      // Now, upload the files below...
      // https://developer.mozilla.org/en-US/docs/Using_files_from_web_applications#Handling_the_upload_process_for_a_file.2C_asynchronously
    });

    function deletePreview(ele, i) {
      "use strict";
      try {
        $(ele).parent().remove();
        window.filesToUpload.splice(i, 1);
      } catch (e) {
        console.log(e.message);
      }
    }

    $("#file").on('change', function() {
      "use strict";

      // create an empty array for the files to reside.
      window.filesToUpload = [];

      if (this.files.length >= 1) {
        $("[id^=previewImg]").remove();
        $.each(this.files, function(i, img) {
          var reader = new FileReader(),
            newElement = $("<div id='previewImg" + i + "' class='media-object'><img width= 200; height=200/><hr/></div>"),
            deleteBtn = $("<button class='btn btn-danger delete1' onClick='deletePreview(this, " + i + ")'>Xóa Ảnh Này</button>").prependTo(newElement),
            preview = newElement.find("img");

          reader.onloadend = function() {
            preview.attr("src", reader.result);
            preview.attr("alt", img.name);
          };

          try {
            window.filesToUpload.push(document.getElementById("file").files[i]);
          } catch (e) {
            console.log(e.message);
          }

          if (img) {
            reader.readAsDataURL(img);
          } else {
            preview.src = "";
          }

          newElement.appendTo("#filediv");
        });
      }
    });
</script>


</body>
</html>