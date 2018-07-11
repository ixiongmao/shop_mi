/**
 * Created by Administrator on 2017/5/18.
 */
$(function () {
    var bargin_input = parseFloat($("#bargin_input").val());
    var bargin_max =parseFloat($("#bargin_max").val());
    var re = /^[0-9]+.?[0-9]*$/;


})
function inputonblur(input) {
    var re = /^[0-9]+.?[0-9]*$/;
    var bargin_input = parseFloat($("#bargin_input").val());
    var bargin_max =parseFloat($("#bargin_max").val());
    if (!re.test(bargin_input)) {
        $(".bargain_price").text($(".yuan_price").text());
        return false;
    }else{
        var bargain_price =parseFloat($(".yuan_price").text()) - parseFloat($("#bargin_input").val());
        $(".bargain_price").text(bargain_price);
    }


}
$("#bargin_true").click(function () {
    var re = /^[0-9]+.?[0-9]*$/;
    var bargin_input = parseFloat($("#bargin_input").val());
    var bargin_max =parseFloat($("#bargin_max").val());
    var goodsnum = parseInt($("#number").val());
    var goodnum_bargin = bargin_input/goodsnum;
    var info ="请输入"+goodsnum+"的倍数";
    function isInteger(obj) {
        return typeof obj === 'number' && obj%1 === 0
    }
    if($("#bargin_input").val()==""){
        layer.msg("请输入砍价价格");
        $(".bargain_price").text($(".yuan_price").text());
        return false;
    }else if (!re.test(bargin_input)) {
        layer.msg("请输入有效的数字");
        $("#bargin_input").val('');
        $(".bargain_price").text($(".yuan_price").text());
        return false;
    } else if(isInteger(goodnum_bargin)!==true){
        layer.msg(info);
        $(".bargain_price").text($(".yuan_price").text());
        return false;
    }else if(isInteger(bargin_input)!==true){
       layer.msg("请输入整数");
        $("#bargin_input").val('');
        $(".bargain_price").text($(".yuan_price").text());
        return false;
    }else if(bargin_input>bargin_max){
        $("#bargin_input").val('');
        $(".bargain_price").text($(".yuan_price").text());
        layer.msg("亲，您砍的太狠了，请重新输入！",{
            time:1700,

        },function () {
            $("#bargin_input").val('');
            $(".bargain_price").text($(".yuan_price").text());

        })
        return false;
    }else{
        var bargain_price =parseFloat($(".yuan_price").text()) - parseFloat($("#bargin_input").val());
        var number = parseFloat($("#number").val());
        var bargain_k =parseFloat( $("#bargin_input").val());
        $(".bargain_price").text(bargain_price);
        $("#ECS_SHOPPRICE").text(bargain_price);
        layer.msg("砍价成功",{
            time:1600,

        },function () {
            $("#bargain_num").val(bargin_input);
            $(".bargain_main").removeClass("is-visible");
            var bargain_k1 = bargain_k/number;
            $("#bargain_num").val(bargain_k1);
        })
    }
});
$(".Bargain").click(function () {
    $(".bargain_main").addClass("is-visible");
    $("#bargin_input").val('');
   /* var yuanprice = $("#ECS_SHOPPRICE").text();
    $(".yuan_price").text($("#ECS_SHOPPRICE").text());*/
    $(".bargain_price").text($(".yuan_price").text());
});
$("#bargin_flase").click(function () {
    $(".bargain_main").removeClass("is-visible");
});
$('.bargain_main').on('click', function(event){
    if( $(event.target).is('.bargain_close') ) {
        event.preventDefault();
        $(this).removeClass('is-visible');
    }
});