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
	// 百度地图API功能
	// var map = new BMap.Map("allmap"); // 创建Map实例
	// map.enableScrollWheelZoom(true);
	// map.centerAndZoom(new BMap.Point(116.404, 39.915), 12);
	// var local = new BMap.LocalSearch(map, {
		// renderOptions: {
			// map: map,
			// autoViewport: true
		// }
	// });
	// var pointA = new BMap.Point(106.486654,29.490295);  // 创建点坐标A--大渡口区
	// var pointB = new BMap.Point(106.581515,29.615467);  // 创建点坐标B--江北区
	// var polyline = new BMap.Polyline([pointA,pointB], {strokeColor:"blue", strokeWeight:6, strokeOpacity:0.5});  //定义折线
	// local.searchNearby("一汽丰田", "北京");
})
