<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo ($pagetitle); ?>微信公众号测试站</title>
    <link rel="stylesheet" type="text/css" href="/ftms/static/bootstrap/theme/united.css" />
		<link rel="stylesheet" type="text/css" href="/ftms/static/css/common.css" />
    <script type="text/javascript" src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    
	</head>
	<body>
		<div class="container">
	    <div id="header">
	      <img id="top-logo" src="/ftms/static/img/logo.png" />
	      <div id="slogan">
	        <h2>微信公众号测试站</h2>
	        <p></p>
	      </div>
	      <ul id="menunav">
	        <li><a id="menu-home" href="/">首页</a></li>
          <li><a id="menu-aboutus" href="/Home/Index/aboutus">关于我们</a></li>
	        <li><a id="menu-service" href="/Home/Index/service">产品服务</a></li>
	        <li><a id="menu-visualization" href="#">案例展示</a></li>
	        <li><a id="menu-contact" href="/Home/Index/contact">联系我们</a></li>
	        <li>
				
					<a id="menu-contact" href="/Brand/Information/news">新闻中心</a>
			</li>
			<li>	
					<a id="menu-contact" href="/Brand/Information/activity">活动锦集</a>
			</li>
			<li>	
					<a id="menu-contact" href="/Brand/Information/media">媒体中心</a>
				
				
			</li>
	      </ul>
	    </div>
	    <div id="mainbox">
	      

<h1 class="text-center">消息推送<?php echo (THINK_VERSION); ?></h1>
<form id="binding-form" method="post" action="">
    <div class="form-group">
     <label for="openid" class="col-sm-1 control-label">接收人</label>
     <div class="col-sm-11">
       <!-- <select  id="openid" name="openid" class="form-control">
         <pigcmslist array="caruser" foreach="vo">
           <option value="{pigcms:$vo.wecha_id}">{pigcms:$vo.car_userName}</option>
         </pigcmslist>
       </select> -->
       <input type="text" name="openid" id="openid" class="form-control" placeholder="请输入接收者OpenID">
     </div>
   </div>
    <div class="form-group">
        <label for="content" class="col-sm-1 control-label">消息内容</label>
       <div class="col-sm-11">
          <textarea class="form-control" id="content" name="content" rows="8" placeholder="消息内容"></textarea>
       </div>
    </div>
    <input type="hidden" id="token" name="token" value="{pigcms:$Think.get.token}">
    <!-- <input type="hidden" id="openid" name="openid" value="{pigcms:$openid}"> -->
    <div class="text-center">
        <button type="submit" id="submit-btn" class="btn btn-primary">提交</button>
    </div>
</form>
<?php echo (session('access_token')); ?>
<div id="tip-text" class="text-center">快乐生活每一天！</div>

<style>
#submit-btn{margin: 50px;}
</style>


	    </div>	
	    <div id="footer">
	      　
		      版权所有 © 2012-<?php echo date('Y');?> 王小滔
	      
	    </div>
	  </div>
    

<script>
    $("#submit-btn").click(function(){
        /* var token = $("#token").val();
        var name = $("#car_userName").val();
        var vin = $("#vin").val(); */
        var openid = $("#openid").val();
        var content = $("#content").val();
        /* if(name == "" || openid == "" || content == "") {
            alert("姓名、Openid、内容不能为空！");
            return false;
        } */
        $.ajax({
            type : "POST",
            url : "/Home/Index/sendmsg",
            dataType : "json",
            data : {
                "content": content,
                "openid": openid
            },
            beforeSend : function() {
                $('#tip-text').html("正在提交，请稍候...<br>OpenID：" + openid);
            },
            success : function(json) {
                if (json.success === 1) {
                    var html = "<p>恭喜！消息推送成功！</p>";
                    $('#tip-text').append(html);
                  //window.location.href = "/index.php?g=Activity&m=Custom&a=template&customid=" + json.customid + "&activityid=" + json.activityid;
                }
            }
        });
        return false;
    });
</script>

  </body>
</html>