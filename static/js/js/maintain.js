document.documentElement.style.fontSize = document.documentElement.clientWidth / 16.8 + 'px';
$(function(){
	$('.header').load('header.html')
	$('.footer').load('footer.html')
	var picker1 = new Pikaday(
			{
				field: document.getElementById('datepicker_buyTime'),
				firstDay: 1,
				minDate: new Date(''),				
				maxDate: new Date('2020-12-31'),
				yearRange: [2000,2020]
			});
			var prev1 =$("#datepicker_buyTime").prev();
	        prev1.val(show())
	var picker2 = new Pikaday({
				field: document.getElementById('datepicker_showTime1'),
				firstDay: 1,
				minDate: new Date(show()),
				maxDate: new Date('2020-12-31'),
				yearRange: [2000,2020]
			});
	var prev2 =$("#datepicker_showTime1").prev();
	prev2.val(show())
	var picker3 = new Pikaday({
		field: document.getElementById('datepicker_showTime2'),
		firstDay: 1,
		minDate: new Date(show()),
		maxDate: new Date('2020-12-31'),
		yearRange: [2000,2020]
	});
	var prev3 =$("#datepicker_showTime2").prev();
	prev3.val(show())
	function show(){
		var month;
		var mydate = new Date();
		var str = "" + mydate.getFullYear() + "-";
		month=mydate.getMonth()+1;
		if(month<=9){
			month="0"+month
		}
		str += (month) + "-";
		str += mydate.getDate() + "";
		return str;
	}
	//点击预约
	checkMobile($(".tel").val())
/*验证手机号码 验证规则：11位数字，以1开头。*/

	function checkMobile(str) {
		var re = /^1\d{10}$/
		if (re.test(str)) {
			console.log("正确")
		} else {
			console.log("错误")
		}
	}
	//项目名称复选
	/*var productTr = $('.icon-bottom').find('tr:not(":first")');
	productTr.children('.last').toggle(function () {
		$(this).css('background','url(../../../../static/img/dh_03.png) no-repeat center center')		
	}, function () {
		$(this).css('background','')		
	});*/
	/*$(".last").on("click",function(){
		$(this).addClass('on').siblings().removeClass('on');		
	})
	*/
	var productTr = $('.icon-bottom').find('tr:not(":first")');
	productTr.children('.last').click(function () {
		if($(this).hasClass('icon_active')){
			$(this).removeClass('icon_active');
		}else {
			$(this).addClass('icon_active');
		}
	});

	//保养和维修切换
	$('.maintain,.vindicate').on("click", ".check", function () {
		if($(this).find('input').is(':checked')){
			$(this).children('span').css('background','url("../../../../static/img/jihuagoc_03.png") no-repeat');
			$(this).siblings().children('span').css('background','url("../../../../static/img/pic_03.gif") no-repeat');
		}
	});
	$('.icon .icon-top').find('label').click(function () {
		$(this).addClass('nan1').siblings().removeClass('nan1');
		if($('#reservation-1').is(':checked')){
			$('.vindicate').hide(2000);
			$('.maintain').show(2000);
		}else {
			$('.maintain').hide(2000);
			$('.vindicate').show(2000);
		}
	});

})

