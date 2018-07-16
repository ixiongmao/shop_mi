@extends('Home.common')

@section('Home_title', $goods->goods_name)

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
     <a href="/list/{{ $firstid }}">{{ $first }}</a>
     <code>&gt;</code>
     <a href="/list/{{ $firstid }}/{{ $secondid }}">{{ $second }}</a>
     <code>&gt;</code>
     <a href="/list/{{ $firstid }}/{{ $secondid }}/{{ $goods->goods_cates }}">{{ $three }}</a>
     <code>&gt;</code>{{ $goods->goods_name }}

     <!--<div style="float: right;">神游网</div>--></div></div>
 <div class="goods-detail">
   <div class="goods-detail-info  clearfix J_goodsDetail">
     <div class="container">
       <div class="row">
         <div class="span13  J_mi_goodsPic_block goods-detail-left-info">
           <div class="goods-pic-box" id="detail_img">
             <div class="goods-big-pic">

               <a href="{{ $goods['goods_pic'] }}" class="MagicZoomPlus" id="Zoomer" rel="hint-text: ; selectors-effect: false; selectors-class: current; zoom-distance: 60;zoom-width: 400; zoom-height: 400;">
                 <img alt="{{ $goods->goods_name }}" src="{{ $goods->goods_pic }}"></a>
             </div>
             <div class="goods-small-pic" id="item-thumbs">
               <a class="prev" href="javascript:void(0);"></a>
               <a class="next" href="javascript:void(0);"></a>
               <div class="bd">
                 <ul class="cle">
                   <!-- 左侧缩略图start -->
                   @foreach(explode(',',$details['goods_pics']) as $key=>$val)
                   <li class="current">
                     <a href="{{ $val }}" rel="zoom-id: Zoomer" rev="{{ $val }}">
                       <img alt="{{ $goods['goods_name'] }}" src="{{ $val }}"></a>
                   </li>
                   @endforeach
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

                     <dt class="goods-name">{{ $goods->goods_name }}</dt>
                     <dd class="goods-phone-type">
                       <p>{{ $goods->goods_discript }}</p>
                     </dd>
                     @if($goods->goods_sales_status && time()<$goods->goods_sales_end)
                     <div id="dis1">
                     <del>官方价格：
                       <em class="cancel">{{ $goods->goods_price }}</em></del>
                       <dd class="goods-info-head-price clearfix">
                         <span class="icon_promo">限时秒杀</span>￥
                         <span class="unit">
                           <strong id="ss" class="nala_price red">{{ $goods->goods_sales_price }}</strong></span>
                           <input type="hidden" id="h1" name="h1" value="{{ $goods->goods_sales_price }}">
                           <input type="hidden" id="" name="st1" value="{{ $goods->goods_sales_start }}">
                           <input type="hidden" id="he" name="he" value="{{ $goods->goods_sales_end }}">
                           <i class="iconfont" style="margin-left: 1px">☀</i>
                            <span id="time_tip">剩余时间：</span>
                            <span class="colockbox" id="colockbox1">
                            </span>
                       </dd>
                       </div>
                     @else
                     <div id="dis2">
                       <dd class="goods-info-head-price clearfix">
                         <span class="icon_promo">官方价格</span>￥
                         <span class="unit">
                           <strong id="ss" class="nala_price red">{{ $goods->goods_price }}</strong></span>
                           <input type="hidden" id="h1" name="h1" value="{{ $goods['goods_price'] }}">
                       </dd>
                     </div>
                     @endif
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
                           <span class="lbl">商品库存：</span>
                           <em id="ku">{{ $details['goods_nums'] }} </em></li>
                         <li>
                           <span>此商品赠送：可获
                             <em class="red">{{ $details['goods_score'] }}</em>积分</span>
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
                                @foreach(explode(',',$details['goods_set_meals']) as $k=>$v)
                                @foreach($meals as $va)
                                @if($va['id']==$v)
                                 <div class="check_item">

                                   <label for="spec_value_24790">
                                     <input type="checkbox" name="che[]" value="{{ $va['id'] }}" onclick="changePrice()" />{{ $va['goods_meals_detail'] }}</label>

                                  </div>
                                @endif
                                @endforeach
                                @endforeach
                               </div>
                               <div class="plus_icon1_1  fl" id="check_detail_1"></div>
                               <input type="hidden" name="spec_list" value="" /></div>
                           </li>
                         </ul>
                       </div>
                       <style>#choose{margin:0;} #choose li{overflow:hidden; padding-bottom:0px;} #choose .dt{width:72px; text-align:left; float:left; padding:6px 0 0;} #choose .dd{overflow:hidden;} #choose .dd .item{margin:2px 8px 2px 0; position:relative; padding: 5px;} #choose .dd .item a{border:1px solid #ccc; padding:4px 6px;overflow: visible;display: inline-block} #choose .dd .item a span{padding:0 3px; line-height:30px;} #choose .dd .item a img{width:30px; height:30px;} #choose .dd .item b{width:12px; height:12px; background:url(static/images/gou.png) no-repeat; position:absolute; bottom:0px; right:0px; overflow:hidden; display:none;} #choose .dd .item.selected a{border:2px solid #e4393c; padding:3px 5px; position: relative; overflow: visible;display: inline-block} #choose .dd .item.selected b{display:block;} #choose li.GeneralAttrImg .dt{padding-top:10px;} #choose li.GeneralAttrImg .dd .item a{padding:1px;} #choose li.GeneralAttrImg .dd .item a img{margin:1px;} #choose li.GeneralAttrImg .dd .item.selected a{padding:0;} .check_item{padding: 6px 0;} #check_detail_2{margin-top: 10px}</style>


                        <script type="text/javascript">



                                if({{ time() }}<{{$goods->goods_sales_end}}){
                                  return ;
                                }


                                function showToEndTime(id,endTime) {

                                function formatTime(time) {
                                if (time < 0){
                                  clearInterval(dsq);
                                  return
                                  location.reload(true);
                                }
                                if (time > (1825 * 1000 * 60 * 60 * 24)) return "结束时间未知,请留意活动页面观察活动是否";
                                var day = Math.floor(time / (1000 * 60 * 60 * 24));
                                var hour = Math.floor((time % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes = Math.floor((time % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((time % (1000 * 60)) / (1000));
                                return day + "天" + hour + "小时" + minutes + "分" + seconds + "秒";
                                }

                                return function() {
                                  var time = endTime.split(/-| |:/);
                                  document.getElementById(id).innerHTML = formatTime(new Date(time[0], time[1] - 1, time[2], time[3], time[4], time[5]) - new Date());
                                  }
                                }


                              dsq = setInterval(showToEndTime("colockbox1","date('Y-m-d H:i:s',{{ $goods->goods_sales_end }})"), 1000);
                       </script>


                       <!-- 计算价格 -->
                       <script>
                            function changePrice(){

                                $.ajaxSetup({
                                    headers: {
                                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                             }
                                });

                                aaa = $("input[name='h1']").val();

                                c1 = parseInt(aaa);
                                num = $('#number').val();
                                nums = parseInt(num);
                                ids = $("input[name='che[]']");
                                check_val = [];

                                for(k in ids){
                                     if(ids[k].checked){
                                      check_val.push(ids[k].value);
                                     }
                                }

                                if(check_val.length==0){
                                    $('#ss').html(c1+c1*(nums-1));
                                }else{
                                    $.post('/Home/check/meal',{'ids':check_val},function(msg){
                                    if(msg){
                                      c2 = parseInt(msg);

                                      $('#ss').html(c1+c2+c1*(nums-1));
                                    }else{
                                      $('#ss').html(c1+c1*(nums-1));
                                    }
                                    });
                                }
                            }
                       </script>



                        <script>
                       /*$(".spec_list_box .item a").click(function(){
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
                         })*/
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
                         });
                       </script>

                       <!-- countNum->xiaomi_goods.js -->
                       <ul class="sku">
                         <li class="skunum_li clearfix fl">
                           <div class="ghd">数量：</div>
                           <div class="skunum gbd" id="skunum" style="width: 250px">
                             <span class="minus" title="减少1个数量"></span>
                             <input id="number" name="number" type="text" min="1" value="1" onchange="countNums(0)">
                             <span class="add" title="增加1个数量"></span>&nbsp;件</div>
                         </li>
                       </ul>

                       <script>
                            function countNums(i) {
                            var $count_box = $("#skunum");
                            var $input = $count_box.find('input');
                            var num = $input.val();
                            if (!$.isNumeric(num)) {
                                 alert("请您输入正确的购买数量!");
                                 $input.val('1');
                                 return;
                            }
                            num = parseInt(num) + i;
                            ku = $("#ku").html();
                            stock = parseInt(ku);
                            if(num > stock){
                                 alert("请您输入正确的购买数量!");
                                 $input.val('1');
                            }
                            switch (true) {
                                case num == 0:
                                $input.val('1');
                                alert('您至少得购买1件商品！');


                                break;
                                  default:
                                    $input.val(num);
                                      break;
                            }

                            changePrices();
                            }
                      </script>

                      <script type="text/javascript">
                            function changePrices()
                                {
                                    var num = $('#number').val();
                                    var nums = parseInt(num);
                                    var bbb = $('#ss').html();
                                    var c3 = parseInt(bbb);
                                    var aaa = $("input[name='h1']").val();
                                    var c1 = parseInt(aaa);
                                    cx = c3%c1==0 ? c1*nums : (c1*nums) + (c3%c1);
                                    $('#ss').html(cx);
                                }
                      </script>

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
               <img src="{{ $goods['goods_pic'] }}"></a>
            <!--  <p style="text-align: center;">
               <img src="static/picture/111(1).jpg" width="790" height="158" alt="" /></p>
             <p style="text-align: center;">
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" /> -->
              <!--  <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" /> -->
              <!--  <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
               <img src="/Home/static/logo.jpg" width="790" height="892" alt="" />
             </p>-->

             <p style="text-align: center;">
               <img src="static/picture/151807781689826笔记本.jpg" title="1518077816252137.jpg" alt="详情描述图片" /></p>
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
               <img src="{{ $goods['goods_pic'] }}" alt="{{ $goods['goods_name'] }}" /></li>
             <li class="goods-tech-spec">
               <ul>
                @foreach(explode(',',$details['goods_tail']) as $keys=>$vals)
                 <li>{{ $vals }}</li>
                 @endforeach
                 </ul>
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
     </div>
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
         <a class="J_scrollHref" href="javascript:void(0);" name="pjxqitem" rel="nofollow">用户评价(<em>102</em>)</a></li>
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
