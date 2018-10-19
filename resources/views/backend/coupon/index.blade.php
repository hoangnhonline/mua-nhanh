@extends('backend.layout')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Coupon
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ route( 'coupon.index' ) }}">Coupon</a></li>
    <li class="active">Danh sách</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      @if(Session::has('message'))
      <p class="alert alert-info" >{{ Session::get('message') }}</p>
      @endif
      <a href="{{ route('coupon.create') }}" class="btn btn-info" style="margin-bottom:5px">Tạo mới</a>
      
      <div class="box">
        <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Bộ lọc</h3>
        </div>
        <div class="panel-body">
        <form class="form-inline" role="form" method="GET" action="{{ route('coupon.index') }}" id="searchForm">            
            <div class="form-group">
              <label for="email">Trạng thái </label>
              <select class="form-control" name="used" id="used">
                <option value="0" {{ $used == 0 ? "selected" : "" }}>Chưa sử dụng</option>
                <option value="1" {{ $used == 1 ? "selected" : "" }}>Đã sử dụng</option>
                
              </select>
            </div>            
            <button type="submit" class="btn btn-default btn-sm">Lọc</button>
          </form> 
        </div></div>
        <div class="box-header with-border">
          <h3 class="box-title">Danh sách ( <span class="value">{{ $items->total() }} coupon )</span></h3>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">

          
            <input type="hidden" name="table" value="color">
            <table class="table table-bordered" id="table-list-data">
              <tr>
                <th style="width: 1%">#</th>                    
                <th>Mã coupon</th>
                <th>Loại</th>
                <th>Giá trị</th>
                <th style="width: 1%;white-space: nowrap;">Trình trạng</th>
                <th width="1%;white-space:nowrap">Thao tác</th>
              </tr>
              <tbody>
              @if( $items->count() > 0 )
                <?php $i = 0; ?>
                @foreach( $items as $item )
                  <?php $i ++; ?>
                <tr id="row-{{ $item->id }}">
                  <td><span class="order">{{ $i }}</span></td>                        
                  <td>                  
                    <a href="{{ route( 'coupon.edit', [ 'id' => $item->id ]) }}">{{ $item->coupon }}</a>
                  </td>
                  <td>
                    @if($item->type == 1)
                      Thành tiền
                    @else
                      %
                    @endif
                  </td>
                  <td>
                    {{ number_format($item->coupon_value) }} @if($item->type == 2) % @else VNĐ @endif
                  </td>
                  <td style="width: 1%;white-space: nowrap;">
                    @if($item->used == 1)
                    Đã sử dụng
                    @endif
                  </td>
                  <td style="white-space:nowrap">                  
                    <a href="{{ route( 'coupon.edit', [ 'id' => $item->id ]) }}" class="btn btn-warning btn-sm">Chỉnh sửa</a>                                     
                    <a onclick="return callDelete('{{ $item->coupon }}','{{ route( 'coupon.destroy', [ 'id' => $item->id ]) }}');" class="btn btn-danger btn-sm">Xóa</a>
                    
                  </td>
                </tr> 
                @endforeach
              @else
              <tr>
                <td colspan="3">Không có dữ liệu.</td>
              </tr>
              @endif

            </tbody>
            </table>
            
        </div>        
      </div>
      <!-- /.box -->     
    </div>
    <!-- /.col -->  
  </div> 
</section>
<!-- /.content -->
</div>
<style type="text/css">
  a.color_code {
    display: block;
    width: 50px;
    height: 50px;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.29);
    border: 1px solid rgba(0, 0, 0, 0.2);
    text-align: center;
    line-height: 28px;
    font-size: 10px;
    color: #FFF;
}
</style>
@stop
@section('javascript_page')
<script type="text/javascript">
  $(document).ready(function(){
$('#used').change(function(){
  $(this).parents('form').submit();
});
  });
function callDelete(name, url){  
  swal({
    title: 'Bạn muốn xóa "' + name +'"?',
    text: "Dữ liệu sẽ không thể phục hồi.",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes'
  }).then(function() {
    location.href= url;
  })
  return flag;
}
</script>
@stop