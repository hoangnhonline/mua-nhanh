<div class="col-md-3 category-sidebar" id="category_sidebar">
    
        <div class="product-filters box box-shadow box-no-padding">
            <div class="filter filter-listing">
                <div class="filter_title">
                    <i class="filter_icon fa fa-bars"></i> DANH MỤC
                </div>
                <div class="filter_body">
                    <label class="filter_button">
                        <a href="{!! route('cate-parent', $parentDetail->slug) !!}" title="{!! $parentDetail->name !!}">{!! $parentDetail->name !!} <span>165</span></a>
                        <ul>
                            @foreach($cateArrByLoai[$parentDetail->id] as $obj)
                            <li><a href="{!! route('cate', [$parentDetail->slug, $obj->slug]) !!}" title="{!! $obj->name !!}">{!! $obj->name !!} <span>74</span></a></li>
                            @endforeach
                        </ul>
                    </label>
                </div>
            </div><!-- /.filter -->                        
        </div>
        <div class="product-filters box box-shadow box-no-padding">
            <div class="filter filter-listing">
                <div class="filter_title">
                    <i class="filter_icon fa fa-bars"></i> SẢN PHẨM NỔI BẬT
                </div>
                <div class="filter_body">
                    <div class="block_content clearfix">
                        <div class="products products-list">
                            <?php $i = 0;?>
                            @foreach($hotProductList as $obj)
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
                                            <i class="fa fa-user-o"></i> 161
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div><!-- /.filter -->                        
        </div>
</div><!-- /.col-md-3 -->