@extends('bing.layouts.default')
@section('content')

    <!-- main start -->

    <div class=" col-lg-7 text-white">

                    <!-- 移动 logo-->
                    <div class="yd_logo mb-3 d-lg-none">
                        <img src="{{ picture_ulr(dujiaoka_config_get('img_logo')) }}" alt="" style="height: 42px;"><span class="mr-4">{{ dujiaoka_config_get('text_logo') }}</span>
                    </div>

                  

                    


                    <!-- search -->
                    <div class="search">
                        <div class="input-group mb-3">
                            <input id="search" type="text" class="form-control" placeholder="{{__('bing.home_search_placeholder')}}" aria-label="Recipient's username" aria-describedby="button-addon2">
                          </div>
                    </div>

                    <!-- banner -->
                    @if(config('bing.banner.img')!='')
                    <div class="row banner p-2">
                        <div class="card text-bg-dark p-0 m-0">
                            <a href="{{config('bing.banner.a')}}">
                            <img src="{{config('bing.banner.img')}}" class="card-img" alt="...">
                            
                          </div>
                          </a>
                    </div>
                    @endif



                    <!-- 移动modal 公告 站长信息 -->
                    <div class="yd_nav_page mt-3 d-lg-none">
                        <div class="card col-11 text-center text-bg-dark">
                            <div class="card-header">
                            <svg t="1673422176849" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2863" width="64" height="64"><path d="M0 512c0 282.4 229.6 512 512 512s512-229.6 512-512S794.4 0 512 0 0 229.6 0 512z" fill="#FFFFFF" p-id="2864"></path><path d="M798.4 197.6v22.4h-50.4v577.6c0 15.2-12.8 28-28 28H260.8v-600c0-15.2 12.8-28 28-28h509.6z" fill="#FFB900" p-id="2865"></path><path d="M719.2 840h-472V225.6c0-23.2 19.2-41.6 41.6-41.6h509.6c7.2 0 13.6 6.4 13.6 13.6v36.8h-50.4v563.2c0 23.2-19.2 42.4-42.4 42.4z m-444.8-28H720c8 0 14.4-6.4 14.4-14.4V212H289.6c-8 0-14.4 6.4-14.4 14.4v585.6h-0.8z" fill="#333333" p-id="2866"></path><path d="M651.2 336h-312c-11.2 0-20 8.8-20 20S328 376 339.2 376h312c11.2 0 20-8.8 20-20S662.4 336 651.2 336zM651.2 416h-312c-11.2 0-20 8.8-20 20S328 456 339.2 456h312c11.2 0 20-8.8 20-20S662.4 416 651.2 416zM507.2 512h-168c-11.2 0-20 8.8-20 20S328 552 339.2 552h168c11.2 0 20-8.8 20-20S518.4 512 507.2 512zM746.4 282.4v-37.6c0-26.4 21.6-48 48-48h5.6c23.2 0 42.4 19.2 42.4 42.4s-19.2 43.2-43.2 43.2h-52.8z" fill="#FF7400" p-id="2867"></path><path d="M800 295.2h-65.6v-50.4c0-33.6 27.2-60.8 60.8-60.8h4.8c30.4 0 55.2 24.8 55.2 55.2s-24.8 56-55.2 56z m-40.8-25.6h40.8c16.8 0 30.4-13.6 30.4-30.4s-13.6-30.4-30.4-30.4h-4.8c-19.2 0-35.2 16-35.2 35.2l-0.8 25.6z" fill="#333333" p-id="2868"></path><path d="M714.4 827.2H251.2c-25.6 0-48-16.8-56-41.6l-1.6-4.8c-0.8-3.2-1.6-5.6-1.6-8.8 0-16.8 13.6-30.4 30.4-30.4h438.4c16.8 0 31.2 11.2 36 27.2l17.6 58.4z" fill="#FF7400" p-id="2869"></path><path d="M727.2 826.4c2.4 7.2-3.2 13.6-10.4 13.6H251.2c-31.2 0-59.2-20.8-68-50.4l-1.6-4.8c-0.8-4-1.6-8-1.6-12 0-24 19.2-43.2 43.2-43.2h437.6c22.4 0 42.4 15.2 48 36l18.4 60.8z m-503.2-72c-9.6 0-18.4 8-18.4 18.4 0 1.6 0 3.2 0.8 4.8l1.6 4.8c5.6 19.2 23.2 32.8 43.2 32.8h446.4l-12.8-42.4c-3.2-10.4-12.8-18.4-24-18.4H224z" fill="#333333" p-id="2870"></path></svg>：{{ __('dujiaoka.site_announcement') }}
                            </div>
                            <div class="card-body">
                              <p class="card-text">{!! dujiaoka_config_get('notice') !!}</p>
                              @if(config('bing.zz')!=0)
                              <div class='mt-2' data-bs-toggle="modal" data-bs-target="#yd_zz" style="display: initial;">
                                <span>站长信息：</span><svg t="1673424855452" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="11116" width="32" height="32"><path d="M396.8 153.6v38.4a115.2 115.2 0 0 0 230.4 0v-38.4h320a76.8 76.8 0 0 1 76.8 76.8v640a76.8 76.8 0 0 1-76.8 76.8H76.8a76.8 76.8 0 0 1-76.8-76.8V230.4a76.8 76.8 0 0 1 76.8-76.8h320z" fill="#1989FA" fill-opacity=".3" p-id="11117" data-spm-anchor-id="a313x.7781069.0.i14" class="selected"></path><path d="M307.2 512m-102.4 0a102.4 102.4 0 1 0 204.8 0 102.4 102.4 0 1 0-204.8 0Z" fill="#1989FA" p-id="11118"></path><path d="M166.4 678.4m51.2 0l192 0q51.2 0 51.2 51.2l0 0q0 51.2-51.2 51.2l-192 0q-51.2 0-51.2-51.2l0 0q0-51.2 51.2-51.2Z" fill="#1989FA" p-id="11119"></path><path d="M563.2 422.4m25.6 0l230.4 0q25.6 0 25.6 25.6l0 0q0 25.6-25.6 25.6l-230.4 0q-25.6 0-25.6-25.6l0 0q0-25.6 25.6-25.6Z" fill="#1989FA" p-id="11120"></path><path d="M563.2 563.2m25.6 0l230.4 0q25.6 0 25.6 25.6l0 0q0 25.6-25.6 25.6l-230.4 0q-25.6 0-25.6-25.6l0 0q0-25.6 25.6-25.6Z" fill="#1989FA" p-id="11121"></path><path d="M563.2 704m25.6 0l128 0q25.6 0 25.6 25.6l0 0q0 25.6-25.6 25.6l-128 0q-25.6 0-25.6-25.6l0 0q0-25.6 25.6-25.6Z" fill="#1989FA" p-id="11122"></path><path d="M460.8 64m51.2 0l0 0q51.2 0 51.2 51.2l0 76.8q0 51.2-51.2 51.2l0 0q-51.2 0-51.2-51.2l0-76.8q0-51.2 51.2-51.2Z" fill="#1989FA" p-id="11123"></path></svg>
                              </div>
                              @endif
                            </div>
                                
                        </div>
                    </div

                    <!-- 站长信息modal -->
                    
                    <div class="modal fade" id="yd_zz" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable d-flex justify-content-center col-12 p-4">
                            <div class="modal-content">
                            <div class="card text-bg-dark p-3 text-center rounded-3"> 
                        @if(config('bing.zz_img')!='')
                            <img img src="/assets/bing/img/loading.gif" data-src="{{ config('bing.zz_img') }}" class="card-img-top rounded-circle" alt="..." style="width: 75px;margin: auto;">
                        @endif

                            <div class="card-body">
                              @if( config('bing.zz_name')=='' )
                              <h5 class="card-title" id="zz_name">{{ dujiaoka_config_get('text_logo') }}</h5>
                              @else
                              <h5 class="card-title" id="zz_name">{{ config('bing.zz_name') }}</h5>
                              @endif
                              
                            @foreach(config('bing.zz_xx') as $value)
                            <p class="card-text">
                              {{ $value }}
                            </p>
                            @endforeach
                              
                              <div class="row lianxi">
                                {{-- 联系 --}}
                                @foreach( config('bing.lx') as $key => $value)
                                @if($value!='')

                                <a href="{{ preg_split('/[\s,]+/',$value)[0] }}" class="button col-6 mt-1">
                                    <div class="icon">
                                        <!-- <a href="{{ preg_split('/[\s,]+/',$value)[0] }}"> -->
                                        @if(strpos($value,'t.me') != false)
                                        {{-- TG --}}
                                        <svg viewBox="0 0 16 16" class="bi bi-telegram" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"></path>
                                        </svg>
                                        @else
                                        {{-- QQ --}}
                                        <svg t="1672845580369" class="bi bi-telegram" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="29500" width="16" height="16">
                                            <path d="M511.09761 957.257c-80.159 0-153.737-25.019-201.11-62.386-24.057 6.702-54.831 17.489-74.252 30.864-16.617 11.439-14.546 23.106-11.55 27.816 13.15 20.689 225.583 13.211 286.912 6.767v-3.061z" fill="#FAAD08" p-id="29501"></path><path d="M496.65061 957.257c80.157 0 153.737-25.019 201.11-62.386 24.057 6.702 54.83 17.489 74.253 30.864 16.616 11.439 14.543 23.106 11.55 27.816-13.15 20.689-225.584 13.211-286.914 6.767v-3.061z" fill="#FAAD08" p-id="29502"></path><path d="M497.12861 474.524c131.934-0.876 237.669-25.783 273.497-35.34 8.541-2.28 13.11-6.364 13.11-6.364 0.03-1.172 0.542-20.952 0.542-31.155C784.27761 229.833 701.12561 57.173 496.64061 57.162 292.15661 57.173 209.00061 229.832 209.00061 401.665c0 10.203 0.516 29.983 0.547 31.155 0 0 3.717 3.821 10.529 5.67 33.078 8.98 140.803 35.139 276.08 36.034h0.972z" fill="#000000" p-id="29503"></path><path d="M860.28261 619.782c-8.12-26.086-19.204-56.506-30.427-85.72 0 0-6.456-0.795-9.718 0.148-100.71 29.205-222.773 47.818-315.792 46.695h-0.962C410.88561 582.017 289.65061 563.617 189.27961 534.698 185.44461 533.595 177.87261 534.063 177.87261 534.063 166.64961 563.276 155.56661 593.696 147.44761 619.782 108.72961 744.168 121.27261 795.644 130.82461 796.798c20.496 2.474 79.78-93.637 79.78-93.637 0 97.66 88.324 247.617 290.576 248.996a718.01 718.01 0 0 1 5.367 0C708.80161 950.778 797.12261 800.822 797.12261 703.162c0 0 59.284 96.111 79.783 93.637 9.55-1.154 22.093-52.63-16.623-177.017" fill="#000000" p-id="29504"></path><path d="M434.38261 316.917c-27.9 1.24-51.745-30.106-53.24-69.956-1.518-39.877 19.858-73.207 47.764-74.454 27.875-1.224 51.703 30.109 53.218 69.974 1.527 39.877-19.853 73.2-47.742 74.436m206.67-69.956c-1.494 39.85-25.34 71.194-53.24 69.956-27.888-1.238-49.269-34.559-47.742-74.435 1.513-39.868 25.341-71.201 53.216-69.974 27.909 1.247 49.285 34.576 47.767 74.453" fill="#FFFFFF" p-id="29505"></path><path d="M683.94261 368.627c-7.323-17.609-81.062-37.227-172.353-37.227h-0.98c-91.29 0-165.031 19.618-172.352 37.227a6.244 6.244 0 0 0-0.535 2.505c0 1.269 0.393 2.414 1.006 3.386 6.168 9.765 88.054 58.018 171.882 58.018h0.98c83.827 0 165.71-48.25 171.881-58.016a6.352 6.352 0 0 0 1.002-3.395c0-0.897-0.2-1.736-0.531-2.498" fill="#FAAD08" p-id="29506"></path><path d="M467.63161 256.377c1.26 15.886-7.377 30-19.266 31.542-11.907 1.544-22.569-10.083-23.836-25.978-1.243-15.895 7.381-30.008 19.25-31.538 11.927-1.549 22.607 10.088 23.852 25.974m73.097 7.935c2.533-4.118 19.827-25.77 55.62-17.886 9.401 2.07 13.75 5.116 14.668 6.316 1.355 1.77 1.726 4.29 0.352 7.684-2.722 6.725-8.338 6.542-11.454 5.226-2.01-0.85-26.94-15.889-49.905 6.553-1.579 1.545-4.405 2.074-7.085 0.242-2.678-1.834-3.786-5.553-2.196-8.135" fill="#000000" p-id="29507"></path><path d="M504.33261 584.495h-0.967c-63.568 0.752-140.646-7.504-215.286-21.92-6.391 36.262-10.25 81.838-6.936 136.196 8.37 137.384 91.62 223.736 220.118 224.996H506.48461c128.498-1.26 211.748-87.612 220.12-224.996 3.314-54.362-0.547-99.938-6.94-136.203-74.654 14.423-151.745 22.684-215.332 21.927" fill="#FFFFFF" p-id="29508"></path><path d="M323.27461 577.016v137.468s64.957 12.705 130.031 3.91V591.59c-41.225-2.262-85.688-7.304-130.031-14.574" fill="#EB1C26" p-id="29509"></path><path d="M788.09761 432.536s-121.98 40.387-283.743 41.539h-0.962c-161.497-1.147-283.328-41.401-283.744-41.539l-40.854 106.952c102.186 32.31 228.837 53.135 324.598 51.926l0.96-0.002c95.768 1.216 222.4-19.61 324.6-51.924l-40.855-106.952z" fill="#EB1C26" p-id="29510"></path>
                                        </svg>
                                        @endif
                                        <!-- </a> -->
                                    </div>
                                    <p>{{ preg_split("/[\s,]+/",$value)[1] }}</p>
                                </a>

                                @endif
                                @endforeach
                                

                              </div>
                            </div>
                          </div>
                            </div>
                        </div>
                    </div>


                    <!-- #锚点 -->
                    <div class="maodian mt-3">
                        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                            
                        @foreach($data as  $index => $group)
                       
                            <h4 class="badge text-bg-light mt-3 mb-4" style="font-size:16px">{{ $group['gp_name'] }}</h4>

                            <h4 id="group-{{ $group['id'] }}" class="grop-sp">
                                @foreach($group['goods'] as $goods)

                                <div class="sp headline">

                                    <div class="card-1 rounded-3 text-bg-dark">
                                        <div class="card-img"><img src="/assets/bing/img/loading.gif" alt="{{ $goods['gd_name'] }}" data-src="{{ picture_ulr($goods['picture']) }}"></div>
                                        <div class="card-info">
                                            <p class="text-title">{{ $goods['gd_name'] }} </p>
                                            <div>
                                                <!-- 判断人工自动发货 -->
                                                @if($goods['type'] == \App\Models\Goods::AUTOMATIC_DELIVERY)
                                                <span class="badge text-bg-success">{{ __('goods.fields.automatic_delivery') }}</span>
                                                @else
                                                <span class="badge text-bg-danger">{{ __('goods.fields.manual_processing') }}</span>
                                                @endif
                                                <!-- 已售多少 -->
                                                <span class="text-body badge text-bg-warning">{{__('bing.home_sales_volume')}}:{{ $goods['sales_volume']}}</span>
                                                
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <!-- 价格 -->
                                            <span class="text-title">{{__('bing.global_currency')}}{{ $goods['actual_price'] }}</span>
                                            <div class="card-button position-relative">
                                                <a href="{{ url("/buy/{$goods['id']}") }}">
                                                <svg t="1673159357926" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="12114" width="16" height="16"><path d="M384 444.8c-16 0-28.8 12.8-28.8 28.8s12.8 28.8 28.8 28.8 28.8-12.8 28.8-28.8-12.8-28.8-28.8-28.8zM604.8 297.6c-16-12.8-28.8-35.2-51.2-41.6-6.4-3.2-19.2-6.4-35.2-6.4-19.2 0-38.4 3.2-44.8 6.4-22.4 6.4-32 28.8-51.2 38.4-3.2 12.8-6.4 32-12.8 44.8h208c-3.2-12.8-6.4-28.8-12.8-41.6zM640 444.8c-16 0-28.8 12.8-28.8 28.8s12.8 28.8 28.8 28.8 28.8-12.8 28.8-28.8-12.8-28.8-28.8-28.8z" fill="#78AAFF" p-id="12115"></path><path d="M896 0H128C57.6 0 0 57.6 0 128v768c0 70.4 57.6 128 128 128h768c70.4 0 128-57.6 128-128V128c0-70.4-57.6-128-128-128z m-102.4 652.8c-6.4 57.6-54.4 102.4-115.2 112-51.2 6.4-284.8 6.4-336 0-60.8-9.6-105.6-54.4-115.2-112-6.4-35.2-6.4-163.2 0-198.4 9.6-67.2 64-112 153.6-112 3.2-57.6 48-108.8 102.4-115.2h51.2c54.4 6.4 99.2 57.6 102.4 115.2 89.6 0 144 44.8 153.6 112 9.6 35.2 9.6 160 3.2 198.4z" fill="#78AAFF" p-id="12116"></path></svg>                                                </a>
                                                <!-- 判断颜色是否有货 -->
                                                @if($goods['in_stock']!=0)
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                                    <!-- 大于99就+ -->
                                                    @if($goods['in_stock']>99)
                                                        99+
                                                    @else
                                                        {{$goods['in_stock']}}
                                                    @endif
                                                    
                                                </span>
                                                @else
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    {{$goods['in_stock']}}
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        @if(floor(strtotime(date("Y-m-d h:i:sa"))-strtotime($goods['created_at']))/86400 < config('bing.xinpin'))
                                        <!-- 新品上市判断 -->
                                        <div class="xinpin">
                                                新品上市
                                        </div>
                                        @endif

                                        @if($goods['sales_volume'] > config('bing.huobao'))
                                        <!-- 火爆销售 -->
                                        <div class="title-position">
                                            <span class="badge text-bg-danger">
                                                <svg t="1673143151226" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="9746" width="16" height="16"><path d="M510.1 510.1l3.8 3.8-3.8-3.8zM514.3 509.6l-4.7 4.7c1.9-1.5 3.4-3 4.7-4.7z" fill="#ffffff" p-id="9747"></path><path d="M712.2 230.6c21.3 47.2 24.5 125.2-19.6 162.7C621 118.1 442 64.4 442 64.4c21.3 139.9-74.8 293-169.2 408.4-3.2-55.3-6.6-92.7-37.4-149.7C228.8 425.6 150.8 507 128 609.5c-27.6 141.6 22.8 240.9 214.7 350-60.2-125.2-27.6-196.9 19.6-261.9 50.4-74.8 63.6-146.5 63.6-146.5s40.6 50.4 24.5 130.1c68.2-78 81.4-203.5 71.7-249 156.1 109.1 226 350 135 524.1 481.4-275 118.5-683.5 55.1-725.7z" fill="#ffffff" p-id="9748"></path></svg>
                                                {{$goods['sales_volume']}}
                                            </span>
                                        </div>
                                        @endif
                                        
                                    </div>
                                   
                                   

                                </div>
                                
                                @endforeach

                            </h4>


                            @endforeach

                          </div>
                    </div>
                        
                </div>
    <!-- main end -->



@stop

@section('js')

<script src="https://unpkg.com/scrollreveal"></script>

    <script>



ScrollReveal().reveal('.headline')

        // search
        $("#search").on("input",function(e){
        var txt = $("#search").val();
        if($.trim(txt)!="") {
            $(".sp").hide().filter(":contains('"+txt+"')").show();
        } else {
            $(".sp").show();
        }
    });
    </script>
@stop
