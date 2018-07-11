@extends('Home.common')

@section('Left_Nav')
    @parent
@endsection

@section('content')
    <!-- 分类导航开始 -->
    <div class="breadcrumbs">
      <div class="container">
        <a href="http://www.leishen.cn">首页</a>
        <code>&gt;</code>
        <a href="http://www.leishen.cn/list/39">游戏笔记本</a>
        <code>&gt;</code>
        <a href="http://www.leishen.cn/list/61">911系列</a></div>
    </div>
    <!-- 分类导航结束 -->
    <!-- 配置选择开始 -->
    <div class="container">
      <div class="filter-box">
        <!-- 配置开始 -->
        <div class="filter-list-wrap">
          <dl class="filter-list clearfix filter-list-row-2">
            <dt>CPU类型：</dt>
            <dd class="active">全部</dd>
            <dd>
              <a href="#">I5-7300HQ</a></dd>
          </dl>
          <a href="javascript:;" class="more J_filterToggle">更多
            <i class="iconfont"></i></a>
        </div>
        <!-- 配置结束 -->
      </div>
    </div>
    <!-- 配置选择结束 -->
    <div class="content">
      <div class="container">
        <style>.yikaishi{cursor: pointer;float: left; font-size:16px;} .section-header{background: #EAEAEA;color: #333; width: 100px; line-height: 40px; text-align: center} .yijieshu{cursor: pointer;margin-left: 10px;float: left;} .section-header:hover{background: #B9000F; color: #FFFFFF;} .selectheader{background: #B9000F; color: #FFFFFF;}</style>
        <script type="text/javascript">$(document).ready(function() {
            var $tab_li = $('.kaishi span');
            $tab_li.click(function() {
              $(this).addClass('selectheader').siblings().removeClass('selectheader');
            });
          });</script>
        <div class="order-list-box clearfix">
          <form method="POST" action="" id="listform" name="listform">
            <ul class="order-list">
              <li class="first active">
                <a title="销量" href="http://www.leishen.cn/listone/61/grid/0/0/0/0/1/sales_volume/ASC" class="curr" rel="nofollow">
                  <span class="search_DESC">销量</span>&nbsp;
                  <i class="iconfont"></i></a>
              </li>
              <li class="">
                <a title="价格" href="http://www.leishen.cn/listone/61/grid/0/0/0/0/1/shop_price/ASC" rel="nofollow">
                  <span class="">价格</span></a>
              </li>
              <li class="">
                <a title="上架时间" href="http://www.leishen.cn/listone/61/grid/0/0/0/0/1/goods_id/DESC" rel="nofollow">
                  <span class="">上架时间</span></a>
              </li>
              <input type="hidden" name="category" value="61" />
              <input type="hidden" name="display" value="grid" id="display" />
              <input type="hidden" name="brand" value="0" />
              <input type="hidden" name="price_min" value="0" />
              <input type="hidden" name="price_max" value="0" />
              <input type="hidden" name="filter_attr" value="0" />
              <input type="hidden" name="page" value="1" />
              <input type="hidden" name="sort" value="sales_volume" />
              <input type="hidden" name="order" value="DESC" /></ul>
          </form>
          <ul class="type-list">
            <li>显示方式：</li>
            <li>
              <a href="javascript:;">
                <img src="/home/static/picture/display_mode_list.gif" alt=""></a>
            </li>
            <li>
              <a href="javascript:;">
                <img src="/home/static/picture/display_mode_grid_act.gif" alt=""></a>
            </li>
            <li>
              <a href="javascript:;">
                <img src="/home/static/picture/display_mode_text.gif" alt=""></a>
            </li>&nbsp;&nbsp;</ul>
        </div>
        <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
          <div class="goods-list-box">
            <div class="goods-list clearfix">
              <div class="goods-item">
                <div class="figure figure-img">
                  <span class="text_center_red">限时秒杀</span>
                  <a href="/item/1">
                    <img src="/home/static/logo.jpg" alt="雷神911SE-E5B巡航版" class="goodsimg" /></a>
                </div>
                <h2 class="title">
                  <a href="/item/1" title="雷神911SE-E5B巡航版">雷神911SE-E5B巡航版</a></h2>
                <p class="desc">GTX1050独显，I5-7300HQ处理器，8G内存，128G固态+1T机械</p>
                <p class="price">促销价
                  <font class="shop_s">4799.0</font></p>
                <div class="thumbs J_attrImg">
                  <div style="width:212px;margin:0 auto;">
                    <ul class="thumb-list clearfix J_imgList">
                      <li class="active">
                        <a>
                          <img src="/home/static/logo.jpg" width="34" height="34"></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="actions clearfix">
                  <a href="" class="btn-like J_likeGoods">
                    <i class="iconfont"></i>
                    <span>收藏</span></a>
                  <a href="" class="btn-buy J_buyGoods">
                    <span>加入购物车</span>
                    <i class="iconfont"></i></a>
                </div>
                <div class="flags">
                  <div class="flag flag-saleoff">7.5折促销</div>
                </div>
              </div>
              <div class="goods-item">
                <div class="figure figure-img">
                  <a href="/">
                    <img src="/home/static/logo.jpg" alt="雷神911黑幽灵电竞版" class="goodsimg" /></a>
                </div>
                <h2 class="title">
                  <a href="#" title="雷神911黑幽灵电竞版">雷神911黑幽灵电竞版</a></h2>
                <p class="desc">144HZ电竞屏，芯八代六核I7-8750H处理器，GTX1060/6G独显，16G内存，128G固态+1T机械，I吃鸡利器！</p>
                <p class="price">官方价
                  <font class="shop_s">9499.0</font></p>
                <div class="thumbs J_attrImg">
                  <div style="width:212px;margin:0 auto;">
                    <ul class="thumb-list clearfix J_imgList">
                      <li class="active">
                        <a>
                          <img src="/home/static/logo.jpg" width="34" height="34"></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="actions clearfix">
                  <a href="" class="btn-like J_likeGoods">
                    <i class="iconfont"></i>
                    <span>收藏</span></a>
                  <a href="" class="btn-buy J_buyGoods">
                    <span>加入购物车</span>
                    <i class="iconfont"></i></a>
                </div>
                <div class="flags">
                  <!-- <div class="flag flag-saleoff">8.3折促销</div>
                  -->
                </div>
              </div>

            </div>
          </div>
        </form>

          <div class="clearfix">
            <div class="pagebar">
              <span class="f_l f6" style="margin-right:10px;">总计
                <b>32</b>个记录</span>
              <a class="next" href="#">上一页</a>
              <span class="page_now">1</span>
              <a href="#">[2]</a>
              <a href="#">[3]</a>
              <a href="#">[4]</a>
              <a class="next" href="#">下一页</a></div>
          </div>


      </div>
      <div id="J_renovateWrap" class="xm-recommend-container container xm-carousel-container">
        <h2 class="xm-recommend-title">
          <span>为你推荐</span></h2>
        <div class="xm-recommend">
          <div class="xm-carousel-wrapper">
            <ul class="xm-carousel-col-5-list xm-carousel-list clearfix">
              <li class="J_xm-recommend-list p_relative">
                <dl>
                  <dt>
                    <a href="#" target="_blank">
                      <img src="/home/static/logo.jpg"/></a>
                  </dt>
                  <dd class="xm-recommend-name">
                    <a href="#" target="_blank" title="雷神911ME银魂">雷神911ME银魂</a></dd>
                  <dd class="xm-recommend-price">6499.0</dd>
                  <dd class="xm-recommend-tips"></dd>
                </dl>
              </li>
              <li class="J_xm-recommend-list p_relative">
                <dl>
                  <dt>
                    <a href="#" target="_blank">
                      <img src="/home/static/logo.jpg"/></a>
                  </dt>
                  <dd class="xm-recommend-name">
                    <a href="#" target="_blank" title="雷神911SE钢版">雷神911SE钢版</a></dd>
                  <dd class="xm-recommend-price">6499.0</dd>
                  <dd class="xm-recommend-tips"></dd>
                </dl>
              </li>
            </ul>
          </div>
          <div class="xm-pagers-wrapper">
            <ul class="xm-pagers">
              <li class="pager">
                <span class="dot">1</span></li>
              <li class="pager">
                <span class="dot">6</span></li>
              <li class="pager">
                <span class="dot">11</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
@endsection
