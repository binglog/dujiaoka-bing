<!-- pc nva_left start-->

<div class="col-2  d-lg-block d-none text-white nav-left" >
                    <div class="container left_top">
                        <div class="nav-top">
                            <div class="logo p-3">
                                <img src="{{ picture_ulr(dujiaoka_config_get('img_logo')) }}" alt="" style="height: 42px;"><span>{{ dujiaoka_config_get('text_logo') }}</span>
                            </div>
                            <hr>
                            <div class="nav">
                                <div class="row">
                                      <div id="list-example" class="">
                                        <!-- <a class="list-group-item list-group-item-action m-5" href="/">{{__('dujiaoka.home_page')}}</a> -->
                                        @if(\Illuminate\Support\Facades\Request::path() == '/')
                                        @foreach($data as  $index => $group)
                                        <a class="list-group-item list-group-item-action m-5" href="#group-{{ $group['id'] }}">{{ $group['gp_name'] }}</a>
                                        @endforeach
                                        @else
                                          <a class="list-group-item list-group-item-action m-5" href="/">{{__('dujiaoka.home_page')}}</a>
                                        @endif
                                        
                                      </div>
                                  </div>
                            </div>
                            <!-- 查询 -->
                            <div class="chaxun">

                                <button  data-bs-toggle="modal" data-bs-target="#chauxn">查询订单</button>





                            </div>
                        </div>
                       
                    </div>
                </div>







<!-- pc nav_left end-->