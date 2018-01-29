document.documentElement.style.fontSize = document.documentElement.clientWidth / 16.8 + 'px';
$(function(){
	$('.header').load("header.html")
	$('.footer').load("footer.html")
	$(".icon-top-img1").find("li").click(function(){
		$(this).addClass('on').siblings().removeClass('on');
		$(this).find('label').addClass('car-label').siblings().removeClass('car-label');
		$(this).siblings().find('label').removeClass('car-label');
		$(this).find('input').prop('checked',true);
	})

	$(".nan").on('click',function(){
		$(this).addClass('nan1').siblings().removeClass('nan1');
	})
	$(".label-radio").on('click',function(){
		$(this).addClass('label1').siblings().removeClass('label1');
	})
	$('.protocol-label').toggle(function () {
		$(this).addClass('protocol-active').next('input').prop('checked',true);

	}, function () {
		$(this).removeClass('protocol-active').next('input').prop('checked',false)

	})

})
