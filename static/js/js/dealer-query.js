
$(function(){
	
	
		
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
  /*  var oDiv1 = document.getElementById('position1');
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
		
	}*\
})
     
