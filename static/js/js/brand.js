
//日历插件
$("#fromdate").focus(function(){
	WdatePicker({
		//$("#todate").focus();
	});
});
$("#todate").focus(function(){
	WdatePicker({
	});
});
//切换列表
var TabbedContent = {
    init: function() {
        $(".tab_item").click(function() {

            var background = $(this).parent().find(".moving_bg");

            $(background).stop().animate({
                left: $(this).position()['left']
            }, {
                duration: 800
            });
            TabbedContent.slideContent($(this));
        });
    },
    slideContent: function(obj) {
        var margin = $(obj).parent().parent().find(".slide_content").width();
        margin = margin * ($(obj).prevAll().size() - 1);
        margin = margin * -1;
        $(obj).parent().parent().find(".tabslider").stop().animate({
            marginLeft: margin + "px"
        }, {
            duration: 800
        });
    }
};
$(document).ready(function() {
	TabbedContent.init();
});
//加载更多
$('.see').click(function(){
	var height=$(".tabslider").height();

	var ul=$(this).prev('ul').clone();
	var yuanul=$(this).prev('ul');
	var mt=yuanul.children().eq(0).css("margin-top");

	$(".tabslider").height(height+yuanul.height());
	ul.children().css({
		marginTop:"120px"
	});
	$(this).prev('ul').after(ul);
	ul.children().animate({
		marginTop:mt
	}, 800 );
});
$(document).ready(function() {
	var height = $(".tabslider div").eq(0).height();
	$(".tabslider").height(height);

	$(".tab_item").click(function(){
		var index=	$(this).attr("index");
		var height=	$(".tabslider div").eq(index).height();
		$(".tabslider").height(height);
	});
});

$(function() {
    var timeOut;
    timeOut=setTimeout(function(){
        var height = parseInt($(".tabslider div").eq(0).outerHeight())+85;
        $(".tabslider").css("height",height+"px");

    },100);
    
    $(".tab_item").click(function () {
        var index = $(this).attr("index");
        var height = $(".tabslider div").eq(index).outerHeight();
        $(".tabslider").height(height);
    });
});





