@extends('Home.common')
@section('Home_title','购物车结算')
@section('content')
        <link rel="stylesheet" href="/Home/static/css/Car/flow.css">
        <link rel="stylesheet" href="/Home/static/css/Car/cart.css">
        @if ($Shop_Car_nums)
        <div class="page-main">
            <div class="container clearfix">
                <div class="checkout-box confirm-order-box">
                    <h2>确认订单信息</h2>
                    <div class="flowBox_in">
                        <form action="/flow/cars" method="post">
                          {{ csrf_field() }}
                            <ul class="box-main clearfix">
                                <li class="section-options clearfix">
                                    <div class="layui-tab" lay-filter="test">
                                        <ul class="layui-tab-title">
                                            <li class="layui-this">收货人信息</li>
                                        </ul>
                                        <div class="layui-tab-content">
                                            <div class="layui-tab-item layui-show">
                                            @foreach ($U_address as $v)
                                              @if ($v['address_status'] == 1)
                                              <div style="margin-top: 10px;">
                                                <input type="radio" name="address_id" value="{{ $v['id'] }}" checked ><span id="span">名字：{{ $v['address_name']}} &nbsp;电话：{{ $v['address_phone']}} &nbsp; 地址：{{ $v['address_address']}} </span> &nbsp;<b style="font-size:15px;color:#000;">(默认地址)</b>
                                              </div>
                                              @elseif ($v['address_status'] == 0)
                                              <div style="margin-top: 10px;">
                                                <input type="radio" name="address_id" value="{{ $v['id'] }}">名字：{{ $v['address_name']}} &nbsp;电话：{{ $v['address_phone']}} &nbsp; 地址：{{ $v['address_address']}}
                                              </div>
                                              @endif
                                            @endforeach
                                            </div>
                                          </div>
                                          <script type="text/javascript">
                                          //  $('input[type=radio]')
                                          if ($('input[type=radio]:checked')) {
                                              $('#span').css('color','#c01734')
                                          }
                                          </script>
                                    </div>
                                </li>
                                <li class="section-options clearfix">
                                    <div class="layui-tab" lay-filter="test">
                                        <ul class="layui-tab-title">
                                            <li class="layui-this">在线支付</li>
                                        </ul>
                                        <div class="layui-tab-content">
                                            <div class="layui-tab-item layui-show">
                                              <div style="margin-top:  10px;">
                                                <input type="radio" name="orders_paymothed" value="0" checked> 余额支付
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                </li>
                                <li class="section-options clearfix section-shipping" style="margin-bottom: -10px">
                                    <h3 class="section-header">
                                        <span>配送方式</span></h3>
                                    <div class="clearfix"></div>
                                    <div class="section-body">
                                        <ul class="item-list clearfix payment-list" id="shipping-list">
                                            <li>
                                                <label class="checkout-item checkout-item3">顺丰速运</label>
                                                <div style="margin-top:10px">注：新疆、青海、西藏不包邮，请联系客服确认快递信息，否则不予发货！</div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="section-options clearfix section-goods">
                                    <div class="section-header clearfix">
                                        <h3 class="title">商品列表</h3>
                                        <a href="/shop_car/" class="modify">返回购物车
                                            <i class="iconfont"></i></a>
                                    </div>
                                    <table width="100%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" class="goods-list-table">
                                        <tbody>
                                            <tr>
                                              @foreach ($U_Car as $v)
                                                @foreach ($U_CarGoods as $vv)
                                                  @if ($v['gid'] == $vv['id'])
                                                <td bgcolor="#ffffff">
                                                    <img src="{{ $vv['goods_pic'] }}" title="{{ $vv['goods_name'] }}" width="30" height="30">
                                                    <a href="/item/{{ $vv['id'] }}" target="_blank" class="f6">
                                                      {{ $vv['goods_name'] }}
                                                      @if ($v['meal_detail'] != '')
                                                        &nbsp; |&nbsp;  套餐：{{ $v['meal_detail'] }}
                                                      @endif
                                                    </a>
                                                </td>
                                                <td class="weiruan" bgcolor="#ffffff" align="right"></td>
                                                <td class="weiruan" bgcolor="#ffffff" align="right">
                                                  @if ($vv['goods_sales_status'] == '1')
                                                    @if ((time() > $vv['goods_sales_start']) && (time() < $vv['goods_sales_end']))
                                                      {{ $vv['goods_sales_price'] }}
                                                    @else
                                                      {{ $vv['goods_price'] }}
                                                    @endif
                                                  @else
                                                    {{ $vv['goods_price'] }}
                                                  @endif
                                                </td>
                                                <td class="weiruan" bgcolor="#ffffff" align="right">{{ $v['shop_num'] }}</td>
                                                <td class="weiruan" bgcolor="#ffffff" align="right">
                                                  @if ($v['meal_detail'] != '')

                                                    @if ($vv['goods_sales_status'] == '1')
                                                      @if ((time() < $vv['goods_sales_end']) && (time() > $vv['goods_sales_start']))
                                                        {{ ($v['shop_num']*$vv['goods_sales_price']) + $v['meal_price'] }}
                                                    @else
                                                      {{ ($v['shop_num']*$vv['goods_price']) + $v['meal_price'] }}
                                                      @endif
                                                    @endif

                                                  @else

                                                    @if ($vv['goods_sales_status'] == '1')

                                                      @if ((time() < $vv['goods_sales_end']) && (time() > $vv['goods_sales_start']))
                                                        {{ $v['shop_num']*$vv['goods_sales_price'] }}
                                                    @else

                                                      {{ $v['shop_num']*$vv['goods_price'] }}
                                                      
                                                      @endif

                                                    @endif

                                                  @endif


                                                </td>
                                            </tr>
                                                @endif
                                              @endforeach
                                            @endforeach
                                            <tr>
                                                <td bgcolor="#ffffff" colspan="7" id="TotalpriceNum">购物金额小计 ￥{{ $U_Totalprice }}.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>

                                <li class="section-options clearfix section-count">
                                    <h3 class="section-header"><span>费用总计</span></h3>
                                    <div id="ECS_ORDERTOTAL" class="money-box">
                                        <ul>
                                            <li class="clearfix total-price">
                                                <label>应付款金额：</label>
                                                <span class="val">
                                                    <em>{{ $U_Totalprice }}</em></span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="section-options clearfix" style="border-bottom:none;">
                                    <div style="margin:8px auto; text-align:right;">
                                        <input type="image" src="/Home/static/images/bnt_subOrder.gif">
                                      </div>
                                    </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="page-main" id="cart-box">
            <div class="container">
                <div class="cart-empty">
                    <h2>您的购物车还是空的!</h2>
                    <a href="/" class="btn btn-primary">马上去购物</a></div>
            </div>
        </div>

      @endif
@endsection
