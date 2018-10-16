
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
  <link rel="stylesheet" href="{{ asset ('css/jquery.timepicker.min.css') }}">
  <!-- <link href="css/style.css" rel='stylesheet' type='text/css' /> -->
  <!-- //Stylesheet -->
  <!--fonts--> 
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
  <!--//fonts--> 
  <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/navmenu/styles.css') }}">
<link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/style.css') }}">
<!-- <link rel="stylesheet" href="{{ asset ('Theme/TrangChu/css/responsive.css') }}"> -->
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
  <!--background-->
  <!-- <h1> ĐĂNG KÍ YÊU CẦU GIA SƯ</h1> -->
  <div>
  <div class="bg-agile">
    <div class="book-appointment" style="margin-top: 100px;">
      <h3 style="color: red; text-align: center;">Form Đăng Kí Yêu Cầu Gia Sư</h3>
      <!-- <div class="row"> -->
        <h6 style="color: red">* Vui lòng cung cấp đầy đủ thông tin bên dưới để chúng tôi tiện liên lạc.</h6>
      <!-- </div> -->
      <div class="book-form agileits-login">
        <form method="POST" action="{{ route('YeuCau.store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="agileits_reservation_grid">
            <div class="span1_of_1">
              <!-- start_section_room -->
              <div class="section_room">
                <i class="fa fa-magic " aria-hidden="true"></i>
                <select id="" name="yc_diachi" id="yc_diachi" class="country1">
                  <option value="" selected>Chọn Địa Chỉ Yêu Cầu</option>
                  <option value="0">Cần Thơ</option>
                  <option value="1">Nữ</option>
                </select>
              </div>  
            </div>
            <div class="span1_of_1 phone_email1">
              <div class="section_room">
                <i class="fa fa-venus-mars" aria-hidden="true"></i>
                <select id="" name="yc_gioitinh" id="yc_gioitinh" class="country1">
                  <option value="" selected>Chọn Yêu Cầu Giới Tính Gia Sư</option>
                  <option value="0">Nam</option>
                  <option value="1">Nữ</option>
                </select>
              </div>  
            </div>

            <div class="phone_email">
              <div class="form-text">
                <i class="fa fa-venus-mars" aria-hidden="true"></i>
                <select id="" name="yc_hocvi" id="yc_hocvi" class="country1">
                  <option value="" selected>Chọn Yêu Cầu Học Vị Gia Sư</option>
                  <option value="0">Đại Học</option>
                  <option value="1">Cao Đẳng</option>
                </select>
              </div> 
            </div>

            <!-- <div class="phone_email phone_email1">
              <div class="form-text">
                <i class="fa fa-venus-mars" aria-hidden="true"></i>
                <select name="" id="input" class="form-control" >
                  <option value=""></option>
                </select>
              </div>
            </div>
 -->
            <div class="span1_of_1 phone_email1">
              <div class="form-text">
                <i class="fa fa-venus-mars" aria-hidden="true"></i>
                <select id="" name="tdd_ma" class="country1">
                  <option value="" selected>Chọn Trình Độ Dạy</option>
                  @foreach($dsTrinhDo as $td)
                  <option value="{{$td->tdd_ma}}">{{$td->tdd_ten}}</option>
                  @endforeach
                </select>
              </div> 
            </div>

            <div id='TextBoxesGroup'>
              <div id="TextBoxDiv1">
                <div class="row" style="margin: 15px;">
                  <h6 style="color: red">Môn 1</h6>
                </div>
                <div class="phone_email">
                  <div class="form-text">
                    <i class="fa fa-venus-mars" aria-hidden="true"></i>
                    <select id="" name="rows[0][m_ma]" class="country1">
                      <option value="" selected>Chọn Môn</option>
                      @foreach($dsmon as $m)
                      <option value="{{$m->m_ma}}">{{$m->m_ten}}</option>
                      @endforeach
                    </select>
                  </div> 
                </div>
                <div class="phone_email phone_email1">
                  <div class="form-text">
                    <i class="fa fa-venus-mars" aria-hidden="true"></i>
                    <input id="textbox1" type="text" class="country1" style="width: 100% !important" name="rows[0][yc_ngayhoc]" value="" required placeholder="Chọn Ngày Học Ví Dụ 2/4/6">
                  </div>
                </div>


                <div class="phone_email phone_email1">
                  <div class="form-text">
                    <i class="fa fa-venus-mars" aria-hidden="true"></i>
                    <input id="tp1" type="text" class="timepicker country1" style="width: 100% !important" name="rows[0][yc_giobatdau]"  placeholder="Giờ Kết Thúc" />
                  </div> 
                </div>
                <div class="phone_email">
                  <div class="form-text">
                    <i class="fa fa-venus-mars" aria-hidden="true"></i>
                    <input id="tp1" type="text" class="timepicker country1" style="width: 100% !important" name="rows[0][yc_gioketthuc]"  placeholder="Giờ Bắt Đầu" />
                  </div>
                </div>

                <!-- <div class="phone_email phone_email1">
                  <div class="form-text">
                    <i class="fa fa-venus-mars" aria-hidden="true"></i>
                    <input id="textbox1" type="text" class="form-control" name="rows[0][yc_yeucaukhac]" value="" required placeholder="Yêu Cầu Khác">
                  </div>
                </div>

                <div class="phone_email">
                  <div class="form-text">
                    <i class="fa fa-venus-mars" aria-hidden="true"></i>
                    <input id="textbox1" type="text" class="form-control" name="rows[0][yc_yeucaukhac]" value="" required placeholder="Yêu Cầu Khác">
                  </div>
                </div>
 -->
                

              </div>
              
            </div>


            <div class="clear"></div>
          </div> 

          <input type="submit" value="Đăng Kí">
          <input type="button" value="Thêm Môn"  id='addButton' class="btn-danger">
          <input type="button" value="Xóa Môn" id='removeButton'>
          <!-- <input type='button' value='Get TextBox Value' id='getButtonValue'> -->
          <div class="clear"></div>
        </form>
      </div>
    </div>




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
      <script src="{{ asset ('js/jquery.timepicker.min.js') }}"></script>
      <link rel="stylesheet" href="{{ asset ('theme/Register/css/jquery-ui.css') }}" />
      <script>
        $(function() {
          $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
        });
        $(document).ready(function(){
          // initialize both timepickers at once
          var timepicker = $('input.timepicker').timepicker({
              timeFormat: 'hh:mm p',
              // year, month, day and seconds are not important
              minTime: new Date(0, 0, 0, 7, 0, 0),
              maxTime: new Date(0, 0, 0, 22, 0, 0),
              // items in the dropdown are separated by at interval minutes
              interval: 10,
          });
      });
      </script>
      <!-- //Calendar -->
      <script type="text/javascript">
        $(document).ready(function(){

          var counter = 1;

          $("#addButton").click(function () {

          var index = counter+1;

            if(counter>4){
              alert("Vui Lòng Đăng Kí Tối Đa 5 Môn");
              return false;
            }   

            var newTextBoxDiv = $(document.createElement('div'))
            .attr("id", 'TextBoxDiv' + counter);
            newTextBoxDiv.after().html(
              
              '<div id="TextBoxDiv1">'+
              '<div class="row" style="margin: 15px;"><h6 style="color: red">Môn '+ index +'</h6></div>'+
                '<div class="phone_email">'+
                  '<div class="form-text">'+
                    '<i class="fa fa-venus-mars" aria-hidden="true"></i>'+
                    '<select id="" name="rows['+counter+'][m_ma]" class="country1">'+
                      '<option value="" selected>Chọn Môn</option>'+
                      '@foreach($dsmon as $m)'+
                      '<option value="{{$m->m_ma}}">{{$m->m_ten}}</option>'+
                      '@endforeach'+
                    '</select>'+
                  '</div>'+ 
                '</div>'+

                '<div class="phone_email phone_email1">'+
                  '<div class="form-text">'+
                    '<i class="fa fa-venus-mars" aria-hidden="true"></i>'+
                    '<input id="textbox1" type="text" class="country1" style="width: 100% !important" name="rows['+counter+'][yc_ngayhoc]" value="" required placeholder="Chọn Ngày Học Ví Dụ 2/4/6">'+
                  '</div>'+
                '</div>'+

                '<div class="phone_email phone_email1">'+
                  '<div class="form-text">'+
                    '<i class="fa fa-venus-mars" aria-hidden="true"></i>'+
                    '<input id="tp1" type="text" class="timepicker country1" style="width: 100% !important" name="rows['+counter+'][yc_giobatdau]" value="Giờ Kết Thúc" />'+
                  '</div> '+
                '</div>'+
                '<div class="phone_email">'+
                  '<div class="form-text">'+
                    '<i class="fa fa-venus-mars" aria-hidden="true"></i>'+
                    '<input id="tp1" type="text" class="timepicker country1" style="width: 100% !important" name="rows['+counter+'][yc_gioketthuc]" value="Giờ Bắt Đầu" />'+
                  '</div>'+
                '</div>'+
              '</div>'
                  );
              // '<input type="text" name="textbox' + counter + 
              // '" id="textbox' + counter + '" value="" >');
            newTextBoxDiv.appendTo("#TextBoxesGroup");
            var timepicker = $('input.timepicker').timepicker({
              timeFormat: 'hh:mm p',
              // year, month, day and seconds are not important
              minTime: new Date(0, 0, 0, 7, 0, 0),
              maxTime: new Date(0, 0, 0, 22, 0, 0),
              // items in the dropdown are separated by at interval minutes
              interval: 10,
          });
            counter++;
          });

          $("#removeButton").click(function () {
            if(counter==1){
              alert("Vui Lòng Đăng Ký Ít Nhất 1 Môn");
              return false;
            }   

            counter--;

            $("#TextBoxDiv" + counter).remove();

          });

          $("#getButtonValue").click(function () {

            var msg = '';
            for(i=1; i<counter; i++){
              msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
            }
            alert(msg);
          });
        });
      </script>
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