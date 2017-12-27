@extends('frontend.layout')  
@include('frontend.partials.meta')
@section('header')
    @include('frontend.partials.header')
    
  @endsection
@section('content')
<div id="main" class="main-content clearfix" style="margin-top:15px;">
        <div class="container">
            <div class="sidebar-content-2">
                <div class="sidebar sidebar-profile">
                    <div class="box box-no-padding">
                        <div class="box_header">
                            <h2 class="box_title" style="text-transform:uppercase">Thông tin chung</h2>
                        </div>
                        <div class="box_body">
                            <div class="sidebar_widget widget widget-profile">
                                <div class="profile">                                   
                                    <div class="profile_info">
                                        <div class="profile_name"><i class="hd hd-user"></i> {{ Session::get('username') }}</div>       
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar_widget widget">
                                <ul class="side-menu">
                                   <li {{ \Request::route()->getName() == "order-history" || \Request::route()->getName() == "order-detail" ? "class=active" : "" }}>
                                  <a href="{{ route('order-history') }}" title="Đơn hàng của tôi"> Đơn hàng của tôi</a>
                              </li>                         
                              <li>
                                  <a href="{{ route('logout') }}" title="Thoát tài khoản">Thoát tài khoản </a>
                              </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.header -->
                <div class="content" style="">
                    <div class="box">
                        <div class="box_header">
                            <h2 class="box_title" style="text-transform:uppercase">THÔNG TIN TÀI KHOẢN</h2>                            
                        </div><!-- /.box_header -->
                        <div class="col-tab-content admin-content" id="all">
                  
                          @if(Session::has('message'))                        
                          <p class="alert alert-info" >{{ Session::get('message') }}</p>                  
                          @endif
                          @if (count($errors) > 0)                        
                            <div class="alert alert-danger ">
                              <ul>                           
                                  <li>Vui lòng nhập đầy đủ thông tin.</li>                            
                              </ul>
                            </div>                        
                          @endif 
                          <form class="form" action="{{ route('update-customer') }}" method="POST">
                          {{ csrf_field() }}
                              <div class="row">
                                  <div class="col-md-12 form-group clearfix">
                                      <div class="col-form-label"><label for="fullname">Họ và tên</label></div>
                                      <div class="col-form-input"><input type="text" class="form-control" id="fullname" name="fullname" value="{!! old('fullname', $customer->fullname) !!}"></div>
                                  </div>
                                  <div class="col-md-12  form-group clearfix">
                                      <div class="col-form-label"><label for="phone">Điện thoại</label></div>
                                      <div class="col-form-input"><input type="text" class="form-control" id="phone" value="{{ old('phone', $customer->phone) }}" name="phone"></div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="col-form-label"><label for="email">Email</label></div>
                                      <div class="col-form-input"><input type="email" class="form-control" id="email" value="{{ old('email', $customer->email) }}" disabled></div>
                                  </div>
                              </div>
                          
                            <div class="clearfix account-action">
                                <div class="col-form-label"></div>
                                <div class="col-form-input"><button type="submit" id="btnSave" class="btn btn-yellow btn-flat">Cập nhật</button></div>
                            </div>
                          </form>
                      </div>
                        
                    </div>
                </div><!-- /.header -->
            </div>
        </div>
    </div>

<style type="text/css">    
    .dashboard-order.have-margin {
        margin-bottom: 20px;
    }   
    table.table-responsive thead tr th {
        display: table-cell;
        padding: 8px;
        background: #f8f8f8;
        font-weight: 500;    
    }
    table.table-responsive tbody tr td{
        font-size: 14px !important;
    }
</style>
<div class="clearfix"></div>
@endsection


@section('javascript_page')
   <script type="text/javascript">
    $(document).ready(function() {

    });
  </script>
@endsection
