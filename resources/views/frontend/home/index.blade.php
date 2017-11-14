@extends('frontend.layout')
@include('frontend.partials.meta')  
@section('content')
<div id="home-slider">
    <div class="container">
      <div class="header-top-right-wapper">
        <div class="homeslider">
          <ul id="contenhomeslider">
            <li><img alt="Funky roots" src="{{ URL::asset('public/assets/images/slider/slider1.jpg') }}" title="Funky roots" /></li>            
          </ul>
        </div>
      </div>
    </div>
  </div><!-- /#home-slider -->
  <?php 
  $j = 0;
  ?>
@foreach($cateParentHot as $parent)
<?php $j++; ?>
  <div class="box-products cosmetic">
    <div class="container">
      <div class="box-product-head">
        <a href="{{ route('cate-parent', $parent->slug) }}"  title="{!! $parent->name !!}"><span class="box-title"><img src="{{ URL::asset('public/assets/images/food.png') }}" style="display: inline-block; vertical-align: middle;" alt=""> {!! $parent->name !!}</span></a>
        <ul class="box-tabs nav-tab">
            <?php 
            $i = 0;
            ?>
            @foreach($cateArrByLoai[$parent->id] as $cate)
            <?php $i++; ?>
            <li><a href="{!! route('cate', [$parent->slug, $cate->slug]) !!}" title="{!! $cate->name !!}">{!! $cate->name !!}</a></li>
            @endforeach
            <li><a href="{{ route('cate-parent', $parent->slug) }}">Xem tất cả <i class="hd hd-long-arrow-right"></i></a></li>
        </ul>
      </div>
      <div class="box-product-content">
        <div class="box-product-adv">
          <ul class="nav-center" data-items="1" data-dots="false" data-autoplay="true" data-loop="false" data-nav="true">
              <li><a href="#"><img src="{{ Helper::showImage($parent->image_url) }}" alt="adv"></a></li>
          </ul>
        </div>
        <div class="box-product-list">
          <div class="tab-container">
            <div class="product-wrapper">              
              <div class="tab-panel active">
                <ul class="products owl-carousel nav-center" data-dots="false" data-loop="false" data-nav = "true" data-margin = "10" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                    @foreach($productArr[$parent->id] as $obj)                     
                    <li>
                      <div class="product product-kind-1">
                        <div class="product_image">
                          <a href="{{ route('product', [$obj->slug]) }}" title="{!! $obj->name !!}">
                            <img class="img-responsive" alt="product" src="{{ Helper::showImageThumb($obj->image_url) }}" />
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
                            <div class="clearfix"></div>
                            @if( $obj->is_sale == 1 && $obj->sale_percent > 0 )
                            <div class="product_price product_price-list-price _product_price_old " style="display: inline-block;">
                                <span class="price price-list-price">
                                <span class="price_value">{{ number_format($obj->price) }}</span><span class="price_symbol">đ</span>
                                </span>
                            </div>
                            @endif
                            <div class="product_views">
                              <i class="hd hd-user"></i> 161
                            </div>
                        </div>
                      </div>
                    </li> 
                    @endforeach
                </ul>
              </div>
              
            </div><!-- /.product-wrapper -->
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.cosmetic -->
@endforeach

  <div class="row-blog">
    <div class="container">
      <div class="blog-list">
        <h2 class="page-heading">
                  <span class="page-heading-title">Tin Tức</span>
              </h2>
              <div class="blog-list-wapper">
                <ul class="owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                      <li>
                          <div class="post-thumb image-hover2">
                              <a href="#"><img src="{{ URL::asset('public/assets/images/news/blog1.jpg') }}" alt="Blog"></a>
                          </div>
                          <div class="post-desc">
                              <h5 class="post-title">
                                  <a href="#">Đầm Vintage Mùa Thu Cirino Đầm Vintage Mùa Thu Cirino Đầm Vintage Mùa Thu Cirino Đầm Vintage Mùa Thu Cirino</a>
                              </h5>
                              <div class="post-meta">
                                  <span class="date">February 27, 2015</span>
                                  <span class="comment">27 comment</span>
                              </div>
                              <div class="readmore">
                                  <a href="#">Readmore</a>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="post-thumb image-hover2">
                              <a href="#"><img src="{{ URL::asset('public/assets/images/news//blog2.jpg') }}" alt="Blog"></a>
                          </div>
                          <div class="post-desc">
                              <h5 class="post-title">
                                  <a href="#">Đầm Vintage Mùa Thu Cirino</a>
                              </h5>
                              <div class="post-meta">
                                  <span class="date">February 27, 2015</span>
                                  <span class="comment">27 comment</span>
                              </div>
                              <div class="readmore">
                                  <a href="#">Readmore</a>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="post-thumb image-hover2">
                              <a href="#"><img src="{{ URL::asset('public/assets/images/news//blog3.jpg') }}" alt="Blog"></a>
                          </div>
                          <div class="post-desc">
                              <h5 class="post-title">
                                  <a href="#">Big sales this summer</a>
                              </h5>
                              <div class="post-meta">
                                  <span class="date">February 27, 2015</span>
                                  <span class="comment">27 comment</span>
                              </div>
                              <div class="readmore">
                                  <a href="#">Readmore</a>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="post-thumb image-hover2">
                              <a href="#"><img src="{{ URL::asset('public/assets/images/news//blog4.jpg') }}" alt="Blog"></a>
                          </div>
                          <div class="post-desc">
                              <h5 class="post-title">
                                  <a href="#">How to shop with us</a>
                              </h5>
                              <div class="post-meta">
                                  <span class="date">February 27, 2015</span>
                                  <span class="comment">27 comment</span>
                              </div>
                              <div class="readmore">
                                  <a href="#">Readmore</a>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
      </div>
    </div>
  </div><!-- /.row-blog -->
@stop