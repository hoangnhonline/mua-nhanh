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
      <li><a href="{{ route('coupon.index') }}">Coupon</a></li>
      <li class="active">Cập nhật</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default" href="{{ route('coupon.index') }}" style="margin-bottom:5px">Quay lại</a>
    <form role="form" method="POST" action="{{ route('coupon.update') }}">
    <div class="row">
      <!-- left column -->

      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Cập nhật</h3>
          </div>
          <!-- /.box-header -->               
            {!! csrf_field() !!}
            <div class="box-body">
              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif                
                <div class="form-group" >
                  <input type="hidden" name="id" value="{{ $detail->id }}">
                  <label>Mã coupon<span class="red-star">*</span></label>
                  <input type="text" class="form-control" name="coupon" id="coupon" value="{{ old('coupon', $detail->coupon) }}">
                </div> 
                <div class="form-group" >
                  
                  <label>Loại giảm giá<span class="red-star">*</span></label>
                  <select class="form-control" name="type" id="type">
                    <option value="1" {{ old('type', $detail->type) == 2 ? "selected" : "" }}>Thành tiền</option>
                    <option value="2" {{ old('type', $detail->type) == 2 ? "selected" : "" }}>%</option>
                  </select>
                </div> 
                <div class="form-group" >
                  
                  <label>Mã coupon<span class="red-star">*</span></label>
                  <input type="text" class="form-control number" name="coupon_value" id="coupon_value" value="{{ old('coupon_value', $detail->coupon_value) }}">
                </div>   
                <div class="form-group" >
                  <input id="used" type="checkbox" name="used" value="1" {{ old('used', $detail->used) == 1 ? "checked" : "" }}>
                   <label for="used">Đã sử dụng</label>
                </div>               
                  
            </div>              
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
              <a class="btn btn-default" class="btn btn-primary" href="{{ route('coupon.index')}}">Hủy</a>
            </div>
            
        </div>
        <!-- /.box -->     

      </div>
    
      <!--/.col (left) -->      
    </div>
    </form>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@stop