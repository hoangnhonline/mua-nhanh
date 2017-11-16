<header id="header" class="header">
		<div class="header_top top-bar clearfix">
			<div class="container">
				<div class="row">					
					<nav class="top-bar_item top-bar_item-nav navigation navigation-inline pull-right">
						<ul id="user_info_header" class="navbar-right">
							@if(!Session::get('username'))
							<li>
								<a data-url="javascript:;" title="Đăng nhập bằng Facebook" class="user-name-loginfb login-by-facebook-popup"><i class="fa fa-facebook-square"></i>Đăng nhập bằng Facebook</a>
							</li>
							@else
							<li class="dropdown dropdown-arrow">
								<a href="/thong-tin-tai-khoan.html" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                            <i class="hd hd-user"></i> {{ Session::get('username') }} <i class="fa fa-caret-down"></i>
		                        </a>
		                        <ul class="dropdown-menu" role="menu"><li><a href="/thong-tin-tai-khoan.html" rel="nofollow" class="underlined">Thông tin tài khoản</a></li>
		                            <li><a href="/thong-tin-don-hang.html" rel="nofollow" class="underlined">Thông tin đơn hàng</a></li>
		                            <li><a href="/diem-tich-luy.html" rel="nofollow">Điểm tích lũy <span style="color:red;">(0)</span></a></li>
		                            <li><a href="/quan-ly-e-voucher.html" rel="nofollow">Quản lý E-voucher</a></li><li class="show-in-checkout"><a href="{{ route('logout') }}" rel="nofollow" class="underlined">Đăng xuất</a></li>
		                        </ul>
							</li>
							@endif
						</ul>
					</nav>
					<nav class="top-bar_item top-bar_item-nav navigation navigation-inline pull-right" style="border-right: 1px solid #fff;">

					    <ul id="user_support" class="navbar-right">
					        <li><a href="callto:19006760">
					            <i class="hd hd-phone"></i> Hotline:&nbsp;<span class="hotline_number @if($isEdit) edit @endif" data-text="17">{!! $textList[17] !!}</span></a>
					        </li>
					    </ul>
					</nav>
				</div>
			</div>
		</div><!-- /.header -->
		<div class="header_main  clearfix">
			<div class="container">
				<div class="row">
					<a class="toggle-nav visible-xs visible-sm" data-target="#hd-container" data-effect="hd-effect-4">
						<i class="hd hd-bars"></i>
					</a><!-- /.toggle-nav -->
					<a class="toggle-search visible-xs visible-sm" data-target="#main-search">
						<i class="hd hd-search"></i>
					</a><!-- /.toggle-search -->
					<div class="logo-wrapper col-md-4">
					    <a href="{{ route('home') }}" title="muanhanhgiatot.vn">
					        <img src="{{ Helper::showImage($settingArr['logo']) }}" alt="logo muanhanhgiatot.vn">
					    </a>
					</div><!-- /.logo-wrapper -->
					<div class="search-area col-md-6" id="main-search">
						<form action="{{ route('search') }}" method="GET">
							<div class="search-box form-inline clearfix">
								<div class="search-box_category">
									<select class="selectpicker" id="pid" name="pid">
										<option value="">Tất cả danh mục</option>
										@foreach($cateParentList as $parent)
										<option value="{!! $parent->id !!}" {{ isset($parent_id) && $parent_id == $parent->id ? "selected" : "" }}>{!! $parent->name !!}</option>
										@endforeach
									</select>
								</div>
								<div class="search-box_input">
									<span class="twitter-typeahead">
										<input type="text" class="form-control input-search tt-hint txtSearch" value="{{ isset($tu_khoa) ? $tu_khoa : "" }}" autocomplete="off" name="keyword" placeholder="Tìm kiếm sản phẩm...">
									</span>
									<button class="btn btn-primary">
					                    <i class="hd hd-search"></i>
					                    <span class="sr-only">Tìm kiếm</span>
					                  </button>
								</div>
							</div>
						</form>
					</div><!-- /.search-area -->
					<div class="col-md-2 header-cart-wrapper">
						<ul class="header-cart">
							<li class="nav-cart">
								<a href="{{ route('cart') }}">
									<span class="icon-cart"><img src="{{ URL::asset('public/assets/images/cart.jpg') }}" alt="Giỏ hàng"></span>
									<span class="circle">{{ Session::get('products') ? array_sum(Session::get('products')) : 0 }}</span>
									<span class="hidden-xs hidden-sm">Giỏ hàng</span>
								</a>								
							</li>
						</ul><!-- /.header-cart -->
					</div><!-- /.header-cart-wrapper -->
				</div>
			</div>
		</div><!-- /.header_main -->
		<nav id="mainNav" class="navbar navbar-default navbar-custom nav-top-menu1 mid-header">
      <div class="container" id="main-menu">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-navbar-collapse">
            <span class="sr-only">Toggle navigation</span><i class="hd hd-bars"></i>
          </button>
				</div>
				<div class="collapse navbar-collapse menu" id="menu-navbar-collapse">
					<ul class="nav navbar-nav navbar-left">
						<li class="level0 parent"><a class="active" href="{{ route('home') }}" title="Trang chủ">Trang chủ</a></li>
						@foreach($cateParentList as $parent)
						<li class="level0 parent">
							<a href="{{ route('cate-parent', $parent->slug ) }}" title="{!! $parent->name !!}">{!! $parent->name !!}</a>
							@if(!empty($cateArrByLoai[$parent->id]))
							<ul class="level0 submenu">
								@foreach($cateArrByLoai[$parent->id] as $cate)
								<li class="level1">
									<a href="{{ route('cate', [$parent->slug, $cate->slug]) }}" title="{!! $cate->name !!}">{!! $cate->name !!}</a>					
								</li>	
								@endforeach
							</ul>
							@endif
						</li>
						@endforeach
						<li><a href="{!! route('news-list', 'tin-tuc') !!}" title="Tin tức">Tin tức</a></li>
						
						<li><a href="{{ route('contact') }}" title="Liên hệ">Liên hệ</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
	        </div>
    	</nav><!-- END NAVIGATION -->
	</header><!-- /.header -->
	<style type="text/css">
		.user-name-loginfb {
		    background-image: -webkit-linear-gradient(top, #5972a5 0, #3e578b 100%);
		    background-image: linear-gradient(to bottom, #5972a5 0, #3e578b 100%);
		    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5972a5', endColorstr='#ff3e578b', GradientType=0);
		    -webkit-border-radius: 5px;
		    -moz-border-radius: 5px;
		    border-radius: 5px;
		    -webkit-box-shadow: 0 -2px 0 #112d6c inset;
		    box-shadow: 0 -2px 0 #112d6c inset;
		    background-repeat: repeat-x;
		    border: none;
		    color: #fff;
		    cursor: pointer;
		    font-size: 12px;
		}
	</style>