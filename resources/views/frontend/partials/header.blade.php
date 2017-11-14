<header id="header" class="header">
		<div class="header_top top-bar clearfix">
			<div class="container">
				<div class="row">					
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
						<form action="/tim-kiem" method="get" class="">
							<div class="search-box form-inline clearfix">
								<div class="search-box_category">
									<select class="selectpicker" id="category_search" name="category">
										<option value="0">Tất cả danh mục</option>
										<option value="557">- Ẩm thực</option>
										<option value="579">- Spa &apm; Làm đẹp</option>
										<option value="555">- Giải trí</option>
										<option value="581">- Du Lịch</option>
										<option value="571">- Sản Phẩm</option>
										<option value="593">- Thời Trang &apm; Phụ Kiện</option>
									</select>
								</div>
								<div class="search-box_input">
									<span class="twitter-typeahead">
										<input type="text" class="form-control input-search tt-hint" value="" autocomplete="off" placeholder="Tìm kiếm sản phẩm / khuyến mãi">
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
								<a href="#" data-toggle="dropdown">
									<span class="icon-cart"><img src="{{ URL::asset('public/assets/images/cart.jpg') }}" alt=""></span>
									<span class="circle">1</span>
									<span class="hidden-xs hidden-sm">Giỏ hàng</span>
								</a>
								<div class="dropdown-menu dropdown-cart">
									<div class="minicart_wrapper">
									    <div class="minicart_item">
									        <div class="minicart_item_info">
									            <img src="{{ URL::asset('public/assets/images/cart/338333-buffet-trua-bbq-bo-my-hai-san-lau-gan-50-mon-tai-nha-hang-yaki-3.jpg') }}" alt="">
									            <div class="minicart_item_name">
									                <div><a href="/ho-chi-minh/buffet-viet-nhat-han/buffet-trua-bbq-bo-my-hai-san-lau-gan-50-mon-tai-nha-hang-yaki-3-338333.html">Buffet Trưa BBQ Bò Mỹ - Hải Sản - Lẩu Gần 50 Món Tại Nhà Hàng Yaki 3 - <span style="color: #999;">Mã SP: 338333</span></a></div>
									                <span class="minicart_item_price price"><span class="price_value">150,000</span><span class="price_symbol">đ</span></span> x 1
									            </div>
									        </div>
									        <div class="minicart_item_actions"><a href="#" rel="nofollow" data-product="338333" title="Xóa khỏi giỏ hàng" class="btn-close show-on-hover">x</a></div>
									    </div>
									</div><!-- /.minicart_wrapper -->
									<div class="minicart_summary">
									    Tổng cộng: <strong>
									    <span class="price price-highlight">
									    <span class="price_value">150,000</span>
									    <span class="price_symbol">đ</span>
									    </span></strong>
									</div><!-- /.minicart_summary -->
									<div class="minicart_actions">
									    <a class="btn btn-view-cart" href="/checkout-step-1" rel="nofollow">Xem giỏ hàng</a>
									    <a class="btn btn-success btn-buy-now btn-buy-now-new" href="/checkout-step-2" rel="nofollow">Đặt hàng</a>
									</div><!-- /.minicart_actions -->
								</div><!-- /.dropdown-menu dropdown-cart -->
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
						<li class="level0 parent">
							<a href="#" title="">Mỹ Phẩm</a>
							<ul class="level0 submenu">
								<li class="level1 parent">
									<a href="#" title="">Kem</a>
									<ul class="level1 submenu">
										<li><a href="#" title="">Sữa rửa mặt</a></li>
										<li><a href="#" title="">Bột rửa mặt</a></li>
										<li><a href="#" title="">Dung dịch hoa hồng</a></li>
										<li><a href="#" title="">Các loại sản phẩm đi kèm chăm sóc da</a></li>
									</ul>
								</li>								
							</ul>
						</li>
						<li class="level0 parent">
							<a href="#" title="">Dòng thức ăn homemade</a>
							<ul class="level0 submenu">
								<li class="level1">
									<a href="#" title="">Bánh sản xuất theo lịch hàng ngày</a>
								</li>
								<li class="level1 parent">
									<a href="#" title="">Các thực phẩm khô</a>
									<ul class="level1 submenu">
										<li><a href="#" title="">Khô bò</a></li>
										<li><a href="#" title="">Khô gà</a></li>
									</ul>
								</li>
								<li class="level1 parent">
									<a href="#" title="">Thực phẩm dùng trong thời gian cố định</a>
									<ul class="level1 submenu">
										<li><a href="#" title="">Lạp xưởng tươi - khô</a></li>
										<li><a href="#" title="">Sản phẩm sấy khô</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="level0 parent">
							<a href="#" title="">Dòng sản phẩm family</a>
							<ul class="level0 submenu">
								<li class="level1">
									<a href="#" title="">Phụ kiện nữ</a>
								</li>
								<li class="level1">
									<a href="#" title="">Phụ kiện nam</a>
								</li>
								<li class="level1">
									<a href="#" title="">Dụng cụ dành cho trẻ em, sơ sinh</a>
								</li>
								<li class="level1">
									<a href="#" title="">Bedroom</a>
								</li>
								<li class="level1">
									<a href="#" title="">Kitchen</a>
								</li>
							</ul>
						</li>
						<li class="level0 parent">
							<a href="#" title="">Quà tặng cao cấp</a>
							<ul class="level0 submenu">
								<li class="level1">
									<a href="#" title="">Sâm, linhc chi, tổ yến</a>
								</li>
								<li class="level1">
									<a href="#" title="">Rượu nhập các loại</a>
								</li>
								<li class="level1">
									<a href="#" title="">Bánh nguyên hôp thiếc nhập Nhật</a>
								</li>
								<li class="level1">
									<a href="#" title="">Thực phẩm chức năng từ Nhật - Mỹ - Úc - Hà Lan</a>
								</li>
								<li class="level1">
									<a href="#" title="">Kitchen</a>
								</li>
							</ul>
						</li>
						<li><a href="contact.html" title="">Liên hệ</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
	        </div>
    	</nav><!-- END NAVIGATION -->
	</header><!-- /.header -->