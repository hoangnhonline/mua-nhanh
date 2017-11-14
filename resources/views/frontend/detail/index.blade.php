@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="container">
    <div class="block-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}" title="Trở về trang chủ">Trang chủ</a></li>
            <li><a href="{{ route('cate-parent', $loaiDetail->slug) }}" title="{!! $loaiDetail->name !!}">{!! $loaiDetail->name !!} </a></li>
            <li><a href="{{ route('cate', [$loaiDetail->slug, $cateDetail->slug]) }}" title="{!! $cateDetail->name !!}">{!! $cateDetail->name !!} </a></li>
            <li class="active">{!! $detail->name !!}</li>
        </ol>
    </div>
</div><!-- /.breadcrumb -->

<main class="main-content clearfix">
    <div class="container">
        <div class="product product-details clearfix">
            <div class="product_gallery gallery ">
                <div class="gallery_image">
                    <div class="block block-slide-detail">
                        <!-- Place somewhere in the <body> of your page -->
                        <div id="slider" class="flexslider">
                            <ul class="slides slides-large">
                                @foreach( $hinhArr as $hinh )
                                <li><img src="{{ Helper::showImage($hinh['image_url']) }}" alt=" hinh anh {!! $detail->name !!}" /></li>
                                @endforeach                                  
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                            <ul class="slides">
                                <?php $i = 0; ?>
                                @foreach( $hinhArr as $hinh )
                                <li><img src="{{ Helper::showImageThumb($hinh['image_url']) }}" alt="thumb {!! $detail->name !!}"  /></li>
                                <?php $i++; ?>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- /block-slide-detail -->
                </div>
            </div><!-- /.gallery_image -->
            <div class="product_details">
                <div class="product_header">
                    <h1 class="product_title">{!! $detail->name !!}</h1>
                    <div class="product_sharing sharing">
                        <div class="sharing_item">share1</div>
                        <div class="sharing_item">share2</div>
                        <div class="sharing_item">share3</div>
                    </div>
                </div>
                @if( $detail->description )
                <div class="product_description" style="border-bottom: 1px solid #eaeaea;">
                    <p>{!! $detail->description !!}</p>
                </div>
                @endif
                <div class="product_price-info clearfix">
                    <div class="box-price-detail">                                        
                        @if( $detail->is_sale == 1)
                        <div class="product_price product_price-list-price _product_price_old">
                            <span class="price price-list-price">
                                <span class="hidden-xs hidden-sm">Giá gốc:&nbsp;</span>
                                <span class="price_value">{!! number_format($detail->price) !!}</span>
                                <span class="price_symbol">đ</span>
                            </span>
                        </div>
                        <div class="product_price _product_price">
                            <span class="price">
                                <span class="price_value" itemprop="price">{!! number_format($detail->price_sale) !!}</span><span class="price_symbol">đ</span>
                                <span class="price_discount">-{!! number_format($detail->sale_percent) !!}%</span>
                            </span>
                        </div>
                        @else
                        <div class="product_price _product_price">
                            <span class="price">
                                <span class="price_value" itemprop="price">{!! number_format($detail->price) !!}</span><span class="price_symbol">đ</span>
                            </span>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="product_add-to-cart border-top clearfix">
                    
                        
                        <div class="add-to-cart_actions add-to-cart-buttons">
                            <button data-id="{{ $detail->id }}" class="btn btn-success btn-addcart-product  btn-buy-now btn-buy-now-x2">
                                MUA NGAY <i class="fa fa-long-arrow-right"></i>
                            </button>
                            <button id="add-to-cart" class="btn btn-default btn-add-to-cart">
                                <i class="fa fa-shopping-cart"></i> THÊM VÀO GIỎ HÀNG
                            </button>
                        </div>
                    
                </div>
            </div><!-- /.breadcrumb -->
        </div><!-- /.product=details -->        
        <div class="content-sidebar clearfix" style="margin-bottom: 10px">
            <div class="content">
                <div class="block-tabs">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#infodetail" aria-controls="infodetail" role="tab" data-toggle="tab">Thông tin chi tiết</a></li>
                        <li role="presentation"><a href="#evaluate" aria-controls="evaluate" role="tab" data-toggle="tab">Đánh giá</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="infodetail">                            
                            <div class="block_content clearfix">
                                <div class="wysiwyg">
                                    {!! $detail->content !!}
                                </div>
                                
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="evaluate">
                            
                        </div>
                    </div>
                </div>
            </div>
            @if ($otherList->count() > 0)
            <div class="sidebar" style="margin-top: 20px">
                <div class="block block-normal">
                    <div class="block_header">
                        <h3 class="block_title">Deal liên quan</h3>
                    </div>
                    <div class="block_content clearfix">
                        <div class="products products-list">
                            <?php $i = 0;?>
                            @foreach($otherList as $obj)
                            <?php $i++; ?>
                            <div class="product-wrapper product-auto-resize product-image-padding">
                                
                                <div class="product">
                                    <div class="product_image">
                                        <a href="#" title="">
                                            <img class="img-responsive" alt="product" src="{!! Helper::showImageThumb($obj->image_url) !!}" />
                                        </a>
                                    </div>
                                    <div class="product_header">
                                        <h3 class="product_title">
                                            <a href="#" title="">{!! $obj->name !!}</a>
                                        </h3>
                                    </div>
                                    <div class="product_info">
                                        <div class="product_price _product_price">
                                            <span class="price">
                                                <span class="price_value" itemprop="price">69,000</span><span class="price_symbol">đ</span>
                                                <span class="price_discount">-31%</span>
                                            </span>
                                        </div>
                                        <div class="product_price product_price-list-price _product_price_old " style="display: inline-block;">
                                            <span class="price price-list-price">
                                            <span class="price_value">100,000</span><span class="price_symbol">đ</span>
                                            </span>
                                        </div>
                                        <div class="product_views">
                                            <i class="fa fa-user-o"></i> 161
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div><!-- /.sidebar -->
            @endif
        </div><!-- /.content-sidebar -->
    </div>
</main><!-- /.main -->
@stop
@section('js')

<!-- Js zoom -->
<script src="{{ URL::asset('public/assets/lib/jquery.zoom.min.js') }}"></script>
<!-- Flexslider -->
<script src="{{ URL::asset('public/assets/lib/flexslider/jquery.flexslider-min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: true,
            slideshow: false,
            itemWidth: 50,
            itemMargin: 25,
            nextText: "",
            prevText: "",
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "fade",
            controlNav: false,
            directionNav: false,
            animationLoop: false,
            slideshow: false,
            animationSpeed: 500,
            sync: "#carousel"
        });

        $('.slides-large li').each(function () {
            $(this).zoom();
        });
    });

</script>
@stop