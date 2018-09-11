@extends('backend.layouts.app')   

@section('title')
  Danh sach cac chu de
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC CHỦ ĐỀ HOA
        <small>CÁC CHỦ ĐỀ VÀ LOẠI HOA</small>
      </h1>
@endsection

@section('css')

    <link rel="stylesheet" href=" {{ asset('Theme/admin/dist/css/skins/skin-green.css') }}">
@endsection

<!-- noi dung can thay doi o giua -->
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sach Chu De</h3>
              
              
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
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover text-center ">
                <tr>
                  <th>Mã</th>
                  <th style="text-align: left">Tên</th>
                  <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th>
                  <th>Trạng Thái</th>
                  
                  <!-- <th></th> -->
                </tr>
                
                
                
              </table>
            </div>

            <!-- /.box-body -->
          </div>

@endsection

@section('script')
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection



