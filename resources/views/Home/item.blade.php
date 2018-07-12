@extends('Home.common')

@section('Home_title', '1')

@section('Left_Nav')
    @parent
@endsection

@section('content')
 <link href="/Home/static/css/goods.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript">$(document).ready(function() {
     $(".quest").mouseover(function() {
       $(this).find(".tan").css('display', 'block');
     });
     $(".quest").mouseout(function() {
       $(this).find(".tan").css('display', 'none');
     });
   });</script>
 <script type="text/javascript">$(document).ready(function() {
     $(".reward").mouseover(function() {
       $(this).find(".ky").css('display', 'block');
     });
     $(".reward").mouseout(function() {
       $(this).find(".ky").css('display', 'none');
     });
   });</script>
 <script type="text/javascript">$(document).ready(function() {
     $(".ck").mouseover(function() {
       $(this).find(".tan1").css('display', 'block');
     });
     $(".ck").mouseout(function() {
       $(this).find(".tan1").css('display', 'none');
     });
   });</script>
 <script type="text/javascript">$(document).ready(function() {
     var $tab_li = $('.tab ul li');
     $tab_li.click(function() {
       $(this).addClass('active').siblings().removeClass('active');
       var index = $tab_li.index(this);
       $('div.tab_box > div').eq(index).show().siblings().hide();
     });
   });</script>
 <script type="text/javascript">function $id(element) {
     return document.getElementById(element);
   }
   //切屏--是按钮，_v是内容平台，_h是内容库
   function reg(str) {
     var bt = $id(str + "_b").getElementsByTagName("h2");
     for (var i = 0; i < bt.length; i++) {
       bt[i].subj = str;
       bt[i].pai = i;
       bt[i].style.cursor = "pointer";
       bt[i].onclick = function() {
         $id(this.subj + "_v").innerHTML = $id(this.subj + "_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
         for (var j = 0; j < $id(this.subj + "_b").getElementsByTagName("h2").length; j++) {
           var _bt = $id(this.subj + "_b").getElementsByTagName("h2")[j];
           var ison = j == this.pai;
           _bt.className = (ison ? "": "h2bg");
         }
       }
     }
     $id(str + "_h").className = "none";
     $id(str + "_v").innerHTML = $id(str + "_h").getElementsByTagName("blockquote")[0].innerHTML;
   }</script>
 <script type="text/javascript" src="/Home/static/js/magiczoomplus.js"></script>
 <script type="text/javascript" src="/Home/static/js/easydialog.min.js"></script>
 <script type="text/javascript" src="/Home/static/js/xiaomi_goods.js"></script>
 <div class="breadcrumbs">
   <div class="container">
     <a href="../">首页</a>
     <code>&gt;</code>
     <a href="http://www.leishen.cn/list/39/0">游戏笔记本</a>
     <code>&gt;</code>
     <a href="http://www.leishen.cn/list/61/0">911系列</a>
     <code>&gt;</code>
     <a href="http://www.leishen.cn/list/159/0">黑色911系列</a>
     <code>&gt;</code>雷神911SE-E5B巡航版
     <!--<div style="float: right;">神游网</div>--></div></div>
 <div class="goods-detail">
   <div class="goods-detail-info  clearfix J_goodsDetail">
     <div class="container">
       <div class="row">
         <div class="span13  J_mi_goodsPic_block goods-detail-left-info">
           <div class="goods-pic-box" id="detail_img">
             <div class="goods-big-pic">
               <!-- <div class="g-video-con" style="width: 480px;height: 480px;">
               <i class="g-closed">
               <s>×</s>
               </i>
               <div class="g-video-wrap g-video-place">
               <video id="myVideo1" class=" video-js vjs-default-skin vjs-big-play-centered" autoplay=true; muted=true; style="background-color: #fff"  controls preload="auto" width="480" height="480" poster="" data-setup="{}">
               <source src="http://7xkyx1.com1.z0.glb.clouddn.com/video/videocenter/se.mp4" type="video/mp4"></video>
               </div>
               </div>
               <div class="g-playBtn"></div>-->
               <a href="http://www.leishen.cn/images/201705/goods_img/461_P_1494813106935.png" class="MagicZoomPlus" id="Zoomer" rel="hint-text: ; selectors-effect: false; selectors-class: current; zoom-distance: 60;zoom-width: 400; zoom-height: 400;">
                 <img alt="雷神911SE-E5B巡航版" src="/Home/static/logo.jpg"></a>
             </div>
             <div class="goods-small-pic" id="item-thumbs">
               <a class="prev" href="javascript:void(0);"></a>
               <a class="next" href="javascript:void(0);"></a>
               <div class="bd">
                 <ul class="cle">
                   <!-- 左侧缩略图start -->
                   <li class="current">
                     <a href="/Home/static/logo.jpg" rel="zoom-id: Zoomer" rev="/Home/static/logo.jpg">
                       <img alt="雷神911SE-E5B巡航版" src="/Home/static/logo.jpg"></a>
                   </li>
                   <!-- 左侧缩略图start -->
                 </ul>
               </div>
             </div>
           </div>
         </div>
         <div class="span7 goods-info-rightbox">
           <form action="javascript:addToCart(461)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">
             <div class="goods-info-box" id="item-info">
               <dl class="loaded">
                 <dt class="goods-info-head">
                   <dl>
                     <dt class="goods-name">雷神911SE-E5B巡航版</dt>
                     <dd class="goods-phone-type">
                       <p>GTX1050独显，I5-7300HQ处理器，8G内存，128G固态+1T机械</p>
                     </dd>
                     <del>官方价格：
                       <em class="cancel">5299.0</em></del>
                     <dd class="goods-info-head-price clearfix">
                       <span class="icon_promo">限时秒杀</span>￥
                       <span class="unit">
                         <strong class="nala_price red">4799.0</strong></span>
                     </dd>
                     <dd style="position: relative">
                       <ul>
                         <br/>
                         <div class="buy-mob-centent2" style="left: -20px;display: inline-block;">
                           <div class="link-buy-mob" style="display: inline-block;color:#005AA0;">去手机购买&nbsp;&nbsp;
                             <span class="icon-mob"></span></div>
                           <i class="iconfont"></i>
                           <div class="to-mob-img">
                             <img src="https://api.lwl12.com/img/qrcode/get?ct={{ $url }}&w=200&h=200" width="100%"></div>
                         </div>
                         <li>
                           <span class="lbl">商品库存</span>
                           <em>：4</em></li>
                         <li>
                           <span>此商品赠送：可获
                             <em class="red">500</em>积分</span>
                           <span>
                             <a href="#">
                               <span class="reward">
                                 <img src="static/picture/jiang.png" style="width:20px; height: 20px" alt="" />
                                 <div class="ky" style="display: none">
                                   <div class="note1 note-left note-zi gray9 noteleft2 ">
                                     <span class=" bot"></span>
                                     <span class="top"></span>雷魂可用于抽奖使用</div>
                                 </div>
                               </span>
                             </a>
                           </span>
                         </li>
                         <li style="color:#666;"></li>
                       </ul>
                     </dd>
                     <dd class="goods-info-choose">
                       <div id="choose" class="spec_list_box">
                         <ul>
                           <li>
                             <div class="dt">搭配套餐：</div>
                             <div class="dd">
                               <div class="check_main_1 fl">
                                 <div class="check_item">
                                   <label for="spec_value_24790">
                                     <input type="checkbox" name="spec_251" value="24790" id="spec_value_24790" onclick="changePrice()" />铠甲背包蓝色原价299 [加 199.00]</label>
                                  </div>
                                  <div class="check_item">
                                    <label for="spec_value_24790">
                                      <input type="checkbox" name="spec_251" value="24790" id="spec_value_24790" onclick="changePrice()" />铠甲背包蓝色原价299 [加 199.00]</label>
                                   </div>
                               </div>
                               <div class="plus_icon1_1  fl" id="check_detail_1"></div>
                               <input type="hidden" name="spec_list" value="5" /></div>
                           </li>
                         </ul>
                       </div>
                       <style>#choose{margin:0;} #choose li{overflow:hidden; padding-bottom:0px;} #choose .dt{width:72px; text-align:left; float:left; padding:6px 0 0;} #choose .dd{overflow:hidden;} #choose .dd .item{margin:2px 8px 2px 0; position:relative; padding: 5px;} #choose .dd .item a{border:1px solid #ccc; padding:4px 6px;overflow: visible;display: inline-block} #choose .dd .item a span{padding:0 3px; line-height:30px;} #choose .dd .item a img{width:30px; height:30px;} #choose .dd .item b{width:12px; height:12px; background:url(static/images/gou.png) no-repeat; position:absolute; bottom:0px; right:0px; overflow:hidden; display:none;} #choose .dd .item.selected a{border:2px solid #e4393c; padding:3px 5px; position: relative; overflow: visible;display: inline-block} #choose .dd .item.selected b{display:block;} #choose li.GeneralAttrImg .dt{padding-top:10px;} #choose li.GeneralAttrImg .dd .item a{padding:1px;} #choose li.GeneralAttrImg .dd .item a img{margin:1px;} #choose li.GeneralAttrImg .dd .item.selected a{padding:0;} .check_item{padding: 6px 0;} #check_detail_2{margin-top: 10px}</style>
                       <script>
                       $(".spec_list_box .item a").click(function() {
                           if ($(this).parent().hasClass("selected")) {
                             $(this).parents(".dd").find(".item").removeClass("selected");
                             $(this).parents(".dd").find("input:radio").prop("checked", false);
                             changePrice();
                           } else {
                             $(this).parents(".dd").find(".item").removeClass("selected");
                             $(this).parent().addClass("selected");
                             $(this).parents(".dd").find("input:radio").prop("checked", false);
                             $(this).parent().find("input:radio").prop("checked", true);
                             changePrice();
                           }
                         })
                       </script>
                       <script>$(document)
                       .ready(function() {
                           $("#show_details").click(function() {
                             $(".details .item:gt(0)").toggle();
                             $(".details").toggleClass('se');
                             $(".plus_icon").toggleClass("minus_icon");
                           });
                         });
                       </script>
                       <script>$(document)
                       .ready(function() {
                           $("#show_details_0").click(function() {
                             $(".details_0 .item:gt(0)").toggle();
                             $(".details").toggleClass('se');
                             $(".plus_icon_0").toggleClass("minus_icon_0");
                           });
                         });
                       </script>
                       <script>$(document).ready(function() {
                           $("#show_details_1").click(function() {
                             $(".details_1 .item:gt(0)").toggle();
                             $(".details").toggleClass('se');
                             $(".plus_icon_1").toggleClass("minus_icon_1");
                           });
                         });</script>
                       <script>$(document).ready(function() {
                           $("#show_details_2").click(function() {
                             $(".details_2 .item:gt(0)").toggle();
                             $(".details").toggleClass('se');
                             $(".plus_icon_2").toggleClass("minus_icon_2");
                           });
                         });</script>
                       <script>$(document).ready(function() {
                           $("#show_details_3").click(function() {
                             $(".details_3 .item:gt(0)").toggle();
                             $(".details").toggleClass('se');
                             $(".plus_icon_3").toggleClass("minus_icon_3");
                           });
                         });</script>
                       <script>$(document).ready(function() {
                           $("#check_detail").click(function() {
                             $(".check_main .check_item:gt(0)").toggle();
                             $(".details").toggleClass('se');
                             $(".plus_icon1").toggleClass("minus_icon1");
                           });
                         });</script>
                       <script>$(document).ready(function() {
                           $("#check_detail_1").click(function() {
                             $(".check_main_1 .check_item:gt(0)").toggle();
                             $(".details").toggleClass('se');
                             $(".plus_icon1_1").toggleClass("minus_icon1_1");
                           });
                         });</script>
                       <script>$(document).ready(function() {
                           $("#check_detail_2").click(function() {
                             $(".check_main_2 .check_item:gt(0)").toggle();
                             $(".details").toggleClass('se');
                             $(".plus_icon1_2").toggleClass("minus_icon1_2");
                           });
                         });</script>
                       <script>$(document).ready(function() {
                           $("#check_detail_3").click(function() {
                             $(".check_main_3 .check_item:gt(0)").toggle();
                             $(".details").toggleClass('se');
                             $(".plus_icon1_3").toggleClass("minus_icon1_3");
                           });
                         });</script>
                       <ul class="sku">
                         <li class="skunum_li clearfix fl">
                           <div class="ghd">数量：</div>
                           <div class="skunum gbd" id="skunum" style="width: 250px">
                             <span class="minus" title="减少1个数量"></span>
                             <input id="number" name="number" type="text" min="1" value="1" onchange="countNum(0)">
                             <span class="add" title="增加1个数量"></span>&nbsp;件</div>
                         </li>
                       </ul>
                     </dd>
                     <div class="clearfix"></div>
                     <dd class="goods-info-head-cart">
                       <a href="javascript:addToCart_goods(461)" class="btn  btn-primary goods-add-cart-btn" id="buy_btn">
                         <i class="iconfont"></i>加入购物车</a>
                       <a href="javascript:collect_goods(461)" class=" btn btn-gray  goods-collect-btn " id="fav-btn">
                         <i class="iconfont"></i>喜欢</a></dd>
                     <dd class="goods-info-head-userfaq clearfix">
                       <ul style="margin-top: -10px">
                         <li class="J_scrollcomment mid " style="width: 100px">
                           <a class="J_scrollHref" href="#goodstiwen">
                             <i class="iconfont"></i> 提问
                             <b>0</b>
                           </a>
                         </li>
                         <li class="J_scrollcomment mid" style="width: 100px">
                           <a class="J_scrollHref" href="#goodspingjia">
                             <i class="iconfont"></i> 评价
                             <b>102</b>
                           </a>
                         </li>
                         <li class="J_scrollcomment " style="width: 130px">
                           <a class="J_scrollHref" href="#goodspingjia">
                             <i class="iconfont"></i> 满意度
                             <b>97%</b>
                           </a>
                         </li>
                       </ul>
                     </dd>
                   </dl>
                 </dt>
               </dl>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
   <div class="taocan_wrap">

   </div>
   <div class="full-screen-border"></div>
   <div class="goods-detail-main">
     <div class="goods-detail-nav" id="goodsDetail">
       <div class="container">
         <ul class="detail-list">
           <li>
             <a class="J_scrollHref" rel="nofollow" href="javascript:void(0);">详情描述</a></li>
           <li>
             <a class="J_scrollHref" rel="nofollow" href="javascript:void(0);">规格参数</a></li>
           <li>
             <a class="J_scrollHref" href="javascript:void(0);" rel="nofollow">用户评价(<small>102</small>)</a></li>
           <li>
             <a class="J_scrollHref" rel="nofollow" href="javascript:void(0);">商品提问</a></li>
         </ul>
       </div>
     </div>
     <div class="product_tabs">
       <div class="goods-detail-desc goods_con_item">
         <div class="container">
           <div class="shape-container">
             <a href="#" target="_blank">
               <img src="/Home/static/logo.jpg"></a>
             <p style="text-align: center;">
               <img src="static/picture/111(1).jpg" width="790" height="158" alt="" /></p>
             <p style="text-align: center;">
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
             </p>
             <p style="text-align: center;">
               <img src="static/picture/151807781689826笔记本.jpg" title="1518077816252137.jpg" alt="笔记本.jpg" /></p>
           </div>
         </div>
         <!--<div class="shouwang" style="margin-top: 20px">-->
         <!--<img src="static/picture/757960439095603811.jpg" alt="守望先锋"/>-->
         <!--</div>--></div>
       <div class="goods-detail-nav-name-block goods_con_item">
         <div class="container main-block">
           <div class="border-line"></div>
           <h2 class="nav-name">规格参数</h2></div>
       </div>
       <div class="goods-detail-param">
         <div class="container">
           <ul class="param-list">
             <li class="goods-img">
               <img src="/Home/static/logo.jpg" alt="雷神911SE-E5B巡航版" /></li>
             <li class="goods-tech-spec">
               <ul>
                 <li>产品名称：雷神911SE-E5B巡航版</li>
                 <li>型号：雷神911SE-E5B巡航版</li>
                 <li>颜色：黑色</li>
                 <li>操作系统：其他</li>
                 <li>CPU类型：I5-7300HQ</li>
                 <li>CPU缓存：6M</li>
                 <li>集成核显：Intel®HD Graphics 630</li>
                 <li>核心：四核</li>
                 <li>芯片组：英特尔® HM175高速芯片组</li>
                 <li>内存容量：8G</li>
                 <li>内存类型：DDR4</li>
                 <li>插槽数量：2</li>
                 <li>最大支持内存：32G</li>
                 <li>硬盘容量：128GSSD+1T</li>
                 <li>独显型号：GTX1050</li>
                 <li>显存容量：2G</li>
                 <li>光驱类型：无</li>
                 <li>屏幕尺寸：15.6英寸</li>
                 <li>显示比例：16:9</li>
                 <li>物理分辨率：1920X1080</li>
                 <li>屏幕类型：全高清</li>
                 <li>内置蓝牙：蓝牙Bluetooth v4.2</li>
                 <li>局域网：内置10/100/1000M以太局域网</li>
                 <li>无线局域网：802.11ac/a/b/g/n</li>
                 <li>端口介绍：USB Type-A*3 USB Type-c*1</li>
                 <li>扬声器：内置扬声器</li>
                 <li>键盘：孤岛式全尺寸白色背光键盘</li>
                 <li>摄像头：1.0M HD视频摄像头</li>
                 <li>读卡器：有</li>
                 <li>电池容量：6芯</li>
                 <li>电源适配器：47Wh</li>
                 <li>尺寸：378(W)×267(D)×26.5(H) mm</li>
                 <li>净重：约2.90Kg(含有电池，具体重量依据产品出货配置为准)</li></ul>
             </li>
           </ul>
         </div>
       </div>
       <div class="goods-detail-nav-name-block goods_con_item" id="goodspingjia">
         <div class="container main-block">
           <div class="border-line"></div>
           <h2 class="nav-name">用户评价</h2></div>
       </div>
       <div class="goods-detail-comment hasContent z-com-box-head">
         <div id="ECS_COMMENT">
           <div class="goods-detail-comment-groom" style="border-width:0 0 1px 0">
             <div class="container">
               <ul class="main-block clearfix">
                 <li class="percent">
                   <div class="per-num">
                     <i>97</i>%</div>
                   <div class="per-title">购买后满意</div>
                   <div class="per-amount">
                     <i>102</i>名用户投票</div>
                 </li>
                 <li>
                   <ul class="z-point-list" id="min_points">
                     <li>
                       <label>好评：</label>
                       <p>
                         <span style="width: 100%;"></span>
                       </p>
                       <em>97%</em></li>
                     <li>
                       <label>中评：</label>
                       <p>
                         <span style="width: 51%;"></span>
                       </p>
                       <em>1%</em></li>
                     <li>
                       <label>差评：</label>
                       <p>
                         <span style="width: 53%;"></span>
                       </p>
                       <em>2%</em></li>
                   </ul>
                 </li>
                 <li class="i-want-comment">
                   <div>对自己购买过的商品进行评价，它将成为大家购买参考依据。</div>
                   <!-- <div class="good_com_box">
                   所有用户都可以对该商品 <a href="javascript:void(0);" onClick="commentsFrom()" id="go_com" class="btn btn-primary">我要评价</a></div>
                   -->
                 </li>
               </ul>
             </div>
           </div>
           <div class="goods-detail-comment-content">
             <div class="container">
               <div class="row">
                 <div class="span20 goods-detail-comment-list">
                   <div class="comment-order-title">
                     <div class="left-title">
                       <h3 class="comment-name">最有帮助的评价（102）</h3></div>
                   </div>
                   <ul class="comment-box-list">
                     <li class="item-rainbow-1">
                       <div class="user-image">
                         <img class="face_img" src="static/picture/51_big.jpg"></div>
                       <div class="user-emoj">超爱
                         <i class="iconfont"></i></div>
                       <div class="user-name-info">
                         <span class="user-name">l***4</span>
                         <span class="user-time">2018-06-01 07:19:49</span>
                         <span class="pro-info"></span>
                       </div>
                       <div class="zambia">
                         <div onclick="Czambia('Czambia-4273');">
                           <i>
                             <img src="static/picture/unie644.png" alt="" style="height: 16px;-webkit-transform: rotateZ(180deg); -moz-transform: rotateZ(180deg); -o-transform: rotateZ(180deg); -ms-transform: rotateZ(180deg);transform: rotateZ(180deg);" /></i>
                           <span id="Czambia-4273" style="padding-left:8px;">0</span></div>
                         <div onclick="Czambia('Czambia1-4273');">
                           <i>
                             <img src="static/picture/unie644.png" alt="" style="height: 16px;" /></i>
                           <span id="Czambia1-4273" style="padding-left:8px;">0</span></div>
                       </div>
                       <dl class="user-comment">
                         <dt class="user-comment-content">
                           <p class="content-detail">塑料感很强，别的都还好。就是w10没给激活密钥。</p></dt>
                         <span>
                           <div class="clearfix img-gather" id="thumbs">
                             <a href="static/images/2018052991245461520063350.jpg" style="background-image:url('')"></a>
                             <a href="static/images/20180529912454614022061769.jpg" style="background-image:url('')"></a>
                           </div>
                           <dd class="user-comment-self-input hide">
                             <div class="input-block">
                               <input type="text" placeholder="回复楼主" class="J_commentAnswerInput">
                               <a href="javascript:void(0);" class="btn  answer-btn J_commentAnswerBtn">回复</a></div>
                           </dd>
                       </dl>
                     </li>
                     <li class="item-rainbow-2">
                       <div class="user-image">
                         <img class="face_img" src="static/picture/03_big.jpg"></div>
                       <div class="user-emoj">很失望
                         <i class="iconfont"></i></div>
                       <div class="user-name-info">
                         <span class="user-name">o***7</span>
                         <span class="user-time">2018-04-16 09:36:53</span>
                         <span class="pro-info"></span>
                       </div>
                       <dl class="user-comment">
                         <dt class="user-comment-content">
                           <p class="content-detail">不愉快的购物，回来以后磁盘一直在响，然后分析了一下，简直吓死人，（图中仅为一部分，应该是下水沟捡的给顾客安上了）。问客服，直接甩了一句去售后检测，尼玛检测个磁盘我还跑到省外去？而且态度很恶劣，爱搭不理，花这么多钱买了个不愉快真是醉了，上当上一次，也就这一回了。劝大家买的时候千万慎重，最好买售后比较好的，而且送的鼠标还偶尔失灵，这机器根本不像新的。</p></dt>
                         <span>
                           <dd class="user-comment-self-input hide">
                             <div class="input-block">
                               <input type="text" placeholder="回复楼主" class="J_commentAnswerInput">
                               <a href="javascript:void(0);" class="btn  answer-btn J_commentAnswerBtn">回复</a></div>
                           </dd>
                       </dl>
                     </li>


                     <li class="pagenav">

                         <a href="" class="step" style="border:1px solid #eee; color:#ccc;">上一页</a>
                         <a href="" class="step">下一页</a>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
           <div class="z-com-box-head">
             <div class="z-com-list" id="ECS_COMMENT">
               <div id="compage"></div>
             </div>
             <div id="commentsFrom">
               <form action="javascript:;" onsubmit="submitComment(this)" method="post" name="commentForm" id="commentForm">
                 <ul class="form addr-form" id="addr-form">
                   <span style="position:absolute; right:10px; top:5px; font-size:24px; cursor:pointer;" onClick="easyDialog.close();">×</span>
                   <li>
                     <label>用户名</label>匿名用户</li>
                   <li>
                     <label>E-mail</label>
                     <input type="text" name="email" id="email" maxlength="100" value="" class="txt" /></li>
                   <li>
                     <label>评价等级</label>
                     <input name="comment_rank" type="radio" value="1" id="comment_rank1" />
                     <img src="static/picture/stars1.gif" />
                     <input name="comment_rank" type="radio" value="2" id="comment_rank2" />
                     <img src="static/picture/stars2.gif" />
                     <input name="comment_rank" type="radio" value="3" id="comment_rank3" />
                     <img src="static/picture/stars3.gif" />
                     <input name="comment_rank" type="radio" value="4" id="comment_rank4" />
                     <img src="static/picture/stars4.gif" />
                     <input name="comment_rank" type="radio" value="5" checked="checked" id="comment_rank5" />
                     <img src="static/picture/stars5.gif" /></li>
                   <li>
                     <label>评论内容</label>
                     <textarea name="content" class="txt" style="height:80px; width:300px;"></textarea>
                   </li>
                   <li>
                     <input type="hidden" name="cmt_type" value="0" />
                     <input type="hidden" name="id" value="461" />
                     <label>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                     <input name="" type="submit" value="提交评论" class="btn" style="border:none; height:40px; cursor:pointer; width:150px; font-size:16px;"></li>
                 </ul>
               </form>
             </div>
           </div>
         </div>
       </div>
       <div class="goods-detail-nav-name-block goods_con_item">
         <div class="container main-block">
           <div class="border-line"></div>
           <h2 class="nav-name">商品提问</h2></div>
       </div>
       <div class="container">
         <div id="goodstiwen">
           <form action="#" method="post" name="question">
             <div class="question-input">
               <input placeholder="输入你的提问" type="text" name="qu" class="input-question">
               <input type="hidden" name="goods_id" value="461">
               <input type="hidden" name="goods_name" value="">
               <input type="hidden" name="act" value="question">
               <input value="提交" type="submit" class="btn-question"></div>
           </form>
         </div>
         <div class="z-com-list" id="ECS_QUESTION">
           <div class="goods-detail-comment-content">
             <div class="container">
               <div class="row">
                 <div class="span20 goods-detail-comment-list">
                   <div class="comment-order-title">
                     <div class="left-title">
                       <h3 class="comment-name">最有帮助的提问（0）</h3></div>
                   </div>
                   <ul class="comment-box-list">暂时还没有任何用户评论
                     <li class="pagenav">
                       <form name="selectPageForm" action="/" method="get">
                         <a href="javascript:;" class="step" style="border:1px solid #eee; color:#ccc;">上一页</a>
                         <a href="javascript:;" class="step" style="border:1px solid #eee; color:#ccc;">下一页</a></form>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div>
     <div class="goods-detail-nav-name-block goods_con_item">
       <div class="container main-block">
         <div class="border-line"></div>
         <h2 class="nav-name" style="width: 416px; margin-left: -202px;">购买了该商品的用户还购买了</h2></div>
     </div>
     <div class="goods-detail-param" style="margin-bottom: 50px!important;">
       <div class="container">
         <ul class="param-list clearfix" style="padding: 0;">
           <li class="fore1 fl" style="box-sizing: border-box;width: 20%;padding: 20px;text-align: center;">
             <div class="p-img">
               <a target="_blank" title="雷神猎兵M301幻彩游戏鼠标" href="http://www.leishen.cn/item/448">
                 <img height="200px" width="200px" alt="雷神猎兵M301幻彩游戏鼠标" src="static/picture/448_thumb_g_1490656224997.jpg" class="loading-style2"></a>
             </div>
             <div class="p-name">
               <a target="_blank" title="雷神猎兵M301幻彩游戏鼠标" href="http://www.leishen.cn/item/448">雷神猎兵M301幻彩游戏鼠标</a></div>
             <div class="p-price">
               <strong class="J-p-718196">159.0</strong></div>
           </li>
           <li class="fore2 fl" style="box-sizing: border-box;width: 20%;padding: 20px;text-align: center;">
             <div class="p-img">
               <a target="_blank" title="雷神电竞鼠标垫P30（加厚）" href="http://www.leishen.cn/item/193">
                 <img height="200px" width="200px" alt="雷神电竞鼠标垫P30（加厚）" src="static/picture/193_thumb_g_1517336209041.jpg" class="loading-style2"></a>
             </div>
             <div class="p-name">
               <a target="_blank" title="雷神电竞鼠标垫P30（加厚）" href="http://www.leishen.cn/item/193">雷神电竞鼠标垫P30（加厚）</a></div>
             <div class="p-price">
               <strong class="J-p-718196">59.0</strong></div>
           </li>
           <li class="fore3 fl" style="box-sizing: border-box;width: 20%;padding: 20px;text-align: center;">
             <div class="p-img">
               <a target="_blank" title="雷神K30黑轴/青轴/茶轴机械键盘" href="http://www.leishen.cn/item/538">
                 <img height="200px" width="200px" alt="雷神K30黑轴/青轴/茶轴机械键盘" src="static/picture/538_thumb_g_1508960729824.jpg" class="loading-style2"></a>
             </div>
             <div class="p-name">
               <a target="_blank" title="雷神K30黑轴/青轴/茶轴机械键盘" href="http://www.leishen.cn/item/538">雷神K30黑轴/青轴/茶轴机械键盘</a></div>
             <div class="p-price">
               <strong class="J-p-718196">199.0</strong></div>
           </li>
           <li class="fore4 fl" style="box-sizing: border-box;width: 20%;padding: 20px;text-align: center;">
             <div class="p-img">
               <a target="_blank" title="雷神机械键盘掌托 胡桃木" href="http://www.leishen.cn/item/312">
                 <img height="200px" width="200px" alt="雷神机械键盘掌托 胡桃木" src="static/picture/312_thumb_g_1505270437742.jpg" class="loading-style2"></a>
             </div>
             <div class="p-name">
               <a target="_blank" title="雷神机械键盘掌托 胡桃木" href="http://www.leishen.cn/item/312">雷神机械键盘掌托 胡桃木</a></div>
             <div class="p-price">
               <strong class="J-p-718196">69.0</strong></div>
           </li>
           <li class="fore5 fl" style="box-sizing: border-box;width: 20%;padding: 20px;text-align: center;">
             <div class="p-img">
               <a target="_blank" title="雷神ST Plus标准版" href="http://www.leishen.cn/item/518">
                 <img height="200px" width="200px" alt="雷神ST Plus标准版" src="static/picture/518_thumb_g_1512686561937.jpg" class="loading-style2"></a>
             </div>
             <div class="p-name">
               <a target="_blank" title="雷神ST Plus标准版" href="http://www.leishen.cn/item/518">雷神ST Plus标准版</a></div>
             <div class="p-price">
               <strong class="J-p-718196">4999.0</strong></div>
           </li>
         </ul>
       </div>
     </div>
     <div style="height: 50px;width: 100px;margin: 0 auto;"></div>
   </div>
 </div>
 </div>
 </div>
 <div class="goods-sub-bar" id="goodsSubBar">
   <div class="container">
     <ul class="detail-list">
       <li>
         <a class="J_scrollHref" rel="nofollow" href="javascript:void(0);">详情描述</a></li>
       <li>
         <a class="J_scrollHref" rel="nofollow" href="javascript:void(0);">规格参数</a></li>
       <li>
         <a class="J_scrollHref" href="javascript:void(0);" name="pjxqitem" rel="nofollow">用户评价(
           <em>102</em>)</a></li>
       <li>
         <a class="J_scrollHref" rel="nofollow" href="javascript:void(0);">商品提问</a></li>
     </ul>
     <dl class="goods-sub-bar-info clearfix">
       <dt>
         <img src="/Home/static/logo.jpg" alt="雷神911SE-E5B巡航版" /></dt>
       <dd>
         <strong>雷神911SE-E5B巡航版</strong>
         <p>
           <em>GTX1050独显，I5-7300HQ处理器，8G内存，128G固态+1T机械</em></p>
       </dd>
     </dl>
     <a href="javascript:addToCart(461)" class="btn btn-primary goods-add-cart-btn">
       <i class="iconfont"></i>加入购物车</a></div>
 </div>


   <script type="text/javascript" src="/Home/static/js/touchtouch.jquery.js"></script>
   <script>$(function() {
       //图片事件,img-gather
       $('#thumbs a').touchTouch();
       $(document).ready(function() {
         $(".yuspeak").mouseover(function() {
           $(this).find(".tan2").css('display', 'block');
         });
         $(".yuspeak").mouseout(function() {
           $(this).find(".tan2").css('display', 'none');
         });
       });
     });</script>
@endsection
