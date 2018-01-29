document.documentElement.style.fontSize = document.documentElement.clientWidth / 16.8 + 'px';
$(function(){
	$('.header').load('header.html');
	$('.footer').load('footer.html');
	// 百度地图API功能
		var map = new BMap.Map("allmap"); // 创建Map实例
		map.enableScrollWheelZoom(true);
		map.centerAndZoom(new BMap.Point(116.404, 39.915), 12);
		var local = new BMap.LocalSearch(map, {
			renderOptions: {
				map: map,
				autoViewport: true
			}
		});
		var pointA = new BMap.Point(106.486654,29.490295);  // 创建点坐标A--大渡口区
		var pointB = new BMap.Point(106.581515,29.615467);  // 创建点坐标B--江北区
		var polyline = new BMap.Polyline([pointA,pointB], {strokeColor:"blue", strokeWeight:6, strokeOpacity:0.5});  //定义折线
		local.searchNearby("一汽丰田", "北京");
		
		$(".img-right").click(function(){
			/*$(".icon-bottom-right-bottom-bottom").css("display","block");*/
			$(".icon-bottom-right-bottom-bottom").slideToggle("hide");
			$(".icon-bottom-right-bottom-top").css("border-bottom","block")
			
			
		})	
		$(".img-right1").click(function(){
			/*$(".icon-bottom-right-bottom-bottom").css("display","block");*/
			$(".icon-bottom-right-bottom-bottom1").slideToggle("slow");
			$(".icon-bottom-right-bottom-top").css("border-bottom","none")
	
		})
	
		$(".img-right2").click(function(){			
			$(".icon-bottom-right-bottom-bottom2").slideToggle("slow");
			$(".icon-bottom-right-bottom-top").css("border-bottom","none")
		
		})
		$(".img-right3").click(function(){
			$(".icon-bottom-right-bottom-bottom3").slideToggle("slow");
			$(".icon-bottom-right-bottom-top").css("border-bottom","none")
		})
    var oDiv1 = document.getElementById('position1');
	var oDiv2 = document.getElementById('position2');
	
	var iMaxTop = oDiv1.offsetHeight - oDiv2.offsetHeight;
	oDiv2.onmousedown = function(ev) {
		
		var ev = ev || event;
		
		var disY = ev.clientY - this.offsetTop;
		
		document.onmousemove = function(ev) {
			
			var ev = ev || event;
			
			var T = ev.clientY - disY;
			
			if ( T < 0 ) {
				T = 0;
			} else if ( T > iMaxTop ) {
				T = iMaxTop;
			}
			
			oDiv2.style.top = T + 'px';
			
		}
		
		document.onmouseup = function() {
			
			document.onmousemove = document.onmouseup = null;
			
		}
		
		return false;
		
	}
})
     
    
/*$.ajax({
	type:"get",
	url:"",
	async:true,
	success: function(data){
		
	}
});*/