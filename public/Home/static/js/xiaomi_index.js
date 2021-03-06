$(function(){
	/*首页幻灯片效果 start*/
	$("#J_homeSlider").slide({
		titCell:".xm-slider-pagination a",
		mainCell:".xm-slider-control",
		autoPlay:true,
		titOnClassName:"active",
		effect:"fold",
		trigger:"click"
	});
	$(".xm-slider").mouseenter(function(){
		$(".icon-slides").css("display","inline")
	})
	$(".xm-slider").mouseleave(function(){
		$(".icon-slides").css("display","none")
	})
	/*首页幻灯片效果 end*/

	/*小米明星单品 start*/
	jQuery(".J_starGoodsCarousel").slide({
		prevCell:".box-hd .more .control-prev",
		nextCell:".box-hd .more .control-next",
		mainCell:".rainbow-list",
		autoPage:true,
		effect:"left",
        easing:"linear",
		autoPlay:true,
        interTime:6000,
		vis:5,
		scroll:5,
		trigger:"click",
		pnLoop:false
	});
	/*小米明星单品 end*/

	/* 为你推荐 */
	jQuery(".recommend-for-you").slide({
		prevCell:".box-hd .more .control-prev",
		nextCell:".box-hd .more .control-next",
		mainCell:".rainbow-list",
		autoPage:true,
		effect:"left",
		autoPlay:false,
		vis:5,
		scroll:5,
		trigger:"click",
		pnLoop:false
	});
    /* 闪购 */
    jQuery(".iflashbuy").slide({
        prevCell:".box-hd .more .control-prev",
        nextCell:".box-hd .more .control-next",
        mainCell:".rainbow-list",
        autoPage:true,
        effect:"left",
        autoPlay:false,
        vis:5,
        scroll:5,
        trigger:"click",
        pnLoop:false
    });
    /* 游戏专区 */
    jQuery(".game-zone").slide({
        prevCell:".box-hd .more .control-prev",
        nextCell:".box-hd .more .control-next",
        mainCell:".rainbow-list",
        autoPage:true,
        effect:"left",
        autoPlay:false,
        vis:5,
        scroll:5,
        trigger:"click",
        pnLoop:false
    });
    /* 游戏台式机 */
    jQuery(".game_taishi").slide({
        prevCell:".box-hd .more .control-prev",
        nextCell:".box-hd .more .control-next",
        mainCell:".rainbow-list",
        autoPage:true,
        effect:"left",
        autoPlay:false,
        vis:5,
        scroll:5,
        trigger:"click",
        pnLoop:false
    });

    /* 一元夺宝 */
    jQuery(".yiyuan-zone").slide({
        prevCell:".box-hd .more .control-prev",
        nextCell:".box-hd .more .control-next",
        mainCell:".rainbow-list",
        autoPage:true,
        effect:"left",
        autoPlay:false,
        vis:5,
        scroll:5,
        trigger:"click",
        pnLoop:false
    });

	/*分类楼层单品鼠标经过效果*/
	$(".brick-item-m").mouseenter(function(){
		$(this).addClass("brick-item-active");
	}).mouseleave(function(){
		$(this).removeClass("brick-item-active");
	})

	/*首页楼层tab切换*/
	$(".J_brickBox").slide({
		titCell:".tab-list li",
		mainCell:".span16",
		effect:"fade",
		autoPlay:false,
		titOnClassName:"tab-active",
		delayTime:0
	});

	/*首页倒计时广告 start*/
	setInterval(function(){
      $(".timer").each(function(){
        var obj = $(this);
        var endTime = new Date(parseInt(obj.attr('value')) * 1000);
		var show_day =  obj.attr('showday');
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + 28800000;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
		var myH_show=Math.floor(nMS/(1000*60*60) % 24);
        var myH=Math.floor(nMS/(1000*60*60));
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
		var a = myH+myM+myS+myMS;
        if(a>0){
			if(show_day == 'show')
			{
				var str = '剩余'+myD+'天'+myH_show+'时'+myM+'分'+myS+'秒';
			}
			else
			{
				var str = '剩余'+myH+'时'+myM+'分'+myS+'秒';
			}
        }else{
			var str = "已结束！";
		}
		obj.html(str);
      });
    }, 100);
	/*首页倒计时广告 end*/
})
