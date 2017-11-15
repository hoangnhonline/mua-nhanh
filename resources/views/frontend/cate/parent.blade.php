@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="container">
    <div class="block-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">Trang chủ</a></li>
            <li class="active">{!! $parentDetail->name !!}</li>
        </ol>
    </div>
</div><!-- /.breadcrumb -->

<main class="main-content clearfix">
    <div class="container">
        <div class="row" id="block-main-container">
            @include('frontend.cate.sidebar')
            <div class="col-md-9 category-content">
                <!--<div class="cate-on-slide">
                    <ul class="owl-carousel nav-center" data-items="1" data-dots="false" data-autoplay="true" data-loop="true" data-nav="true">
                        <li><a href="#" title=""><img src="images/cate-slide/59c48b6c59b53-hnangi-cate.jpg" alt=""></a></li>
                        <li><a href="#" title=""><img src="images/cate-slide/59dc842e9722d-880x330.jpg" alt=""></a></li>
                        <li><a href="#" title=""><img src="images/cate-slide/59ddc46c468b5-880x330-10.jpg" alt=""></a></li>
                        <li><a href="#" title=""><img src="images/cate-slide/59f9466a96444-cotedazur-880x330.jpg" alt=""></a></li>
                        <li><a href="#" title=""><img src="images/cate-slide/59fae88c2c29f-880x330-17.jpg" alt=""></a></li>
                    </ul>
                </div><!-- /.cate-on-slide -->
                <div class="block branding category-header">
                    <div class="block_header has-branding">
                        <h1 class="block_title category-header-heading" style="text-transform: uppercase;">
                            <span class="block_branding" style="background-color: {{ $parentDetail->color_code }}"><img src="{{ Helper::showImage($parentDetail->icon_url) }}" style="display: inline-block; vertical-align: middle;margin-top: -4px;" alt="{!! $parentDetail->name !!}"></span>{!! $parentDetail->name !!}</h1>
                    </div>
                </div><!-- /.header -->
                <!--<div class="filter-inline current-filter">
                    <div class="filter_title">Tìm kiếm được 174 deals theo chọn lọc:</div>
                    <div class="filter_body">
                        <div id="current-filter-tag">
                            <label class="filter_button active">
                                Bình Chánh <i class="fa fa-times"></i>
                            </label>
                        </div>
                    </div>
                </div><!-- /.current-filter -->
                <div id="category_content">
                    <div class="row products products-cate">
                        @if($cateList)
                            @foreach($cateList as $cate)
                                @if(isset($productArr[$cate->id]) && count($productArr[$cate->id]) > 0 )
                                    @foreach($productArr[$cate->id] as $obj)
                                    <div class="col-md-4 product-item">
                                        <div class="product product-kind-1">
                                            <div class="product_image">
                                                <a href="{{ route('product', [$obj->slug]) }}" title="{!! $obj->name !!}">
                                                    <img class="img-responsive" alt="{!! $obj->name !!}" src="{{ Helper::showImage($obj->image_url) }}" />
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
                                                            @endif  </span><span class="price_symbol">đ</span>
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
                                                    <i class="fa fa-user-o"></i> 161
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.product-item -->
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                        
                    </div>
                </div><!-- /.category_content -->
                <!--<div class="block-pagination pull-right">
                    <span class="pagination_text mmm">Trang 1/2</span>
                    <ul class="pagination">
                        <li class="page-number active"><a href="#" title="">1</a></li>
                        <li class="page-number"><a href="#" title="">2</a></li>
                        <li class="page-next"><a href="#" title=""><i class="fa fa-chevron-right"></i></a></li>
                        <li class="page-last"><a href="#" title="">Cuối</a></li>
                    </ul>
                </div><!-- /.block-pagination -->
            </div><!-- /.col-md-9 -->
        </div>
    </div>
</main><!-- /.main -->
@stop