<!-- pc -->
<div class="d-lg-block d-none  col-3 text-white nav-rigth ">
    <div class="container row d-flex justify-content-center">

        <!-- 商品公告 -->
        {{-- 判断是否是在商品页面 --}}
        @if(substr(\Illuminate\Support\Facades\Request::path(),0,4)=='buy/')
                        
                        
        
                        <!-- 商品结算 -->
                        <div class="spjs col-10 mt-3">
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

                        {{-- 提示 --}}
                        <!-- model -->
                        <div id="model"></div>


        <script>
            window.onload = function(){
                
                let sp=$('.data_zk')
                let Discount=1
                let Price=$('.new-price').data('price')
                // 商品价格显示

                if(Number({{ $in_stock }})<=0){
                    console.log("kucun");
                }else{

                    $("#input_number").bind("input propertychange",sss=function(){
                    // 折扣
                    if(sp.length!=0){
                        $.each(sp,function (index,item) { 
                            if(Number($('#input_number').val())>=item.dataset.number){
                                Discount=item.dataset.price
                            }
                        })
                        if(Discount!=1){
                            $('.zfje').val($("#input_number").val()*Discount)
                        }else{
                            $('.zfje').val($("#input_number").val()*Price)
                        }
                        
                        if(Number($('#input_number').val())<sp[0].dataset.number){
                            $('.zfje').val($("#input_number").val()*Price)
                        }
                    }else{
                        $('.zfje').val($("#input_number").val()*Price)
                    }
                    
                    {{-- 商品不小于0 --}}
                    if(Number($('#input_number').val())<=0){
                        $('#input_number').val(1)
                        xs("{{__('bing.buy_zero_quantity')}}")
                    }

                    {{-- 数量不大于限购 --}}
                    @if($buy_limit_num != 0)
                    if($("input[name='by_amount']").val() > {{ $buy_limit_num }}){
                        $("#input_number").val({{ $buy_limit_num }})
                        xs("{{ __('bing.buy_exceeds_limit') }}")
                    }
                    @endif


                    {{-- 数量不超过库存 --}}
                    if($("input[name='by_amount']").val() > {{ $in_stock }}){
                        $("#input_number").val({{ $in_stock }})
                        xs("{{ __('bing.buy_exceeds_stock') }}")
                    }


                
                });


                // sss()
                // event.preventDefault();
                // toast.show()
                
                
                    // 商品提示
                $('form').on("submit",function (event) { 
                    
                    // 邮箱不能为空
                    if($("#buy-email").val() == ''){
                        xs("{{ __('bing.buy_empty_mailbox') }}")
                    }
                    // 购买数量大于0
                    if($("input[name='by_amount']").val() <= 0 ){
                        $("#input_number").val(1)
                        xs("{{ __('bing.buy_zero_quantity') }}")
                    }

                    // 不能大于限购数量
                    if({{$buy_limit_num}} != 0){
                        if($("input[name='by_amount']").val() > {{ $buy_limit_num }}){
                            $("#input_number").val({{ $buy_limit_num }})
                            xs("{{ __('bing.buy_exceeds_limit') }}")
                        }
                    }

                    // 不能大于库存
                    if($("input[name='by_amount']").val() > {{ $in_stock }}){
                        $("#input_number").val({{ $in_stock }})
                        xs("{{ __('bing.buy_exceeds_stock') }}")
                    }


                    // 询密码不能为空
                    @if(dujiaoka_config_get('is_open_search_pwd') == \App\Models\Goods::STATUS_OPEN)
                        if($("#buy-search_pwd").val() !=""){
                            xs("{{ __('bing.buy_empty_query_password') }}")
                        }
                    @endif


                    // 验证码不能为空
                    @if(dujiaoka_config_get('is_open_img_code') == \App\Models\Goods::STATUS_OPEN)
                        if($("input[name='img_verify_code']").val() == ''){
                            xs("{{ __('bing.buy_empty_captcha') }}")
                        }
                    @endif




                
                })

        
                // 添加提示刷新购物车
                function xs(title) { 
                    
                    sss() //更新
                    event.preventDefault(); //断点

                    
                    // 添加提示
                    let model_html=`<div class="toast-container position-fixed bottom-0 end-0 p-3">
                                <div id="liveToast" class="toast {{config('bing.toasts.color')}}" role="alert" data-bs-delay="{{config('bing.toasts.time')}}" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                    <strong class="me-auto">警告⚠️</strong>
                                    <small>刚刚</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                    `+title+`
                                    </div>
                                </div>
                            </div>`
                    $('#model').html(model_html)
                    let toastLiveExample = document.getElementById('liveToast')
                    let toast = new bootstrap.Toast(toastLiveExample)
                    toast.show() //弹出
                    setTimeout(function() { $('#model').html('') }, {{config('bing.toasts.time')}});  //销毁
                    
                }
                }



            }
        </script>








    @else

                    <!-- 站点公告 -->
                    <div class="gg col-10">
                        <div class="card text-center text-bg-dark">
                            <div class="card-header">
                            {{ __('dujiaoka.site_announcement') }}
                            </div>
                            <div class="card-body">
                              <p class="card-text">{!! dujiaoka_config_get('notice') !!}</p>
                            </div>

                          </div>
                    </div>


                    
    @endif
                    
                     <!-- 站长信息 -->
                    @if(config('bing.zz')!=0)
                    <div class="zz col-10 mt-3 text-center">
                        <div class="card text-bg-dark p-3"> 
                        @if(config('bing.zz_img')!='')
                            <img img src="/assets/bing/img/loading.gif" data-src="{{ config('bing.zz_img') }}" class="card-img-top rounded-circle" alt="..." style="width: 75px;">
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

                                <a href="{{ preg_split('/[\s,]+/',$value)[0] }}" class="button col-12 col-xxl-5 mt-1 @if($key%2==0) offset-xxl-2 @endif">
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
                    @endif





                    
                    <h4 class="mt-5 badge text-bg-warning col-3">
                        友情链接
                    </h4>
                    {{-- 友情链接循环 --}}
                    <div class="row">

                    @foreach(config('bing.yq') as $key => $value)


                    <div class="yq mt-3">
                        <span>{{$key}}.</span>
                        <div class="wz">
                            <h6>{{$value[0]}}</h6>
                        </div>
                        <a href="{{$value[1]}}" target="view_window" class="badge text-bg-primary">转跳</a>
                    </div>
                    @endforeach
                        
                    </div>
                    </div>

                    

                </div>



<!-- 移动 -->
<div class="yidong d-lg-none ">
    
</div>
