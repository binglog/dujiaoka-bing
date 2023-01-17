<!DOCTYPE html>
<html lang="{{ str_replace('_','-',strtolower(app()->getLocale())) }}">
<body>
<div class="app">
        <div class="container-fluid mt-3">
            <div class="row ">
                @include('bing.layouts._header')
                @include('bing.layouts._nav_left')
                @yield('content')
                @include('bing.layouts._nav_rigth')
                @include('bing.layouts._footer')

            </div>
        </div>
       
        



    <!-- 移动导航 -->
    <div class="yd_nav d-lg-none">
        <div class="list-container">
        <button class="more-button" aria-label="Menu Button">
            <div class="menu-icon-wrapper">
            <div class="menu-icon-line half first"></div>
            <div class="menu-icon-line"></div>
            <div class="menu-icon-line half last"></div>
            </div>
        </button>
        <ul class="more-button-list">
        <!-- 首页 -->
        @if(\Illuminate\Support\Facades\Request::path() == '/')
        @foreach($data as  $index => $group)
            <li class="more-button-list-item">
                <a href="#group-{{ $group['id'] }}">
                    <span>{{ $group['gp_name'] }}</span>
                </a>
            </li>
        @endforeach

        <!-- 购物 -->
        @elseif(substr(\Illuminate\Support\Facades\Request::path(),0,4)=='buy/')
        <li class="more-button-list-item">
                <a href="/">
                    <span>{{__('dujiaoka.home_page')}}</span>
                </a>
                <!-- 添加购物弹窗 -->

        </li>

        @else
        <li class="more-button-list-item">
                <a href="/">
                    <span>{{__('dujiaoka.home_page')}}</span>
                </a>
                

        </li>
        

        @endif
        <li class="more-button-list-item">
            <button  data-bs-toggle="modal" data-bs-target="#chauxn" class="btn btn-warning">
                查询订单
            </button>
                <!-- 添加购物弹窗 -->
        </li>
        </d>
        </div>
    </div>

    <!-- 移动购物车 -->
    @if(substr(\Illuminate\Support\Facades\Request::path(),0,4)=='buy/')
        <div class="gouwuche d-lg-none" data-bs-toggle="modal" data-bs-target="#gouwuche">
            <svg t="1673406510211" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="7094" width="64" height="64"><path d="M888 789H136c-39.76 0-72-32.24-72-72V307c0-39.76 32.24-72 72-72h752c39.76 0 72 32.24 72 72v410c0 39.76-32.24 72-72 72z" fill="#F7F9FB" p-id="7095"></path><path d="M355.5 537.46c-0.54-0.27-1.07-0.55-1.59-0.84-9.86-5.41-17.72-12.8-22.8-22.95-4.3-8.58-5.61-17.77-5.06-27.22 0.82-14.13 7.14-25.61 17.51-35.01 2.39-2.17 4.96-4.12 7.73-5.81-2.22-3.35-4.62-6.4-7.45-9.09-9.58-9.09-21.23-13.34-34.17-14.44-8.35-0.71-16.38 1.01-24.21 3.74-5.36 1.87-10.66 3.91-16 5.86-4.48 1.64-8.95 1.61-13.42-0.07-4.93-1.85-9.86-3.68-14.79-5.53-9.75-3.66-19.63-4.47-29.79-1.79-13.54 3.57-24.46 10.92-32.71 22.19-6.81 9.32-10.72 19.86-12.6 31.19-0.44 2.64-0.75 5.29-1.12 7.94v15.82c0.44 1.47 0.34 3.01 0.5 4.51 1.59 14.96 5.6 29.26 11.53 43.06 4.83 11.24 11.32 21.49 18.59 31.26 4.54 6.1 9.41 11.9 15.64 16.39 6.19 4.47 12.96 6.25 20.56 4.82 5.01-0.94 9.65-2.85 14.24-4.9 13.02-5.81 26-6.02 39.04-0.09 3.4 1.55 6.85 3.03 10.51 3.89 8.14 1.93 15.94 1.3 23.26-3.1 4.42-2.66 8.13-6.11 11.45-9.98 6.68-7.79 12.19-16.39 17.26-25.27 3.83-6.71 7-13.74 9.39-21.1 0.76-2.34 0.76-2.34-1.5-3.48zM857.47 441.08c-10.55-0.01-21.09 0.01-31.64-0.03-1.11 0-1.57 0.3-1.91 1.39-13.15 42.37-26.35 84.73-39.54 127.08-0.14 0.46-0.13 1.01-0.64 1.31-0.7-0.23-0.61-0.9-0.76-1.38-13.18-42.31-26.34-84.63-39.47-126.96-0.36-1.16-0.89-1.45-2.03-1.45-10.68 0.04-21.37 0.02-32.06 0.03-0.48 0-1.01-0.2-1.46 0.26 0.11 0.35 0.21 0.71 0.34 1.05 18.72 51.65 37.43 103.3 56.19 154.93 0.73 2.01 0.9 3.77 0.17 5.83-1.72 4.81-2.77 9.85-5.04 14.49-4.24 8.68-10.93 13.79-20.65 14.64-4.93 0.43-9.87 0.31-14.88-0.18v26.34c1.8 0.44 3.56 0.4 5.3 0.53 2.48 0.19 4.98 0.14 7.43 0.69h6.38c2.38-0.26 4.76-0.51 7.14-0.79 15.21-1.81 27.14-8.96 35.69-21.75 5.4-8.09 9.41-16.84 12.65-25.95 12.92-36.3 25.75-72.64 38.62-108.96 7.03-19.84 14.05-39.67 21.08-59.51 0.15-0.42 0.18-0.91 0.57-1.22v-0.28c-0.48-0.02-0.98-0.11-1.48-0.11zM271.93 418.02c11.02-2.59 19.68-8.75 26.21-17.84 6.43-8.95 10.51-18.85 10.79-30.05 0.05-1.93-0.07-3.87-0.12-5.81h-1.67c-1.22 0.22-2.46 0.37-3.66 0.66-21.6 5.18-35.69 18.3-41.75 39.76-1.26 4.47-1.62 9.07-0.89 13.79 3.78 0.41 7.45 0.35 11.09-0.51zM515.13 389.85c-11.66-6.31-24.24-8.81-37.38-8.81-26.6-0.02-53.2-0.01-79.8 0-0.49 0-1.01-0.13-1.53 0.18v217.79h33.95v-74.29h1.8c14.76 0 29.51 0.01 44.27 0 10.11-0.01 19.99-1.41 29.5-4.99 14.32-5.39 25.73-14.39 33.79-27.46 6.32-10.24 9.56-21.46 10.36-33.42 0.87-13.07-0.84-25.74-6.17-37.8-6.04-13.67-15.64-24.09-28.79-31.2z m-2.45 79.75c-4.5 13.42-14.07 21.31-27.51 24.88-5.26 1.4-10.64 1.95-16.06 1.96-12.72 0.04-25.44 0.01-38.16 0.01h-1.07v-86.39c0.56-0.27 1.07-0.16 1.57-0.16 12.3-0.01 24.6-0.03 36.91 0 7.67 0.02 15.24 0.8 22.44 3.67 13.3 5.29 20.91 15.23 23.37 29.17 1.61 9.05 1.46 18.07-1.49 26.86zM691.43 470.21c-5.91-14.35-16.9-23.16-31.21-28.15-11.1-3.87-22.6-4.91-34.31-4.26-9.88 0.55-19.45 2.43-28.48 6.5-15.48 6.99-26.18 18.2-30.33 35.03-0.67 2.72-1.12 5.49-1.09 8.39 0.31 0.03 0.53 0.08 0.76 0.08 9.76 0 19.52-0.01 29.28 0.03 0.93 0 1.13-0.42 1.32-1.18 2.49-9.93 8.79-16.38 18.35-19.63 8.62-2.92 17.44-3.19 26.24-0.93 9.83 2.52 16.6 8.45 19.24 18.51 1.75 6.68 0.8 13.51 1.09 20.45-6.97 0.38-13.71 0.72-20.44 1.12-10.29 0.62-20.61 0.8-30.87 1.95-9.61 1.08-18.91 3.35-27.6 7.74-7.75 3.92-14.25 9.25-18.72 16.82-5.2 8.81-6.5 18.37-5.22 28.36 1.97 15.34 9.71 26.95 23.31 34.21 15.64 8.35 32.18 9.57 49.04 4.24 13.57-4.28 24.2-12.48 31.24-25.04 0.17-0.3 0.24-0.73 0.94-0.7v25.89h31.21v-1.42c0-35.8 0.02-71.6-0.02-107.4-0.02-7.08-1.01-14.01-3.73-20.61z m-29.96 77.34c-2.26 10.14-8.12 17.77-17.01 22.91-10.62 6.14-22.06 7.76-33.98 4.78-7.1-1.78-12.93-5.6-16.04-12.52-4.22-9.39-2.29-21.57 9.06-27.8 5.33-2.93 11.09-4.38 17.07-4.8 13.47-0.94 26.95-1.69 40.42-2.51 0.36-0.02 0.72 0 1.3 0-0.33 6.76 0.63 13.4-0.82 19.94z" p-id="7096"></path></svg>
            
        </div>
        





        <!-- 购物车 -->
        <div class="modal fade" id="gouwuche" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable d-flex justify-content-center col-12 p-4">
        <div class="modal-content">
            <div class="spjs">
            <div class="card text-bg-dark">
                                <div class="card-img">
                                    <img src="/assets/bing/img/loading.gif" data-src="{{ picture_ulr($picture) }}" alt="">
                                </div>
                                <div class="card-info">
                                    {{-- 商品名称 --}}
                                    <p class="text-title">{{$gd_name}} </p>
                                    {{-- 商品提示 --}}
                                    <p>{!! $buy_prompt !!}</p>
                                    {{-- 限购 --}}
                                    @if($buy_limit_num > 0)
                                    <span class="badge text-bg-info">{{__('bing.buy_purchase_restrictions')}}:{{ $buy_limit_num }}</span>
                                    @endif
                                </div>

                                <form  action="{{ url('create-order') }}" method="post" autocomplete="off">
                                {{ csrf_field() }}
                                    {{-- 填写 --}}
                                    <div class="tk mb-3">
                                        {{-- 邮箱 --}}
                                        <div class="form__group field">
                                            <input type="hidden" name="gid" value="{{ $id }}">
                                            <input required="" placeholder="{{__('bing.buy_email')}}" name="email" id=“buy-email” class="form__field" type="email" autocomplete="new-password">
                                            <label class="form__label">{{__('bing.buy_email')}}*</label>
                                        </div>
                                        {{-- 查询密码 --}}
                                        @if(dujiaoka_config_get('is_open_search_pwd') == \App\Models\Goods::STATUS_OPEN)
                                            <div class="form__group field">
                                                <input required="" placeholder="{{__('bing.buy_search_password')}}" class="form__field" id="buy-search_pwd" type="input" name="search_pwd">
                                                <label class="form__label">{{__('bing.buy_search_password')}}*</label>
                                            </div>
                                        @endif
                                        {{-- 优惠码 --}}
                                        @if(isset($open_coupon))
                                            <div class="form__group field">
                                                <input placeholder="{{__('bing.buy_promo_code')}}*" class="form__field" type="text" name="coupon_code">
                                                <label class="form__label">{{__('bing.buy_promo_code')}}</label>
                                            </div>
                                        @endif
                                        {{-- 其他输入 --}}
                                        @if($type == \App\Models\Goods::MANUAL_PROCESSING && is_array($other_ipu))
                                            @foreach($other_ipu as $ipu)
                                                <div class="form__group field">
                                                    <input placeholder="{{ $ipu['desc'] }}" class="form__field" type="text" name="{{ $ipu['field'] }}" @if($ipu['rule'] !== false) required @endif >
                                                    <label class="form__label">{{ $ipu['desc'] }} @if($ipu['rule'] !== false) * @endif</label>
                                                </div>
                                            @endforeach
                                        @endif
                                        
                                        {{-- 极验证 --}}

                                        {{-- 自带验证码 --}}
                                        @if(dujiaoka_config_get('is_open_img_code') == \App\Models\Goods::STATUS_OPEN)
                                            <div class="form__group field">
                                                <input class="form__field" type="text" name="img_verify_code" id="verifyCode" required placeholder="{{ __('dujiaoka.img_verify_code') }}*" >
                                                <label for="verifyCode" class="form__label">{{ __('dujiaoka.img_verify_code') }}*:</label>
                                                <div class="input-group">
                                                    <img style="margin-left: 10px;" src="{{ captcha_src('buy') . time() }}"
                                                            height="33px" alt="{{ __('dujiaoka.img_verify_code') }}"  onclick="refresh()" id="imageCode">
                                                    <script>
                                                        function refresh(){
                                                            $('#imageCode').attr('src','{{ captcha_src('buy') }}'+Math.random());
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        @endif


                                        {{-- 支付方式 --}}
                                    
                                        <div class="btn-group zffs mt-3" role="group" aria-label="Basic checkbox toggle button group">
                                            <input type="hidden" name="payway" value="{{ $payways[0]['id'] ?? 0 }}">
                                            <div class="pay-grid">
                                            @foreach($payways as $key => $way)
                                                <div class="btn pay-type text-bg-dark @if($key == 0) active @endif"
                                                            data-type="{{ $way['pay_check'] }}" data-id="{{ $way['id'] }}" data-name="{{ $way['pay_name'] }}">
                                                </div>
                                            @endforeach
                                            </div>

                                        </div>
                                    
                                        {{-- 数量 --}}
                                        <div class="sl mt-3">
                                            <input type="number" name="by_amount" value="1" id="input_number">
                                        </div>

                                    </div>
                                    {{-- 支付 --}}
                                    <div class="card-footer">
                                        <span class="text-title">{{__('bing.global_currency')}}<input class="zfje" disabled="disabled" value="{{ $actual_price }}"></input></span>
                                        <div class="card-button-1">
                                            <button  type="submit" @if($in_stock==0) disabled @endif> {{__('bing.buy_pay')}}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
            </div>
        </div>
        </div>
        </div>





    @endif


    <!-- 查询model -->
    <div class="modal fade" id="chauxn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">订单查询</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
            <div class="modal-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{__('bing.searchOrder_order_search_by_number')}}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">{{__('bing.searchOrder_order_search_by_email')}}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">{{__('bing.searchOrder_order_search_by_ie')}}</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <!-- 订单标号 -->
                        <form action="{{ url('search-order-by-sn') }}" method="post">
                        	{{ csrf_field() }}
                            <div class="input1">
                                <input type="text" class="form-control" id="orderSN"  name="order_sn" required placeholder="{{ __('bing.search_ddh') }}">
                            </div>
                            <div class="button1 mt-2">
                                <button type="submit"  class="btn btn-warning">{{ __('bing.search_now') }}</button>
                            </div>
                        </form>  
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <!-- 邮箱 -->
                        <form  action="{{ url('search-order-by-email') }}" method="post">
                        	{{ csrf_field() }}
                            <div class="input2">
                                <input  class="form-control" type="email"  id="email" name="email" required placeholder="{{ __('bing.search_email') }}">
                            </div>
                            <!-- 密码查询 -->
                            @if(dujiaoka_config_get('is_open_search_pwd', \App\Models\BaseModel::STATUS_CLOSE) == \App\Models\BaseModel::STATUS_OPEN)
                            <div class="form-group mt-1">
                                <input type="password" class="form-control"  id="searchPwd" name="search_pwd" required placeholder="{{ __('bing.search_password') }}">
                            </div>
                            @endif
                            <div class="button2 mt-2">
                                <button type="submit"  class="btn btn-warning">{{ __('bing.search_now') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                        <!-- 缓存 -->
                        <form  action="{{ url('search-order-by-browser') }}" method="post">
                        	{{ csrf_field() }}
                            <div class="button3 mt-2">
                                <button type="submit"  class="btn btn-warning">{{ __('bing.search_now') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <p>注意：最多只能查询近5笔订单。</p>
            </div>
            </div>
        </div>
    </div>



</div>

<!-- 移动导航 -->
<script>
    document.querySelector('.more-button').addEventListener('click', function () {
        document.querySelector('.list-container').classList.toggle('active');
    });
    
</script>
</body>
@include('bing.layouts._script')
@section('js')

@show
</html>

