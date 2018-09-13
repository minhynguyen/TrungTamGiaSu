@extends('backend.layouts.app')   

@section('title')
  Danh Sách Trình Độ Giảng Dạy
@endsection


@section('page-header')
      <h1>
        Danh Sách Trình Độ Giảng Dạy
        <small>Gia Sư</small>
      </h1>
@endsection

@section('css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

<!-- noi dung can thay doi o giua -->
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Danh Sách Trình Độ Giảng Dạy</h3>
    
    
    <div class="box-tools">
      <button type="button" class="btn btn-sm pull-right" style="margin-left: 2px"> <a href=""><i class="fa fa-file-pdf-o"></i> In PDF </a></button> 

      <button type="button" class="btn btn-sm pull-right"> <a href=""><i class="fa fa-file-excel-o"></i> In Excel </a></button> 
      <div class="input-group input-group-sm" style="width: 150px;">
        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

        <div class="input-group-btn">
          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </div>

      </div>

    </div>
  </div>
  <!-- /.box-header -->
  <!-- <div class="box-body table-responsive no-padding">
    <table id="tbTrinhDo1" class="table table-hover text-center" >
      <tr>
        <th>STT</th>
        <th style="text-align: left">Tên Trình Độ</th>
        <th>Ngày Tạo Mới</th>
        <th>Ngày Cập Nhật</th>
        <th>Trạng Thái</th>
        


      </tr>
      
      
      
    </table>
  </div> -->
  
{{ csrf_field() }}
  <div class="box-body table-responsive no-padding">
              <table class="" id="tbTrinhDo">
                
                <thead>
            <tr>
                <th>Mã Loại</th>
                <th>Tên Loại</th>
                <th>Trạng Thái</th>
                <th>Tạo Mới</th>
                <th>Cập Nhật</th>
                 <th><a class="btn btn-primary" data-toggle="modal" href='#modal-create'>Create</a></th>
                
            </tr>
              </thead>
              </table>
            </div>

<!-- modalCreate -->
  <div class="modal fade" id="modal-create">
    <div class="modal-dialog">
      <form name="frmTrinhDo" method="POST" action="{{ route('TrinhDo.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}    
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">

            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nhập Tên Trình Độ</label>
                <input type="text" class="form-control" id="tdd_ten" name="tdd_ten" placeholder="Nhập Tên Trình Độ">
              </div>
            
              <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tdd_trangthai", id="tdd_trangthai">
                    <option value="1">Khóa</option>
                    <option value="2">Khả dụng</option>
                </select>
              </div>
            </div>
          </div>
        <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-info" >Save</button>
        </div>
      </form>
    </div>
  </div>

  <!-- /.box-body -->
</div>



<div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="control-label col-sm-2" for="id">ID:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="fid" disabled>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="name" class="form-control" id="n">
                </div>
              </div>
            </form>
            <div class="deleteContent">
              Are you Sure you want to delete <span class="dname"></span> ? <span
                class="hidden did"></span>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn actionBtn" data-dismiss="modal">
                <span id="footer_action_button" class='glyphicon'> </span>
              </button>
              <button type="button" class="btn btn-warning" data-dismiss="modal">
                <span class='glyphicon glyphicon-remove'></span> Close
              </button>
            </div>
          </div>
        </div>
      </div>
      </div>

@endsection

@section('script')


<!-- <script src="//code.jquery.com/jquery.js"></script> -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<script>
$(function() {
    $('#tbTrinhDo').DataTable({
        processing: true,
        serverSide: true,
        "language": {
          "lengthMenu": "Hiển thị _MENU_ dòng dữ liệu trên một trang",
           "info":" Hiển thị _START_ trong tổng số _TOTAL_ dòng dữ liệu",
           "infoEmpty":"Dữ liệu rỗng",
           "emptyTable":"Chưa có dữ liệu nào",
           "processing":"Đang Xử Lý...", 
           "search":"Tìm Kiếm",
           "loadingRecords":"Đang load dữ liệu",
          "zeroRecords":"Không Tìm Thấy Dữ Liệu",
          "infoFiltered":"(Lọc Trong _MAX_ Dòng Dữ Liệu)",
        },
        ajax: '{!! route('TrinhDo1') !!}',
        columns: [
            { data: 'tdd_ma', name: 'tdd_ma' },
            { data: 'tdd_ten', name: 'tdd_ten' },
            { data: 'tdd_trangthai', name: 'tdd_trangthai' },
            { data: 'tdd_taomoi', name: 'tdd_taomoi' },
            { data: 'tdd_capnhat', name: 'tdd_capnhat' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});



$(document).ready(function() {
  $(document).on('click', '.edit-modal', function() {
        $('#footer_action_button').text("Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
    });
    $(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete');
        $('.did').text($(this).data('id'));
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        $('.dname').html($(this).data('name'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.edit', function() {

        $.ajax({
            type: 'post',
            url: '/editItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'name': $('#n').val()
            },
            success: function(data) {
                $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
            }
        });
    });
    $("#add").click(function() {

        $.ajax({
            type: 'post',
            url: '/addItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'name': $('input[name=name]').val()
            },
            success: function(data) {
                if ((data.errors)){
                  $('.error').removeClass('hidden');
                    $('.error').text(data.errors.name);
                }
                else {
                    $('.error').addClass('hidden');
                    $('#table').append("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
                }
            },

        });
        $('#name').val('');
    });
    $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/deleteItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function(data) {
                $('.item' + $('.did').text()).remove();
            }
        });
    });
});


</script> 
@endsection






