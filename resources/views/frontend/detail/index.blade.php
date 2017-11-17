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
                    <div class="block block-share" id="share-buttons" style="margin-bottom:10px">
                        <div class="share-item">
                            <div class="fb-like" data-href="{{ url()->current() }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                        </div>
                        <div class="share-item" style="max-width: 65px;">
                            <div class="g-plus" data-action="share"></div>
                        </div>
                        <div class="share-item">
                            <a class="twitter-share-button"
                          href="https://twitter.com/intent/tweet?text={!! $detail->title !!}">
                        Tweet</a>
                        </div>
                        <div class="share-item">
                            <div class="addthis_inline_share_toolbox"></div>
                        </div>
                    </div><!-- /block-share--> 
                     
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
                                <span class="price_value" itemprop="price"><span class="price_txt">Giá :</span> {!! number_format($detail->price) !!}</span><span class="price_symbol">đ</span>
                            </span>

                            <div class="clearfix"></div>
                            @if($detail->is_fbshare == 1)
                            <span class="price">
                                <span class="price_value" itemprop="price"><span class="price_txt">Giá share FB:</span> {!! number_format($detail->price_share) !!}</span><span class="price_symbol">đ</span>
                            </span>
                                @if(Helper::isShared(Session::get('userId'), $detail->id) == false)
                                <a id="btnShare" href="javascript:;"><img src="{{ URL::asset('public/assets/images/fbshare.png') }}" align="left" width="100"></a>
                                @endif
                            @endif
                        </div>

                        @endif

                    </div>
                </div>
                <div class="product_add-to-cart border-top clearfix">
                    
                        
                        <div class="add-to-cart_actions add-to-cart-buttons">
                            <button data-id="{{ $detail->id }}" class="btn-addcart-product btn btn-primary btn-buy-now-x2">
                               <i class="fa fa-shopping-cart"></i> &nbsp; MUA NGAY
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
                            <div class="fb-comments" data-href="{{ url()->current() }}" data-width="100%" data-numposts="5"></div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($otherList->count() > 0)
            <div class="sidebar" style="margin-top: 20px">
                <div class="block block-normal">
                    <div class="block_header">
                        <h3 class="block_title">Sản phẩm liên quan</h3>
                    </div>
                    <div class="block_content clearfix">
                        <div class="products products-list">
                            <?php $i = 0;?>
                            @foreach($otherList as $obj)
                            <?php $i++; ?>
                            <div class="product-wrapper product-auto-resize product-image-padding">
                                
                                <div class="product">
                                    <div class="product_image">
                                        <a href="{{ route('product', [$obj->slug]) }}" title="{!! $obj->name !!}">
                                            <img class="img-responsive" alt="{!! $obj->name !!}" src="{!! Helper::showImageThumb($obj->image_url) !!}" />
                                        </a>
                                    </div>
                                    <div class="product_header">
                                        <h3 class="product_title">
                                            <a href="{{ route('product', [$obj->slug]) }}" title="{!! $obj->name !!}">{!! $obj->name !!}</a>
                                        </h3>
                                    </div>
                                    <div class="product_info">
                                        <div class="product_price _product_price">
                                            <span class="price">
                                                <span class="price_value" itemprop="price">
                                                    @if($obj->is_sale == 1 && $obj->price_sale > 0)
                                                    {{ number_format($obj->price_sale) }}
                                                    @else
                                                        {{ number_format($obj->price) }}
                                                    @endif
                                                </span><span class="price_symbol">đ</span>
                                                @if( $obj->is_sale == 1 && $obj->sale_percent > 0 )                                                        
                                                <span class="price_discount">-{{ $obj->sale_percent }}%</span>
                                                @endif
                                            </span>
                                        </div>
                                        @if( $obj->is_sale == 1 && $obj->sale_percent > 0 )
                                        <div class="product_price product_price-list-price _product_price_old " style="display: inline-block;">
                                            <span class="price price-list-price">
                                            <span class="price_value">{{ number_format($obj->price) }}</span><span class="price_symbol">đ</span>
                                            </span>
                                        </div>
                                        @endif
                                        <div class="product_views">
                                            <i class="fa fa-user-o"></i> 101
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
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59b215c2a2658a8a"></script> 
<script src="https://apis.google.com/js/platform.js" async defer></script>

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
    @if(!Session::get('userId'))
        $('#btnShare').click(function(){
            alert('Vui lòng Đăng nhập website bằng Facebook trước khi thao tác.');
        });
    @else
        $('#btnShare').click(function(){
            FB.ui(
               {
                 method: 'feed',
                 name: 'Facebook Dialogs',
                 link: '{!! url()->current() !!}',          
               },
               function(response) {            
                 
                   $.ajax({
                    url : "{{ route('share-success') }}",
                    type  : "POST",
                    data : {
                        mod : 'courses',
                        product_id : {{ $detail->id }}  
                    },
                    success : function(data){
                            alert('Cảm ơn bạn đã chia sẻ. Bạn sẽ được mua sản phẩm với giá ưu đãi là : ' + '{{ number_format($detail->price_share) }}' + ' trong HÔM NAY.');
                            window.location.reload();
                        }
                        
                    
                   });
                 
               }
             );
        });
    @endif
</script>
@stop