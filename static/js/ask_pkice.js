//表格
$(".icon-top-img1").find("li").click(function () {
    $(this).css({"background":"#f9f9f9","border":"1px solid #74c4b3"}).siblings().css({"background":"","border":""});
    $(this).find('label').addClass('car-label').siblings().removeClass('car-label');
    $(this).siblings().find('label').removeClass('car-label');
    $(this).find('input').prop('checked', true);
    var curLi = $(this); var index = 0;
    $(".icon-top-img1").find("li").each(function (i) {
        if ($(this)[0]==curLi[0])
        {
            index = i;
        }
    });

    $(this).css({"background":"#f9f9f9","border":"1px solid #74c4b3"}).siblings().css({"background":"","border":""});
    $(this).find('label').addClass('car-label').siblings().removeClass('car-label');

    $(this).siblings().find('label').removeClass('car-label');
    $(this).find('input').prop('checked',true);

});
//点击小图标
$(".icon-bottom_text").find("li").click(function(){
    $(this).find('label').addClass('car-label').siblings().removeClass('car-label');
    $(this).siblings().find('label').removeClass('car-label');
    $(this).find('input').prop('checked',true);
});
$(".nan").on('click',function(){
    $(this).addClass('nan1').siblings().removeClass('nan1');
});
$(".label_radio").on('click',function(){
    $(this).addClass('label1').siblings().removeClass('label1');
});

//加载车型
$(function(){
	$(".cl").click(function(){
    $(".no").css("display","none");
     $('.d1').html("");
        $('.d2').html("");
        var new_ul =
        '<ul class="clearfix d1">'+
            '<li>'+
                '<p>2.5L 行政版 </p>'+
                ' <p>GRS218L-DETBKC</p>'+
                '<p>￥25,48万</p>'+
                ' <label class="car-label"><input type="radio" name="car-active"></label>'+
            '</li>'+
            '<li>'+
                 ' <p>2.5L  智享版  </p>'+
                ' <p>GRS218L-DETSKC</p>'+
                ' <p>￥28,48万</p>'+
                ' <label><input type="radio" name="car-active"></label>'+
            ' </li>'+
            '<li>'+
               ' <p>2.0T+  先锋版 </p>'+
                '<p>ARS212L-DEZBTC</p>'+
                 '<p>￥26,48万</p>'+
                 '<label><input type="radio" name="car-active"></label>'+
            '</li>'+
        '</ul>'
    ;
   
   for (var i = 0; i < 1; i++) {
        $(".icon-bottom_text").append(new_ul);
    }

});
 
$(".cli").click(function(){
        $(".no").css("display","none");
         $('.d1').html("");
        $('.d2').html("");
        
        var new_ul =
            '<ul class="clearfix d2">'+
            '<li>'+
            '<p>2.5L 行政版 </p>'+
            ' <p>GRS218L-DETBKC</p>'+
            '<p>￥25,48万</p>'+
            ' <label class="car-label"><input type="radio" name="car-active"></label>'+
            '</li>'+
            '<li>'+
            ' <p>2.5L  智享版  </p>'+
            ' <p>GRS218L-DETSKC</p>'+
            ' <p>￥28,48万</p>'+
            ' <label><input type="radio" name="car-active"></label>'+
            ' </li>'+
            ' <li>'+
            '<p>2.0T+  先锋版 </p>'+
            ' <p> ARS212L-DEZBTC</p>'+
            '<p>￥26,48万</p>'+
            ' <label><input type="radio" name="car-active"></label>'+
            '</li>'+
            '<li>'+
            ' <p>2.0T+  先锋版 </p>'+
            '<p>ARS212L-DEZBTC</p>'+
            '<p>￥26,48万</p>'+
            '<label><input type="radio" name="car-active"></label>'+
            '</li>'+
            '<li>'+
            ' <p>2.0T+  先锋版 </p>'+
            '<p>ARS212L-DEZBTC</p>'+
            '<p>￥26,48万</p>'+
            '<label><input type="radio" name="car-active"></label>'+
            '</li>'+
            '<li>'+
            ' <p>2.0T+  先锋版 </p>'+
            '<p>ARS212L-DEZBTC</p>'+
            '<p>￥26,48万</p>'+
            '<label><input type="radio" name="car-active"></label>'+
            '</li>'+
            '</ul>'
            ;
        for (var j = 0; j < 1; j++) {
            $(".icon-bottom_text").append(new_ul);
        }
   
});

$(".clic").click(function(){
        $(".no").css("display","none");
        $('.d1').html("");
        $('.d2').html("");
        var new_ul =
            '<ul class="clearfix no">'+
               ' <li>'+
                    '<p>2.0T+  先锋版 </p>'+
                   ' <p> ARS212L-DEZBTC</p>'+
                    '<p>￥26,48万</p>'+
                     '<label class="car-label"><input type="radio" name="car-active"></label>'+
               '</li>'+
               ' <li>'+
                    '<p>2.0T+  时尚版 </p>'+
                    '<p>ARS212L-DEZSTC</p>'+
                    '<p>￥29,48万</p>'+
                    '<label><input type="radio" name="car-active"></label>'+
               ' </li>'+
                '<li>'+
                   ' <p>2.0T+  豪华版</p>'+
                   ' <p>ARS212L-DEZUTC</p>'+
                   ' <p>￥36,98万元</p>'+
                    '<label><input type="radio" name="car-active"></label>'+
                    '</li>'+
                '<li>'+
                    ' <p>2.0T+  豪华版</p>'+
                    ' <p>ARS212L-DEZUTC</p>'+
                    ' <p>￥36,98万元</p>'+
                    '<label><input type="radio" name="car-active"></label>'+
                '</li>'+
                '<li>'+
                   '<p>2.0T+  尊享版</p>'+
                    '<p>GRS218L-DETBKC</p>'+
                    '<p>￥25,48万</p>'+
                     '<label><input type="radio" name="car-active"></label>'+
                '</li>'+
            '</ul>'
        ;
        for (var k = 0; k < 1; k++) {
            $(".icon-bottom_text").append(new_ul);
        }

});
   $(document).on("click",".d2>li",function(){
        $(".icon-bottom_text").find("li").click(function(){
	    $(this).find('label').addClass('car-label').siblings().removeClass('car-label');
	    $(this).siblings().find('label').removeClass('car-label');
	    $(this).find('input').prop('checked',true);
});
});
$(document).on("click",".d1>li",function(){
           $(".icon-bottom_text").find("li").click(function(){
    $(this).find('label').addClass('car-label').siblings().removeClass('car-label');
    $(this).siblings().find('label').removeClass('car-label');
    $(this).find('input').prop('checked',true);
});
});

$(document).on("click",".no>li",function(){
           $(".icon-bottom_text").find("li").click(function(){
    $(this).find('label').addClass('car-label').siblings().removeClass('car-label');
    $(this).siblings().find('label').removeClass('car-label');
    $(this).find('input').prop('checked',true);
});
});
});

