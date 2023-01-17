@extends('bing.layouts.seo')
@section('content')
<!-- main start -->

<!-- 购物界面 -->
<div class="col-lg-7 text-white spxq mt-3">

    <div class="container col-11">
        <!-- 商品 -->
        <div class="card-commodity">
            <div class="row p-5">
                <!-- 商品图 -->
                <div class="col-lg-4">
                    <img class="hset" src="/assets/bing/img/loading.gif" data-src="{{ picture_ulr($picture) }}">
                </div>
                
                <div class="col-lg-8">
                  <div>
                        <!-- 人工 自动 -->
                    {{-- 判断自动还是人工--}}
                    @if($type == \App\Models\Goods::AUTOMATIC_DELIVERY)
                    <p class="sp-label text-bg-success">{{__('bing.buy_automatic_delivery')}}</p>
                    @else
                    <p class="sp-label text-bg-danger">{{__('bing.buy_charge')}}</p>
                    @endif
                    <!-- 标题 -->
                    <h1 class="title">{{ $gd_name }}</h1>
                    <!-- 商品折扣 -->
                    @if(!empty($wholesale_price_cnf) && is_array($wholesale_price_cnf))
                    <div class="old-price mb-3">
                      @foreach($wholesale_price_cnf as $ws)
                        <span class="p-1 data_zk" data-number="{{$ws['number']}}" data-price="{{ $ws['price'] }}">{{$ws['number']}}{{__('bing.buy_the_above')}}:{{ $ws['price']  }}{{__('bing.global_currency')}}</span>
                      @endforeach
                    </div>
                    @endif
                    <!-- 商品价格 -->
                    <p class="new-price" data-price="{{ $actual_price }}">{{__('bing.global_currency')}}{{ $actual_price }}</p>
                    <!-- 商品提示 -->
                    @if($buy_prompt!='')
                    <div class="offer-info">{!! $buy_prompt !!}</div>
                    @endif

                    <div>
                      {{-- 库存颜色 --}}
                      @if($in_stock > 0)
                      <div class="green-dot"></div>
                      @else
                      <div class="green-dot1"></div>                  
                      @endif
                      <!-- 库存 -->
                      <p class="stock-pcs">{{__('bing.buy_in_stock')}}:{{ $in_stock }}</p>

                    </div>
                    </div>
                </div>
            </div>





             <!-- 商品描述 -->
             <div class="spms p-3">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                          {{__('bing.buy_product_desciption')}}
                                        </button>
                                      </h2>
                                      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                        @if($description=='')
                                        <p>{{__('bing.buy_no_product_desciption')}}</p>
                                        @else
                                        {!! $description !!}
                                        @endif
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
        </div><!-- ./ card -->
    </div>



</div>

<!-- main end -->

@stop
@section('js')


@stop