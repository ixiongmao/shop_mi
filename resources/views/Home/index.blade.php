@extends('Home.common')

@section('Left_Nav')
    @parent
@endsection

@section('content')
<link rel="stylesheet" href="/Home/static/css/index.css" type="text/css" />
<link rel="stylesheet" href="/Home/static/css/seckill.css" type="text/css">
<div class="home-hero-container">
  <div class="home-hero">
    <!-- 幻灯片start -->
    <div class="home-hero-slider">
      <div id="J_homeSlider" style="overflow:hidden;">
        <div class="bd">
          <ul>
            <li _src="url()" style="background:#f8f8f8 center 0 no-repeat;">
              <a target="_blank" href="#"></a>
            </li>
            <li _src="url()" style="background:#f8f8f8 center 0 no-repeat;">
              <a target="_blank" href="#"></a>
            </li>
            <li _src="url()" style="background:#f8f8f8 center 0 no-repeat;">
              <a target="_blank" href="#"></a>
            </li>
            <li _src="url()" style="background:#f8f8f8 center 0 no-repeat;">
              <a target="_blank" href="#"></a>
            </li>
            <li _src="url()" style="background:#f8f8f8 center 0 no-repeat;">
              <a target="_blank" href="#"></a>
            </li>
            <li _src="url()" style="background:#f8f8f8 center 0 no-repeat;">
              <a target="_blank" href="#"></a>
            </li>
          </ul>
        </div>
        <div class="hd">
          <ul></ul>
        </div>
        <span class="prev"></span>
        <span class="next"></span>
      </div>
    </div>
    <!-- 幻灯片end -->
    <div class="home-hero-sub row container" style=" margin:0 auto; margin-top:15px;">
      <div class="span4 Zspan4">
        <ul class="home-channel-list clearfix">
          <li>
            <a href="#" target="_blank">
              <i class="iconfont">
                <img src="/Home/static/picture/liwu1.png" alt="" /></i>以旧换新</a>
          </li>
          <li>
            <a href="#" target="_blank">
              <i class="iconfont">
                <img src="/Home/static/picture/sctb2.png" alt="" /></i>驱动下载</a>
          </li>
          <li>
            <a href="#">
              <i class="iconfont">
                <img src="/Home/static/picture/sctb3.png" alt="" /></i>服务标准</a>
          </li>
          <li>
            <a href="#" target="_blank">
              <i class="iconfont">
                <img src="/home/static/picture/sctb4.png" alt="" /></i>售后网点</a>
          </li>
        </ul>
      </div>
      <!-- 右侧部分start -->
      <div class="span16 span21">
        <!-- 广告区start -->
        <ul class="home-promo-list">
          <li class="first">
            <a href="#" target='_blank'>
              <img src="#" width='316' height='170' border='0' /></a>
          </li>
          <li class="">
            <a href="#" target='_blank'>
              <img src="#" width='316' height='170' border='0' /></a>
          </li>
        </ul>
        <!-- 广告区end -->
        <!-- 新闻区 -->
        <div class="news_content">
          <span class="news_title">雷神快报</span>
          <a style="float:right;" href="#" target="_blank">更多</a>
          <div class="clearfix"></div>
          <ul>
            <!-- 单个start -->
            <ul>
              <li>
                <span style="color: #b60005">【新闻】</span>
                <a href="#" target="_blank" title="雷神911Air轻薄性能游戏本，引爆全面屏时代！">雷神911Air轻薄性能游戏本，引爆...</a></li>
            </ul>
            <!-- 单个end -->
          </ul>
        </div>
        <!-- 新闻区 -->
        <div class="clearfix"></div>
      </div>
      <!-- 右侧部分end -->
    </div>
  </div>
  <!-- 每日推荐start -->
  <div class="xm-plain-box iflashbuy container">
    <div class="box-hd">
      <h2 class="title">每日秒杀</h2>
      <div class="more">
        <div class="xm-controls xm-controls-line-small xm-carousel-controls">
          <a class="control control-prev iconfont" href="javascript: void(0);"></a>
          <a class="control control-next iconfont" href="javascript: void(0);"></a></div>
      </div>
    </div>
    <div class="box-bd" style="margin:0 auto;margin-bottom: 15px;">
      <div class="box-bd" style="width: 1240px">
        <div class="xm-carousel-wrapper iflashbuy">
          <ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList">
            <!-- 单个轮播商品start -->
            <li class="" style="position: relative">
              <a class="thumb thumb_time" href="/seckill" target="_blank">
                <img src="/Home/static/logo.jpg"/></a>
              <a>
                <h3 class="iflashbuyTitle">
                  <a href="/seckill" target="_blank">雷神Dino-X5Ta</a></h3>
              </a>
              <a>
                <p style="text-align: center" class=" ellipsis">GTX1050Ti独显，芯七代I7-7700HQ处理器，8G内存，128G固态+1T机械，IPS高清屏，【如需升级16G内存加699元，请拍搭配套餐】</p></a>
              <div class="iflashbuyPrice">
                <a>
                  <span class="killPrice">6999</span>&nbsp;
                  <span class="killPrice">元</span>&nbsp;&nbsp;
                  <del class="delPrice">8499元</del></a>
              </div>
            </li>
            <!-- 单个轮播商品end -->
            <!-- 单个轮播商品start -->
            <li class="" style="position: relative">
              <a class="thumb thumb_time" href="/seckill" target="_blank">
                <img src="/Home/static/logo.jpg"/></a>
              <a>
                <h3 class="iflashbuyTitle">
                  <a href="/seckill" target="_blank">雷神Dino-X5Ta</a></h3>
              </a>
              <a>
                <p style="text-align: center" class=" ellipsis">GTX1050Ti独显，芯七代I7-7700HQ处理器，8G内存，128G固态+1T机械，IPS高清屏，【如需升级16G内存加699元，请拍搭配套餐】</p></a>
              <div class="iflashbuyPrice">
                <a>
                  <span class="killPrice">6999</span>&nbsp;
                  <span class="killPrice">元</span>&nbsp;&nbsp;
                  <del class="delPrice">8499元</del></a>
              </div>
            </li>
            <!-- 单个轮播商品end -->
            <!-- 单个轮播商品start -->
            <li class="" style="position: relative">
              <a class="thumb thumb_time" href="/seckill" target="_blank">
                <img src="/Home/static/logo.jpg"/></a>
              <a>
                <h3 class="iflashbuyTitle">
                  <a href="/seckill" target="_blank">雷神Dino-X5Ta</a></h3>
              </a>
              <a>
                <p style="text-align: center" class=" ellipsis">GTX1050Ti独显，芯七代I7-7700HQ处理器，8G内存，128G固态+1T机械，IPS高清屏，【如需升级16G内存加699元，请拍搭配套餐】</p></a>
              <div class="iflashbuyPrice">
                <a>
                  <span class="killPrice">6999</span>&nbsp;
                  <span class="killPrice">元</span>&nbsp;&nbsp;
                  <del class="delPrice">8499元</del></a>
              </div>
            </li>
            <!-- 单个轮播商品end -->
            <!-- 单个轮播商品start -->
            <li class="" style="position: relative">
              <a class="thumb thumb_time" href="/seckill" target="_blank">
                <img src="/Home/static/logo.jpg"/></a>
              <a>
                <h3 class="iflashbuyTitle">
                  <a href="/seckill" target="_blank">雷神Dino-X5Ta</a></h3>
              </a>
              <a>
                <p style="text-align: center" class=" ellipsis">GTX1050Ti独显，芯七代I7-7700HQ处理器，8G内存，128G固态+1T机械，IPS高清屏，【如需升级16G内存加699元，请拍搭配套餐】</p></a>
              <div class="iflashbuyPrice">
                <a>
                  <span class="killPrice">6999</span>&nbsp;
                  <span class="killPrice">元</span>&nbsp;&nbsp;
                  <del class="delPrice">8499元</del></a>
              </div>
            </li>
            <!-- 单个轮播商品end -->
            <!-- 单个轮播商品start -->
            <li class="" style="position: relative">
              <a class="thumb thumb_time" href="/seckill" target="_blank">
                <img src="/Home/static/logo.jpg"/></a>
              <a>
                <h3 class="iflashbuyTitle">
                  <a href="/seckill" target="_blank">雷神Dino-X5Ta</a></h3>
              </a>
              <a>
                <p style="text-align: center" class=" ellipsis">GTX1050Ti独显，芯七代I7-7700HQ处理器，8G内存，128G固态+1T机械，IPS高清屏，【如需升级16G内存加699元，请拍搭配套餐】</p></a>
              <div class="iflashbuyPrice">
                <a>
                  <span class="killPrice">6999</span>&nbsp;
                  <span class="killPrice">元</span>&nbsp;&nbsp;
                  <del class="delPrice">8499元</del></a>
              </div>
            </li>
            <!-- 单个轮播商品end -->
            <!-- 单个轮播商品start -->
            <li class="" style="position: relative">
              <a class="thumb thumb_time" href="/seckill" target="_blank">
                <img src="/Home/static/logo.jpg"/></a>
              <a>
                <h3 class="iflashbuyTitle">
                  <a href="/seckill" target="_blank">雷神Dino-X5Ta</a></h3>
              </a>
              <a>
                <p style="text-align: center" class=" ellipsis">GTX1050Ti独显，芯七代I7-7700HQ处理器，8G内存，128G固态+1T机械，IPS高清屏，【如需升级16G内存加699元，请拍搭配套餐】</p></a>
              <div class="iflashbuyPrice">
                <a>
                  <span class="killPrice">6999</span>&nbsp;
                  <span class="killPrice">元</span>&nbsp;&nbsp;
                  <del class="delPrice">8499元</del></a>
              </div>
            </li>
            <!-- 单个轮播商品end -->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- 每日推荐end -->
  <div class="home-star-goods xm-carousel-container container"></div>
