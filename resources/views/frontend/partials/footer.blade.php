<footer id="footer" class="footer clearfix">
		<div class="footer_top">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-8">
		                <div class="row footer-menu">
		                    <div class="col-md-4 footer-menu_column menu">
		                        <h3 class="menu_heading @if($isEdit) edit @endif" data-text="1">{!! $textList[1] !!}</h3>
		                        <ul class="menu_listing">
		                            <li><a href="#">Về Chúng Tôi</a></li>
		                            <li><a href="#">Quy chế hoạt động</a></li>
		                            <li><a href="#">Chính sách bảo mật thông tin</a></li>
		                            <li><a href="#">Cơ chế giải quyết tranh chấp</a></li>
		                            <li><a href="#">Liên Hệ</a></li>
		                        </ul>
		                    </div>
		                    <div class="col-md-4 footer-menu_column menu">
		                        <h3 class="menu_heading @if($isEdit) edit @endif" data-text="2">{!! $textList[2] !!}</h3>
		                        <ul class="menu_listing">
		                            <li><a href="#">Quy trình xử lý khi phát hiện hành vi kinh doanh vi phạm </a></li>
		                            <li><a href="#">Biện pháp xử lý khi phát hiện hành vi kinh doanh vi phạm </a></li>
		                            <li><a href="#">Cơ chế kiểm soát các nhà cung cấp</a></li>
		                            <li><a href="#">Hotdeal E-voucher</a></li>
		                            <li><a href="#">Chính sách giao hàng</a></li>
		                            <li><a href="#">Chính sách đổi trả hàng</a></li>
		                            <li><a href="#">Cách thức thanh toán</a></li>
		                        </ul>
		                    </div>
		                    <div class="col-md-4 footer-menu_column menu">
		                        <h3 class="menu_heading @if($isEdit) edit @endif" data-text="3">{!! $textList[3] !!}</h3>
		                        <ul class="menu_listing">
		                            <li><a href="#">Hợp tác kinh doanh</a></li>
		                            <li><a href="#">Liên hệ hợp tác</a></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-4 support-info">
		                <div class="col-md-12">
		                    <h3 class="support-info_heading @if($isEdit) edit @endif" data-text="4">{!! $textList[4] !!}</h3>
		                    <div class="support-info_address @if($isEdit) edit @endif" data-text="5">{!! $textList[5] !!}</div>
		                    <div class="support-info_contact contact">
		                        <div class="contact_email @if($isEdit) edit @endif" data-text="6">{!! $textList[6] !!}</div>
		                        <div class="contact_email">Email: <a href="mailto:{!! $textList[7] !!}" data-text="7" @if($isEdit) class="edit" @endif>{!! $textList[7] !!}</a></div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="footer_middle">
			<div class="container">
				<div class="col-fter-1 col-xs-0">
					<form action="#" class="fv-form fv-form-bootstrap">
						<p style="margin-bottom: 10px;"><strong data-text="8" @if($isEdit) class="edit" @endif>{!! $textList[8] !!}</strong></p>
						<div class="newsletter form-inline">
							<div class="form-group has-feedback">
								<div class="input-group">
									<input type="text" class="form-control newsletter_input" name="" placeholder="Nhập email của bạn" value="">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<button type="submit" class="btn btn-success newsletter_button">Đăng ký
									</button>
								</div>
							</div>
						</div>						
					</form>
				</div>
				<div class="col-fter-3">
					<div class="social">
						<div class="social_heading footer-menu-heading @if($isEdit) edit @endif" data-text="9">{!! $textList[9] !!}</div>
						<div class="social_items">
							<a target="_blank" class="social_item social_item-facebook" href="#" rel="nofollow"><i class="fa fa-facebook"></i></a>
							<a target="_blank" class="social_item social_item-twitter" href="#" rel="nofollow"><i class="fa fa-twitter"></i></a>
							<a target="_blank" class="social_item social_item-google-plus" href="#" rel="nofollow"><i class="fa fa-google-plus"></i></a>
							<a target="_blank" class="social_item social_item-linkedin" href="#" rel="nofollow"><i class="fa fa-linkedin"></i></a>
							<a target="_blank" class="social_item social_item-youtube" href="#" rel="nofollow"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
				</div>
				<div class="col-fter-4">
					<div class="hotline">
						<span class="hotline_text">HOTLINE&nbsp;</span>
						<span class="hotline_number @if($isEdit) edit @endif" data-text="11">{!! $textList[11] !!}</span>
					</div>
				</div>
				 <div class="col-fter-5">
		            <a target="_blank" href="#">
		            <img class="img-responsive" src="{{ URL::asset('public/assets/images/logo-bct.png') }}" style="max-width: 165px;">
		            </a>
		        </div>
			</div>
		</div>
		<div class="footer_bottom ">
		    <div class="container">
	            <p class="text-center">
	                <strong class="font15 @if($isEdit) edit @endif" data-text="12">{!! $textList[12] !!}</strong><br>
	                <span data-text="13" @if($isEdit) class="edit" @endif>{!! $textList[13] !!}</span><br>
	                ĐT: <span data-text="14" @if($isEdit) class="edit" @endif>{!! $textList[14] !!}</span> – Fax: <span data-text="15" @if($isEdit) class="edit" @endif>{!! $textList[15] !!}</span> - <br class="visible-xs visible-sm">Email: <a href="mailto:{!! $textList[16] !!}" data-text="16" @if($isEdit) class="edit" @endif>{!! $textList[16] !!}</a>
	            </p>
		    </div>
		</div>
	</footer><!-- /.footer -->