<!DOCTYPE html>
<html lang="Zh-cn">

  <head>
    <meta charset="utf-8">
    <title>分类页</title>
    <meta name="Keywords" content="雷神911,雷神笔记本,雷神游戏本" />
    <meta name="Description" content="" />
    <link rel="shortcut icon" href="/favicon.ico" />
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
    <script type="text/javascript" src="/Home/static/js/common_category.js"></script>
    <script type="text/javascript" src="/Home/static/js/user.js"></script>
    <link href="/Home/static/css/index.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Home/static/js/xiaomi_index.js"></script>

  </head>
  <body style="overflow-x: hidden; background: #fff;">
    <script type="text/javascript">
    $(document) $(function() {
        $(".t_banner i").click(function() {
          $(".t_banner").hide();
        });
      });
    </script>
    <div class="t_banner">
      <i>×</i>
      <a href="#" target="_blank">
        <img src="/Home/static/picture/1530643137657388346.jpg" style="width:100%"/>
      </a>
    </div>
    <div class="site-topbar">
      <div class="container">
        <div class="topbar-nav">
          <a href="index.php" class="snc-link snc-order">首页</a>
          <span class="sep">|</span>
          <a href="list.php" class="snc-link snc-order">列表页</a>
          <span class="sep">|</span>
          <a href="info.php" target="_blank" class="snc-link snc-order">信息页</a>
          <span class="sep">|</span>
          <a href="http://www.shenyou.tv/star/" target="_blank" class="snc-link snc-order">游戏星球</a>
          <span class="sep">|</span>
          <a href="http://campus.leishen.cn/" target="_blank" class="snc-link snc-order">雷神校园</a>
          <span class="sep">|</span>
          <a class="thumbnail" href="http://www.leishen.cn/cmbchina" style="color: #fff">招行分期购
            <span></span></a>
          <span class="sep">|</span>
          <a class="thumbnail">商城移动版
            <span>
              <img src="static/picture/yidong.png"></span></a>
          <span class="sep">|</span>
          <a class="thumbnail" href="http://www.leishen.cn/companies">企业订购
            <span></span></a>
          <span class="sep">|</span>
          <a class="thumbnail" href="http://www.leishen.cn/feedback">问题反馈
            <span></span></a>
        </div>
        <div class="topbar-cart" id="ECS_CARTINFO">
          <a class="cart-mini " href="http://www.leishen.cn/flow/">
            <i class="iconfont">&#xe60c;</i>购物车
            <span class="mini-cart-num J_cartNum" id="hd_cartnum">(0)</span></a>
          <div id="J_miniCartList" class="cart-menu">
            <p class="loading">购物车中还没有商品，赶紧选购吧！</p></div>
          <!-- 有商品 -->
          <div id="J_miniCartList" class="cart-menu" style="display: none; height: 169px; padding-top: 15px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
            <ul>
              <li class="clearfix first">
                <div class="cart-item">
                  <a class="thumb" target="_blank" href="item/484">
                    <img src="http://www.leishen.cn/images/201707/thumb_img/484_thumb_G_1500327433366.jpg" onerror="javascript:this.src='http://www.leishen.cn/images/201707/thumb_img/484_thumb_G_1500327433366.jpg'"></a>
                  <a class="name" target="_blank" href="item/484">雷神ST Pro官方定制 配置3</a>
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
              <a class="btn btn-primary" href="http://www.leishen.cn/flow/">去购物车结算</a></div>
          </div>
          <script type="text/javascript">function deleteCartGoods(rec_id) {
              Ajax.call('#', 'id=' + rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
            }

            /**
             * 接收返回的信息
             */
            function deleteCartGoodsResponse(res) {
              if (res.error) {
                alert(res.err_msg);
              } else {
                $("#ECS_CARTINFO").html(res.content);
              }
            }
          </script>
        </div>
        <div class="topbar-info J_userInfo" id="ECS_MEMBERZONE">
          <a class="link" href="#" rel="nofollow">登录</a>
          <span class="sep">|</span>
          <a class="link" href="#" rel="nofollow">注册</a></div>
      </div>
    </div>
    <div class="site-header" style="clear:both;">
      <div class="container">
        <div class="header-log1 fl" style="margin-top:22px; margin-right: 5px">
          <a href="/" target="_blank">
            <img src="/Home/static/picture/logozui.jpg" style="width:234px" /></a>
        </div>
        <div class="header-search fl">
          <form action="/search.php" method="get" id="searchForm" name="searchForm" onSubmit="return checkSearchForm()" class="search-form clearfix">
            <label class="hide">站内搜索</label>
            <input class="search-text" type="text" name="keywords" id="keyword" value="" autocomplete="off">
            <input type="hidden" value="k1" name="dataBi">
            <button type="submit" class="search-btn iconfont"></button>
            <div class="hot-words">
              <a href="#" target="_blank">Test</a></div>
          </form>
        </div>
        <div class="clearfix header_mb20"></div>
        <div class="header-nav ">
          <ul class="nav-list feileinew">
            <li class="nav-category ">
              <span>全部分类</span>
              <img class="fr" src="static/picture/fen.png" style="width: 15px;height: 7px" />
              <div class="site-category category-hidden">
                <ul class="site-category-list clearfix" id="site-category-list">
                  <li class="category-item">
                    <a class="title" href="#">游戏笔记本
                      <i class="iconfont"></i></a>
                    <div class="children clearfix children_2">
                      <div class="children-home-quan">
                        <ul class="children-list">
                          <div class="home-category-child-list clearfix">
                            <a href="#" title="" class="home-category-list">办公游戏本
                              <i class="iconfont fr"></i></a>
                          </div>
                          <li>
                            <a class="link" href="#">
                              <img class="thumb" src="static/picture/614_thumb_g_1526410696869.jpg" width="40" height="40">
                              <span>雷神911Air星云版</span></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <li class="category-item">
                      <a class="title" href="#">免费试用
                        <i class="iconfont"></i></a>
                    </li>
                </ul>
              </div>
              </li>
          </ul>
        </div>
        <!-- 导航开始 -->
        <div class="header-nav nav1">
          <ul class="nav-list">
            <li class="nav-item">
              <a class="link" href="#" target="_blank" class="current">
                <span>911系列</span></a>
              <div class='item-children'>
                <div class="container">
                  <ul class="children-list clearfix">
                    <li class="first">
                      <div class="figure figure-thumb">
                        <a href="http://www.leishen.cn/item/617">
                          <img src="static/picture/617_thumb_g_1526262032064.jpg" onerror="javascript:this.src='http://www.leishen.cn/images/201805/thumb_img/617_thumb_G_1526262032064.jpg';" alt="雷神911GT电竞版"></a>
                      </div>
                      <div class="title">
                        <a href="http://www.leishen.cn/item/617">雷神911GT电竞版</a></div>
                      <p class="price">10999.0</p></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="nav-item1">
              <a class="link" href="http://www.leishen.cn/customize/st_pro" target="_blank">
                <span>私人定制</span></a>
            </li>
            </li>
          </ul>
        </div>
        <!-- 导航结束 --></div>
      <div id="J_navMenu" class="header-nav-menu" style="display: none;">
        <div class="container"></div>
      </div>
    </div>
        <!-- 继承部分 -->
        @yield('content')
        <div class="container">
          <img src="/Home/static/picture/intel_desc_002.jpg" alt="intel" style="position: relative;left: 50%;margin-left: -960px;" /></div>
        <style type="text/css">.site-footer .footer-links .col-links{ width: 125px; }</style>
        <!-- 底部开始 -->
        <div class="site-footer">
          <div class="container">
            <div class="footer-service">
              <ul class="list-service clearfix">
                <li>
                    <i class="iconfont">
                      <img src="/Home/static/picture/t01.png" alt="" /></i>1年免费保修
                </li>
                <li>
                    <i class="iconfont">
                      <img src="/Home/static/picture/t02.png" alt="" /></i>7天无理由退货
                </li>
                <li>
                    <i class="iconfont">
                      <img src="/Home/static/picture/t03.png" alt="" /></i>15天免费换货
                </li>
                <li>
                    <i class="iconfont">
                      <img src="/Home/static/picture/t04.png" alt="" /></i>顺丰包邮
                </li>
                <li>
                    <i class="iconfont">
                      <img src="/Home/static/picture/t05.png" alt="" /></i>130余家售后网点
                </li>
              </ul>
            </div>
            <div class="footer-links clearfix">
              <div class="blank"></div>
              <dl class="col-links">
                <dt>帮助中心</dt>
                <dd>
                  <a href="#" target="_blank" title="购物指南" rel="nofollow">购物指南</a></dd>

              </dl>
              <dl class="col-links">
                <dt>服务支持</dt>
                <dd>
                  <a href="#" target="_blank" title="保修政策" rel="nofollow">保修政策</a></dd>
              </dl>
              <dl class="col-links">
                <dt>关于雷神</dt>
                <dd>
                  <a href="#" target="_blank" title="公司介绍" rel="nofollow">公司介绍</a></dd>

              </dl>
              <dl class="col-links">
                <dt>品牌资讯</dt>
                <dd>
                  <a href="#" target="_blank" title="营业执照" rel="nofollow">营业执照</a></dd>
              </dl>
              <dl class="col-links">
                <dt>线下门店</dt>
                <dd>
                  <a href="#" target="_blank" title="售后网点" rel="nofollow">售后网点</a></dd>
              </dl>
              <div class="col-links">
                <p style=" font-size:14px; color:#424242; line-height:1.25; font-weight:normal; padding-bottom:26px;">新浪微博</p>
                <a>
                  <img src="/Home/static/picture/xinlang.jpg" width="70px" alt="" /></a>
              </div>
              <div class="col-links">
                <p style=" font-size:14px; color:#424242; line-height:1.25; font-weight:normal; padding-bottom:26px;">雷神订阅号</p>
                <a>
                  <img src="/Home/static/picture/lsdy.jpg" width="70px" alt="" /></a>
              </div>
              <div class="col-links" style="width: 100px">
                <p style=" font-size:14px; color:#424242; line-height:1.25; font-weight:normal; padding-bottom:26px;">游戏外设群</p>
                <a>
                  <img src="/Home/static/picture/shequn.png" width="70px" alt="" /></a>
              </div>
              <div class="col-contact">
                <p class="phone">4006-999-999</p>
                <p>周一至周日 8:00-18:00
                  <br></p>
                <a rel="nofollow" class="btn_1 btn-line-primary btn-small" href="#" target="_blank">
                  <i class="iconfont"></i>24小时在线客服</a></div>
            </div>
          </div>
        </div>
        <div class="site-info">
          <div class="container">
            <div class="logo ir">雷神官网</div>
            <div class="info-text">
              <p class="sites"></p>
              <p>© 2014-2017 www.leishen.cn 青岛雷神科技股份有限公司 版权所有 全国免费咨询电话：4006-999-999 鲁ICP备14015908号-1</p>
            </div>
            <div class="info-links">
              <a href="#">
                <img src="static/picture/yingye.jpg" alt="营业执照"></a>
            </div>
          </div>
        </div>
        <style type="text/css">
        .btn_1 {
          display:inline-block;
          width:158px;
          height:38px;
          padding:0;
          margin:0;
          border:1px solid #B9000F;
          font-size:14px;
          line-height:38px;
          text-align:center;
          color:#B9000F;
          cursor:pointer;
          -webkit-transition:all .4s;
          transition:all .4s;
        }
        </style>
        </body>
        </html>