</div>
<div class="page-main home-main">
  <div class="container">
    <!-- 商品显示列表类start -->
    <div class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded">
      <div class="box-hd">
        <h2 class="title">游戏笔记本</h2>
        <div class="more J_brickNav">
          <a class="more-link" href="#" style=" display:inline-block;">查看全部
            <i class="iconfont"></i></a>
          <ul class="tab-list J_brickTabSwitch">
            <li class="tab-active">热门</li>
            <li>911系列</li>
          </ul>
        </div>
      </div>
      <div class="box-bd J_brickBd">
        <div class="row">
          <div class="span4 span-first">
            <ul class="brick-promo-list clearfix">
              <li class="brick-item brick-item-l brick-item-m4">
                <a target="_blank" href="#">
                  <img src="/Home/static/logo.jpg" width="234" height="614" /></a>
              </li>
            </ul>
          </div>
          <div class="span16">
            <ul class="brick-list clearfix">
              <!-- 商品显示start -->
              <li class="brick-item brick-item-m p_relative ">
                <div class="figure figure-img">
                  <a href="#">
                    <img src="/Home/static/logo.jpg" width="160" height="160" alt="雷神ST Pro官方定制 配置3"></a>
                </div>
                <h3 class="title">
                  <a href="item/484">雷神ST Pro官方定制 配置3</a></h3>
                <p class="desc">官方定制：芯七代I7-7700HQ处理器，16G内存，512G固态+1T机械硬盘，畅玩VR,搭载GTX 1060 6G独显，全彩背光键盘，薄至2.5cm。定制产品非质量问题不支持无理由退货！</p>
                <p class="seckillprice">￥8800.0</p>
                <p class="rank">18人评价</p>
                <div class="review-wrapper">
                  <a href="javascript:void(0)">
                    <span class="review">不错，挺好</span>
                    <span class="author">来自于 l***7 的评价</span></a>
                </div>
              </li>
              <!-- 商品显示end -->
            </ul>
            <ul class="brick-list clearfix">
              <!-- 商品显示start -->
              <li class="brick-item brick-item-m">
                <span class="text_center_red">限时秒杀</span>
                <div class="figure figure-img">
                  <a href="item/624">
                    <img src="/Home/static/logo.jpg" width="160" height="160" alt=""></a>
                </div>
                <h3 class="title">
                  <a href="item/624">雷神911SE-E5D</a></h3>
                <p class="desc">GTX1050独显，I5-7300HQ处理器，8G内存，128G固态+1T机械</p>
                <p class="seckillprice">￥4799.0</p>
                <p class="rank">0人评价</p>
              </li>
              <!-- 商品显示end -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- 商品显示列表类end -->
    <div class="home-star-goods recommend-for-you"></div>
    <!-- 增值服务区start -->
    <div class="xm-plain-box iflashbuy container">
      <div class="box-hd">
        <h2 class="title">增值服务</h2>
        <div class="more">
          <div class="xm-controls xm-controls-line-small xm-carousel-controls">
            <a class="control control-prev iconfont" href="javascript: void(0);"></a>
            <a class="control control-next iconfont" href="javascript: void(0);"></a></div>
        </div>
      </div>
      <div class="box-bd" style="margin:0 auto;margin-bottom: 15px;background: #fff;">
        <div class="box-bd" style="width: 1240px">
          <div class="xm-carousel-wrapper iflashbuy">
            <ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList">
              <!-- 单个轮播商品start -->
              <li class="" style="position: relative">
                <a class="thumb thumb_time" href="/seckill" target="_blank">
                  <img src="/Home/static/logo.jpg"/></a>
                <a>
                  <h3 class="iflashbuyTitle">
                    <a href="/seckill" target="_blank">雷神Dino-X5Ta</a></h3>
                </a>
                <a>
                  <p style="text-align: center" class=" ellipsis">GTX1050Ti独显，芯七代I7-7700HQ处理器，8G内存，128G固态+1T机械，IPS高清屏，【如需升级16G内存加699元，请拍搭配套餐】</p></a>
                <div class="iflashbuyPrice">
                  <a>
                    <span class="killPrice">6999</span>&nbsp;
                    <span class="killPrice">元</span>&nbsp;&nbsp;
                    <del class="delPrice">8499元</del></a>
                </div>
              </li>
              <!-- 单个轮播商品end -->
              <!-- 单个轮播商品start -->
              <li class="" style="position: relative">
                <a class="thumb thumb_time" href="/seckill" target="_blank">
                  <img src="/Home/static/logo.jpg"/></a>
                <a>
                  <h3 class="iflashbuyTitle">
                    <a href="/seckill" target="_blank">雷神Dino-X5Ta</a></h3>
                </a>
                <a>
                  <p style="text-align: center" class=" ellipsis">GTX1050Ti独显，芯七代I7-7700HQ处理器，8G内存，128G固态+1T机械，IPS高清屏，【如需升级16G内存加699元，请拍搭配套餐】</p></a>
                <div class="iflashbuyPrice">
                  <a>
                    <span class="killPrice">6999</span>&nbsp;
                    <span class="killPrice">元</span>&nbsp;&nbsp;
                    <del class="delPrice">8499元</del></a>
                </div>
              </li>
              <!-- 单个轮播商品end -->
              <!-- 单个轮播商品start -->
              <li class="" style="position: relative">
                <a class="thumb thumb_time" href="/seckill" target="_blank">
                  <img src="/Home/static/logo.jpg"/></a>
                <a>
                  <h3 class="iflashbuyTitle">
                    <a href="/seckill" target="_blank">雷神Dino-X5Ta</a></h3>
                </a>
                <a>
                  <p style="text-align: center" class=" ellipsis">GTX1050Ti独显，芯七代I7-7700HQ处理器，8G内存，128G固态+1T机械，IPS高清屏，【如需升级16G内存加699元，请拍搭配套餐】</p></a>
                <div class="iflashbuyPrice">
                  <a>
                    <span class="killPrice">6999</span>&nbsp;
                    <span class="killPrice">元</span>&nbsp;&nbsp;
                    <del class="delPrice">8499元</del></a>
                </div>
              </li>
              <!-- 单个轮播商品end -->
              <!-- 单个轮播商品start -->
              <li class="" style="position: relative">
                <a class="thumb thumb_time" href="/seckill" target="_blank">
                  <img src="/Home/static/logo.jpg"/></a>
                <a>
                  <h3 class="iflashbuyTitle">
                    <a href="/seckill" target="_blank">雷神Dino-X5Ta</a></h3>
                </a>
                <a>
                  <p style="text-align: center" class=" ellipsis">GTX1050Ti独显，芯七代I7-7700HQ处理器，8G内存，128G固态+1T机械，IPS高清屏，【如需升级16G内存加699元，请拍搭配套餐】</p></a>
                <div class="iflashbuyPrice">
                  <a>
                    <span class="killPrice">6999</span>&nbsp;
                    <span class="killPrice">元</span>&nbsp;&nbsp;
                    <del class="delPrice">8499元</del></a>
                </div>
              </li>
              <!-- 单个轮播商品end -->
              <!-- 单个轮播商品start -->
              <li class="" style="position: relative">
                <a class="thumb thumb_time" href="/seckill" target="_blank">
                  <img src="/Home/static/logo.jpg"/></a>
                <a>
                  <h3 class="iflashbuyTitle">
                    <a href="/seckill" target="_blank">雷神Dino-X5Ta</a></h3>
                </a>
                <a>
                  <p style="text-align: center" class=" ellipsis">GTX1050Ti独显，芯七代I7-7700HQ处理器，8G内存，128G固态+1T机械，IPS高清屏，【如需升级16G内存加699元，请拍搭配套餐】</p></a>
                <div class="iflashbuyPrice">
                  <a>
                    <span class="killPrice">6999</span>&nbsp;
                    <span class="killPrice">元</span>&nbsp;&nbsp;
                    <del class="delPrice">8499元</del></a>
                </div>
              </li>
              <!-- 单个轮播商品end -->
              <!-- 单个轮播商品start -->
              <li class="" style="position: relative">
                <a class="thumb thumb_time" href="/seckill" target="_blank">
                  <img src="/Home/static/logo.jpg"/></a>
                <a>
                  <h3 class="iflashbuyTitle">
                    <a href="/seckill" target="_blank">雷神Dino-X5Ta</a></h3>
                </a>
                <a>
                  <p style="text-align: center" class=" ellipsis">GTX1050Ti独显，芯七代I7-7700HQ处理器，8G内存，128G固态+1T机械，IPS高清屏，【如需升级16G内存加699元，请拍搭配套餐】</p></a>
                <div class="iflashbuyPrice">
                  <a>
                    <span class="killPrice">6999</span>&nbsp;
                    <span class="killPrice">元</span>&nbsp;&nbsp;
                    <del class="delPrice">8499元</del></a>
                </div>
              </li>
              <!-- 单个轮播商品end -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- 增值服务区end -->
    <div id="hot-comment" class="home-review-box xm-plain-box J_itemBox J_reviewBox is-visible">
      <div class="box-hd">
        <h2 class="title">热评产品</h2></div>
      <div class="box-bd J_brickBd">
        <ul class="review-list clearfix">
          <li class="review-item review-item-first">
            <div class="figure figure-img p_relative" style="text-align:center;">--
              <a href="#">
                <img src="/Home/static/logo.jpg" width="220" height="220" alt="雷神911黑幽灵电竞版"></a></div>
            <p class="review">
              <a href="#">散热是大问题。。。。</a></p>
            <p class="author">来自于 lsm_15296482643 的评价</p>
            <div class="info">
              <h3 class="title">
                <a href="#">雷神911黑幽灵电竞版</a></h3>
              <span class="sep">|</span>
              <p class="price">￥9499.00</p></div>
          </li>
          <li class="review-item">
            <div class="figure figure-img p_relative" style="text-align:center;">--
              <a href="#">
                <img src="/Home/static/logo.jpg" width="220" height="220" alt="雷神红蜘蛛502炫彩游戏鼠标"></a></div>
            <p class="review">
              <a href="#">快递很快，隔日达，包装也没问题。鼠标外形就很棒，上手用了一会...</a></p>
            <p class="author">来自于 ls_14897415743 的评价</p>
            <div class="info">
              <h3 class="title">
                <a href="#">雷神红蜘蛛502炫彩游戏鼠标</a></h3>
              <span class="sep">|</span>
              <p class="price">￥229.00</p></div>
          </li>
          <li class="review-item">
            <div class="figure figure-img p_relative" style="text-align:center;">--
              <a href="#">
                <img src="/Home/static/logo.jpg" width="220" height="220" alt="雷神·至潮数码机能双肩背包"></a></div>
            <p class="review">
              <a href="#">好看</a></p>
            <p class="author">来自于 lsm_14919185880 的评价</p>
            <div class="info">
              <h3 class="title">
                <a href="#">雷神·至潮数码机能双肩背包</a></h3>
              <span class="sep">|</span>
              <p class="price">￥349.00</p></div>
          </li>
          <li class="review-item">
            <div class="figure figure-img p_relative" style="text-align:center;">--
              <a href="#">
                <img src="/Home/static/logo.jpg" width="220" height="220" alt="雷神沙漠风暴H71主动降噪电竞耳机"></a></div>
            <p class="review">
              <a href="#">耳机非常好，外观和音质都非常棒。非常不错的耳机。</a></p>
            <p class="author">来自于 werewolf 的评价</p>
            <div class="info">
              <h3 class="title">
                <a href="#">雷神沙漠风暴H71主动降噪电竞耳机</a></h3>
              <span class="sep">|</span>
              <p class="price">￥499.00</p></div>
          </li>
        </ul>
      </div>
    </div>
    <div id="video" class="home-video-box xm-plain-box J_itemBox J_videoBox is-visible">
      <link rel="shortcut icon" href="favicon.ico" />
      <div class="box-hd">
        <h2 class="title">品牌视频专区</h2>
        <a class="more more-link more-video" href="video" style=" display:inline-bloc">查看全部
          <i class="iconfont "></i></a>
      </div>
      <div class="box-bd J_brickBd">
        <ul class="video-list clearfix">
          <li class="video-item video-item-first">
            <div class="figure figure-img">
              <a href="#">
                <img src="/Home/static/logo.jpg" width="296" height="180">
              </a>
            </div>
            <h3 class="title">
              <a href="#">911Air窄边框</a></h3>
            <p class="desc">轻薄全面屏性能本，无边无忌</p></li>
          <li class="video-item video-item-first">
            <div class="figure figure-img">
              <a href="#">
                <img src="/Home/static/logo.jpg" width="296" height="180">
              </a>
            </div>
            <h3 class="title">
              <a href="#">雷神911黑幽灵</a></h3>
            <p class="desc">高性能轻薄游戏本·胜负以分</p></li>
          <li class="video-item video-item-first">
            <div class="figure figure-img">
              <a href="#">
                <img src="/Home/static/logo.jpg" width="296" height="180">
              </a>
            </div>
            <h3 class="title">
              <a href="#">911M星耀版</a></h3>
            <p class="desc">星际巡航流线机身，轻薄高性能</p></li>
          <li class="video-item video-item-first">
            <div class="figure figure-img">
              <a href="#">
                <img src="/Home/static/logo.jpg" width="296" height="180">
              </a>
            </div>
            <h3 class="title">
              <a href="#">雷神911钢版</a></h3>
            <p class="desc">金属机身，就敢一钢到底</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
