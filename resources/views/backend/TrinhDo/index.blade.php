@extends('backend.layouts.app')   

@section('title')
  Danh Sách Các Trình Độ Giảng Dạy
@endsection

@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset ('theme/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> -->
  <link rel="stylesheet" href="{{ asset ('css/toastr.css') }}">

  <style type="text/css">
    .modal-header{
      background-color: #ffd22d;
    } 
  </style>
@endsection

@section('page-header')
      <h1>
        Danh Sách Các Trình Độ Giảng Dạy
        <small>Danh Sách Các Trình Độ Giảng Dạy</small>
      </h1>
@endsection
@section('content')

@if($errors->any())
      @foreach($errors->all() as $error)
      
      <script type="text/javascript">
         setTimeout(function () {
          toastr.options = {
              "closeButton": true,
              "debug": false,
              "newestOnTop": true,
              "progressBar": true,
              "positionClass": "toast-top-center",
              "preventDuplicates": true,
              "onclick": null,
              "hideDuration": "1000"
            }
            toastr.warning( '{{$error}}', 'Successfully!!!', {timeOut: 50000});
        }, 500);
    </script>
      @endforeach
@endif

@if(Session::has('success'))
<script type="text/javascript">
     setTimeout(function () {
      toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,
          "positionClass": "toast-top-center",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "100",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        toastr.success('Thêm Thành Công', 'Successfully!!!', {timeOut: 5000});
    }, 500);
</script>
@endif
@if(Session::has('deletesuccess'))
<script type="text/javascript">
     setTimeout(function () {
      toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,
          "positionClass": "toast-top-center",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "100",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        toastr.success('Xóa Thành Công', 'Successfully!!!', {timeOut: 800});
    }, 500);
</script>
@endif
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Các Trình Độ Giảng Dạy</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover text-center " id="myTable">
                <thead>
                <tr>
                  <th>STT</th>
                  <th style="text-align: left">Tên</th>
                  <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th>
                  <th>Trạng Thái</th>
                  <th >
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                       <i class="fa fa-plus"></i> Thêm Trình Độ
                    </button>
                  </th>
                </tr>
                </thead>
                
                <tbody>
                    
                @foreach ($dsTrinhDo as $td)
                <tr>
                    <td>{{ $loop->index + 1}}</td>
                    <td style="text-align: left;">{{$td->tdd_ten}}</td>
                    <td>{{$td->tdd_taomoi}}</td>
                    <td>{{$td->tdd_capnhat}}</td>
                    @if ($td->tdd_trangthai === 1)

                    <td style="text-align: center;"><span class="badge bg-yellow">Khóa</span></td>
                    @else
                    <td style="text-align: center;"><span class="badge bg-green">Khả Dụng</span></td>
                    @endif
                    
                    <td>
                        <button class="btn btn-info" data-mytitle="{{$td->tdd_ten}}" data-mydescription="{{$td->tdd_trangthai}}" data-catid={{$td->tdd_ma}} data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i> Edit</button>
                        
                        <button class="btn btn-danger" data-catid={{$td->tdd_ma}} data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i> Delete</button>
                    </td>
                </tr>
                @endforeach
                </tbody>

                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>



          <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Thêm Trình Độ</h4>
      </div>
      <form action="{{route('TrinhDo.store')}}" method="post">
            {{csrf_field()}}
          <div class="modal-body">
                <div class="form-group">
                    <label for="title">Tên Trình Độ</label>
                    <input type="text" class="form-control" name="tdd_ten" id="tdd_ten">
                </div>

                <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tdd_trangthai", id="tdd_trangthai">
                  <!-- <select > -->
                    <option value="1">Khóa</option>
                    <option value="2">Khả dụng</option>
                  <!-- </select> -->
                </select>
                </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-primary">Lưu</button>
          </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cập Nhật Trình Độ</h4>
      </div>
      <form action="{{route('TrinhDo.update','test')}}" method="post">
            {{method_field('patch')}}
            {{csrf_field()}}
          <div class="modal-body">
            <input type="hidden" name="tdd_ma" id="tdd_ma" value="">
                <div class="form-group">
                    <label for="title">Tên Trình Độ</label>
                    <input type="text" class="form-control" name="tdd_ten" id="tdd_ten">
                </div>

                <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tdd_trangthai", id="tdd_trangthai">
                  <!-- <select > -->
                    <option value="1">Khóa</option>
                    <option value="2">Khả dụng</option>
                  <!-- </select> -->
                </select>
                </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
          </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Xác Nhận Xóa</h4>
      </div>
      <form action="{{route('TrinhDo.destroy','test')}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
          <div class="modal-body">
            <input type="hidden" name="tdd_ma" id="tdd_ma" value="">
                <p class="text-center">
                    Bạn Có Chắc Chắn Xóa?
                </p>
                <input type="hidden" name="tdd_ma" id="tdd_ma" value="">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Không</button>
            <button type="submit" class="btn btn-warning">Có</button>
          </div>
      </form>
    </div>
  </div>
</div>


@endsection

@section('script')
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset ('theme/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script>

    $(document).ready( function () {
    // $('#myTable').DataTable();
    $('#myTable').DataTable();
} );
  
   $('#edit').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 
      var tdd_ten = button.data('mytitle') 
      var tdd_trangthai = button.data('mydescription') 
      var tdd_ma = button.data('catid') 
      var modal = $(this)

      modal.find('.modal-body #tdd_ten').val(tdd_ten);
      modal.find('.modal-body #tdd_trangthai').val(tdd_trangthai);
      modal.find('.modal-body #tdd_ma').val(tdd_ma);
})


  $('#delete').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 

      var tdd_ma = button.data('catid') 
      var modal = $(this)

      modal.find('.modal-body #tdd_ma').val(tdd_ma);
})


</script>
@endsection



