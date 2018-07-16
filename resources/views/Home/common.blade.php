<!DOCTYPE html>
<html lang="Zh-cn">

    <head>
        <meta charset="utf-8">
        <title>@yield('Home_title'){{ $systems['system_name'] }}</title>
        <meta name="Keywords" content="{{ $systems['system_keywords'] }}" />
        <meta name="Description" content="{{ $systems['system_description'] }}" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="/Home/layui/layui/css/layui.css" rel="stylesheet" type="text/css" />
        <link href="/Home/static/css/style.css" rel="stylesheet" type="text/css" />
        <link href="/Home/static/css/category.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/Home/static/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/Home/static/js/jquery.json.js"></script>
        <script type="text/javascript" src="/Home/static/js/common_category.js"></script>
        <script type="text/javascript" src="/Home/static/js/global.js"></script>
        <script type="text/javascript" src="/Home/static/js/easydialog.min.js"></script>
        <script type="text/javascript" src="/Home/static/js/check.js"></script>
        <script type="text/javascript" src="/Home/static/js/transport_jquery.js"></script>
        <script type="text/javascript" src="/Home/static/js/utils.js"></script>
        <script type="text/javascript" src="/Home/static/js/jquery.superslide.js"></script>
        <script type="text/javascript" src="/Home/static/js/xiaomi_common.js"></script>
        <script type="text/javascript" src="/Home/static/js/jquery.flipcountdown.js"></script>
        <script type="text/javascript" src="/Home/layui/layui/layui.all.js"></script>
        <link rel="stylesheet" href="/Home/static/css/foot.css" type="text/css">
        <script type="text/javascript" src="/home/static/js/xiaomi_category.js"></script>
        <!-- <script type="text/javascript" src="/Home/static/js/xiaomi_index.js"></script> -->

      </head>

    <body style="overflow-x: hidden; background: #fff;">
        <!-- 头部开始 -->
        <div class="site-topbar">
            <div class="container">
                <!-- 左侧头部开始 -->
                <div class="topbar-nav">
                    <a href="/" class="snc-link snc-order">首页</a>
                    <span class="sep">|</span>
                    <a href="/list/1" class="snc-link snc-order">列表页</a>
                    <span class="sep">|</span>
                    <a href="/item/1" target="_blank" class="snc-link snc-order">信息页</a>
                    <span class="sep">|</span>
                  </div>
                <!-- 左侧头部结束 -->
                <!-- 购物车部分开始 -->
                <div class="topbar-cart" id="ECS_CARTINFO">
                    <a class="cart-mini " href="/flow/">
                        <i class="iconfont">&#xe60c;</i>购物车
                        <span class="mini-cart-num J_cartNum" id="hd_cartnum">(1)</span></a>
                    <div id="J_miniCartList" class="cart-menu">
                        <p class="loading">购物车中还没有商品，赶紧选购吧！</p></div>
                    <!-- 有商品 -->
                    <div id="J_miniCartList" class="cart-menu">
                        <ul>
                            <li class="clearfix first">
                                <div class="cart-item">
                                    <a class="thumb" target="_blank" href="#">
                                        <img src="http://www.leishen.cn/images/201707/thumb_img/484_thumb_G_1500327433366.jpg"></a>
                                    <a class="name" target="_blank" href="#">雷神ST Pro官方定制 配置3</a>
                                    <span class="price">8800.00元 x 1</span>
                                    <a class="btn-del delItem" href="javascript:deleteCartGoods(205475);">
                                        <i class="iconfont"></i></a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="cart-item">
                                    <a class="thumb" target="_blank" href="#">
                                        <img src="http://www.leishen.cn/images/201707/thumb_img/484_thumb_G_1500327433366.jpg"></a>
                                    <a class="name" target="_blank" href="#">雷神ST Pro官方定制 配置3</a>
                                    <span class="price">8800.00元 x 1</span>
                                    <a class="btn-del delItem" href="javascript:deleteCartGoods(205475);">
                                        <i class="iconfont"></i></a>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="cart-item">
                                    <a class="thumb" target="_blank" href="#">
                                        <img src="http://www.leishen.cn/images/201707/thumb_img/484_thumb_G_1500327433366.jpg"></a>
                                    <a class="name" target="_blank" href="#">雷神ST Pro官方定制 配置3</a>
                                    <span class="price">8800.00元 x 1</span>
                                    <a class="btn-del delItem" href="javascript:deleteCartGoods(205475);">
                                        <i class="iconfont"></i></a>
                                </div>
                            </li>
                        </ul>
                        <div class="count clearfix">
                            <span class="total">共计
                                <em id="hd_cart_count">1</em>件商品
                                <strong>合计：
                                    <em id="hd_cart_total">8800元</em></strong>
                            </span>
                            <a class="btn btn-primary" href="#">去购物车结算</a></div>
                    </div>
                </div>
                <!-- 购物车部分结束 -->
                @if (session('Home_Session'))
                <!-- 顶部个人信息开始 -->
                <div class="topbar-info J_userInfo" id="ECS_MEMBERZONE">
                    <span class="user">
                        <a class="user-name" target="_blank" href="#">
                            <span class="name">{{ $get_session['u_name'] }}</span>
                            <i class="iconfont"></i></a>
                        <ul class="user-menu" style="display: none;">
                            <li>
                                <a target="_blank" href="/user/index">个人中心</a></li>
                            <li>
                                <a target="_blank" href="#">我的收藏</a></li>
                            <li>
                                <a target="_blank" href="#">我的评论</a></li>
                            <li>
                                <a target="_blank" href="#">跟踪包裹</a></li>
                            <li>
                                <a href="/logout">退出登录</a></li>
                        </ul>
                    </span>
                    <span class="sep">|</span>
                    <a href="#" class="link">我的订单</a></div>
                <!-- 顶部个人信息结束 -->
                @else
                <div class="topbar-info J_userInfo" id="ECS_MEMBERZONE">
                    <a class="link" href="/login" rel="nofollow">登录</a>
                    <span class="sep">|</span>
                    <a class="link" href="/reg" rel="nofollow">注册</a>
                    <span class="sep">|</span>
                </div>
              @endif
            </div>
        </div>
        <!-- 头部结束 -->
        <div class="site-header" style="clear:both;">
            <div class="container">
                <!-- LOGo -->
                <div class="header-log1 fl" style="margin-top:22px; margin-right: 5px">
                    <a href="/" target="_blank">
                        <img src="{{ $systems['system_logo'] }}" style="width:234px" /></a>
                </div>
                <!-- LOGo -->
                <!-- 搜索开始 -->
                <div class="header-search fl">
                    <form action="/Search" method="get" id="searchForm" class="search-form clearfix">
                        <label class="hide">站内搜索</label>
                        <input class="search-text" type="text" name="key" value="" autocomplete="off">
                        <button type="submit" class="search-btn iconfont"></button>
                        <div class="hot-words">
                            <a href="/Search?key=Macbook Pro" target="_blank">Macbook Pro</a></div>
                    </form>
                </div>
                <!-- 搜索结束 -->
                <div class="clearfix header_mb20"></div>
                <!-- 右侧导航开始 -->
                <div class="header-nav ">
                    <ul class="nav-list feileinew">
                        <li class="nav-category ">
                            <span>全部分类</span>
                            <img class="fr" src="/Home/static/picture/fen.png" style="width: 15px;height: 7px" />
                            <div class="site-category category-hidden">
                              <ul class="site-category-list clearfix" id="site-category-list">
                                <!-- 左start -->

                                <!-- 左侧导航栏遍历开始 -->
                                  @foreach($Cate as $k=>$v)
                                  <li class="category-item">
                                      @if(substr_count($v['path'],',')==0)
                                      <a class="title" href="/list/{{ $v['id'] }}">{{ $v['cname'] }}
                                          <i class="iconfont"></i></a>
                                      <div class="children clearfix children_2">
                                          <div class="children-home-quan">
                                              <ul class="children-list">
                                                  @foreach($Cate as $ka=>$va)
                                                  @if($va['pid']==$v['id'])
                                                  <div class="home-category-child-list clearfix">
                                                      <a href="/list/{{ $va['id'] }}" title="" class="home-category-list">{{ $va['cname'] }}
                                                      <i class="iconfont fr"></i></a>
                                                  </div>
                                                  @foreach($Cate as $key=>$val)
                                                  @if($val['pid']==$va['id'])
                                                  <li><!-- 商品分类搜索 -->
                                                      @foreach($good as $kels=>$vals)
                                                      @if($vals['goods_cates']==$val['id'])
                                                      <a class="link" href="/item/{{ $vals['id'] }}">
                                                          <img class="thumb" src="/Home/static/logo.jpg" width="40" height="40">
                                                          <span>{{ $val['cname'] }}</span></a>
                                                      @endif
                                                      @endforeach
                                                  </li>
                                                  @endif
                                                  @endforeach
                                                  @endif
                                                  @endforeach
                                              </ul>
                                          </div>
                                      </div>
                                      @endif
                                  </li>
                                  @endforeach
                                  <!-- 左侧导航栏遍历结束 -->

                                  <!-- 左end -->
                                  <!-- 单个start -->
                                  <!-- <li class="category-item">
                                      <a class="title" href="#">免费试用
                                          <i class="iconfont"></i></a>
                                  </li> -->
                                  <!-- 单个end -->
                              </ul>
                            </div>
                    </ul>
                </div>
                <!-- 右侧导航结束 -->
                <!-- 导航开始 -->
                <div class="header-nav nav1">
                    <ul class="nav-list">
                        <!-- 头部导航商品开始 -->
                        <li class="nav-item">
                            <a class="link" href="#" target="_blank" class="current">
                                <span>911系列</span></a>
                            <div class='item-children'>
                                <div class="container">
                                    <ul class="children-list clearfix">
                                        <li class="first">
                                            <div class="figure figure-thumb">
                                                <a href="#">
                                                    <img src="/Home/static/logo.jpg" alt="雷神911GT电竞版"></a>
                                            </div>
                                            <div class="title">
                                                <a href="#">雷神911GT电竞版</a></div>
                                            <p class="price">10999.0</p></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- 头部导航商品结束 -->
                        <!-- 头部导航商品开始 -->
                        <li class="nav-item1">
                            <a class="link" href="#" target="_blank">
                                <span>私人定制</span></a>
                        </li>
                        <!-- 头部导航商品结束 --></li>
                    </ul>
                </div>
                <!-- 导航结束 --></div>
            <div id="J_navMenu" class="header-nav-menu" style="display: none;">
                <div class="container"></div>
            </div>
        </div>
        <!-- 整体头部结束 -->
        <!-- 继承部分开始 -->
        @yield('content')
        <!-- 继承部分结束 -->
        <div class="container">
            <img src="/Home/static/picture/intel_desc_002.jpg" alt="intel" style="position: relative;left: 50%;margin-left: -960px;" />
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer-service clearfix">
                    <div class="service-item item-1">
                        <i>
                        </i>
                        <span class="text">1年免费保修</span></div>
                    <div class="service-item item-2">
                        <i>
                        </i>
                        <span class="text">7天无理由退货</span></div>
                    <div class="service-item item-3">
                        <i>
                        </i>
                        <span class="text">15天免费换货</span></div>
                    <div class="service-item item-4">
                        <i>
                        </i>
                        <span class="text">顺丰包邮</span></div>
                    <div class="service-item item-5">
                        <i>
                        </i>
                        <span class="text">顺丰包邮</span></div>
                </div>
                <div class="footer-splite"></div>
                <div class="footer-links clearfix">
                    <dl class="article-link">
                        <dt>旗下品牌</dt>
                        <dd>
                            <a target="_blank" href="http://www.dscmall.cn/">大商创</a></dd>
                    </dl>
                    <dl class="article-link">
                        <dt>关于我们</dt>
                        <dd>
                            <a target="_blank" href="http://about.ecmoban.com/company.php">公司介绍</a></dd>
                    </dl>
                    <dl class="article-link">
                        <dt>精品教程</dt>
                        <dd>
                            <a target="_blank" href="http://help.ecmoban.com/article_cat-8.html">模板说明</a></dd>
                    </dl>
                    <dl class="article-link">
                        <dt>其他</dt>
                        <dd>
                            <a target="_blank" href="http://bbs.ecmoban.com/">官方论坛</a></dd>
                    </dl>
                    <div class="contact">
                        <h3>联系我们<small>(电话号码)</small></h3>
                        <div class="tel">
                            <div class="number">{{ $systems['system_phone'] }}</div></div>
                        <div class="qrcode clearfix">
                            <div class="qrcode-item">
                                <img src="/home/static/images/index/foot/erweima.png" alt="" width="110px" height="110px">
                                <p>严选科技公众号</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="friend-links clearfix">
                  <div class="fl c_ccc">友情链接：</div>
                  <ul class="fl">
                  @foreach ($Links as $k=>$v)
                  @if ($v['links_pic'] != null)
                  <li class="fl"><a href="{{ $v['links_url'] }}" target="_blank"><img src="{{ $v['links_pic'] }}" alt="{{ $v['links_name'] }}" title="{{ $v['links_name'] }}" width="80px" height="40px"></a></li>
                  @endif
                  @endforeach
                  </ul>
                  </div>


                <div class="footer-copyright">
                  {!! $systems['system_copyright'] !!}
                </div>
            </div>
        </div>
        @if (session('Error'))
        <script type="text/javascript">
          layer.msg('{{session('Error')}}');
        </script>
        @elseif (session('Success'))
        <script type="text/javascript">
          layer.msg('{{session('Success')}}');
        </script>
        @endif
    </body>
</html>
