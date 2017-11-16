@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="container">
    <div class="block-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="{!! route('home') !!}">Trang chủ</a></li>
            <li class="active">{!! $detailPage->title !!}</li>
        </ol>
    </div>
</div><!-- /.breadcrumb -->
<main class="main-content clearfix">
	<div class="container">
		<div class="box box-shadow">
			<div class="sidebar-content sidebar-first">
				<div class="sidebar">
				    <div class="sidebar_widget widget">
				        <h3 class="widget_title">Giới thiệu</h3>
				        <ul class="side-menu">
				            <li><a href="#">Về Chúng Tôi</a></li>
				            <li><a href="#">Quy chế hoạt động</a></li>
				            <li><a href="#">Chính sách bảo mật thông tin</a></li>
				            <li><a href="#">Cơ chế giải quyết tranh chấp</a></li>
				            <li><a href="#">Liên Hệ</a></li>
				        </ul>
				    </div>
				    <div class="sidebar_widget widget">
				        <h3 class="widget_title">Trợ giúp</h3>
				        <ul class="side-menu">
				            <li><a href="#">Quy trình xử lý khi phát hiện hành vi kinh doanh vi phạm </a></li>
				            <li><a href="#">Biện pháp xử lý khi phát hiện hành vi kinh doanh vi phạm </a></li>
				            <li><a href="#">Cơ chế kiểm soát các nhà cung cấp</a></li>
				            <li><a href="#">Chính sách giao hàng</a></li>
				            <li><a href="#">Hotdeal E-voucher</a></li>
				            <li><a href="#">Chính sách đổi trả hàng</a></li>
				            <li><a href="#">Cách thức thanh toán</a></li>
				        </ul>
				    </div>
				    <div class="sidebar_widget widget">
				        <h3 class="widget_title">Hợp tác</h3>
				        <ul class="side-menu">
				            <li><a href="#">Hợp tác kinh doanh</a></li>
				            <li class="active"><a href="#">Liên hệ hợp tác</a></li>
				        </ul>
				    </div>
				</div>
				<div class="content wysiwyg wysiwyg-news">
				    <h1 class="page-title">{!! $detailPage->title !!}</h1>
				    <div>
				    	{!! $detailPage->content !!}
				    </div>
				</div>
			</div>
		</div>
	</div>
</main><!-- /.main -->
@stop