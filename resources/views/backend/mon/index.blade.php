@extends('backend.layouts.app')   

@section('title')
  Danh Sách Các Môn Học
@endsection

@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset ('theme/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('page-header')
      <h1>
        Danh Sách Các Môn Học
        <small>Danh Sách Các Môn Học</small>
      </h1>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Các Môn Học</h3>
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
                       <i class="fa fa-plus"></i> Thêm Môn Học
                    </button>
                  </th>
                </tr>
                </thead>
                
                <tbody>
                    
                @foreach ($dsmon as $m)
                <tr>
                    <td>{{ $loop->index + 1}}</td>
                    <td style="text-align: left;">{{$m->m_ten}}</td>
                    <td>{{$m->m_taomoi}}</td>
                    <td>{{$m->m_capnhat}}</td>
                    @if ($m->m_trangthai === 1)

                    <td style="text-align: center;"><span class="badge bg-yellow">Khóa</span></td>
                    @else
                    <td style="text-align: center;"><span class="badge bg-green">Khả Dụng</span></td>
                    @endif
                    
                    <td>
                        <button class="btn btn-info" data-mytitle="{{$m->m_ten}}" data-mydescription="{{$m->m_trangthai}}" data-catid={{$m->m_ma}} data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i> Edit</button>
                        
                        <button class="btn btn-danger" data-catid={{$m->m_ma}} data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i> Delete</button>
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
        <h4 class="modal-title" id="myModalLabel">New Category</h4>
      </div>
      <form action="{{route('Mon.store')}}" method="post">
            {{csrf_field()}}
          <div class="modal-body">
                <div class="form-group">
                    <label for="title">Tên Lĩnh Vực</label>
                    <input type="text" class="form-control" name="m_ten" id="m_ten">
                </div>

                <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="m_trangthai", id="m_trangthai">
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
        <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
      </div>
      <form action="{{route('Mon.update','test')}}" method="post">
            {{method_field('patch')}}
            {{csrf_field()}}
          <div class="modal-body">
            <input type="hidden" name="m_ma" id="m_ma" value="">
                <div class="form-group">
                    <label for="title">Tên Lĩnh Vực</label>
                    <input type="text" class="form-control" name="m_ten" id="m_ten">
                </div>

                <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="m_trangthai", id="m_trangthai">
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
      <form action="{{route('Mon.destroy','test')}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
          <div class="modal-body">
            <input type="hidden" name="m_ma" id="m_ma" value="">
                <p class="text-center">
                    Bạn Có Chắc Chắn Xóa?
                </p>
                <input type="hidden" name="m_ma" id="m_ma" value="">

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

<script src="{{ asset ('theme/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script>
    $(document).ready( function () {
    // $('#myTable').DataTable();
    $('#myTable').DataTable();
} );
  
   $('#edit').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 
      var m_ten = button.data('mytitle') 
      var m_trangthai = button.data('mydescription') 
      var m_ma = button.data('catid') 
      var modal = $(this)

      modal.find('.modal-body #m_ten').val(m_ten);
      modal.find('.modal-body #m_trangthai').val(m_trangthai);
      modal.find('.modal-body #m_ma').val(m_ma);
})


  $('#delete').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 

      var m_ma = button.data('catid') 
      var modal = $(this)

      modal.find('.modal-body #m_ma').val(m_ma);
})


</script>
@endsection



