<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>


 <html lang="en"> 



<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<head>
   <meta charset="utf-8" />
   <title>丰田官网后台</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="Mosaddek" name="author" />
   <link href="/ftms/static/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="/ftms/static/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="/ftms/static/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="/ftms/static/css/font-awesome.css" rel="stylesheet" />
   <link href="/ftms/static/css/style.css" rel="stylesheet" />
   <link href="/ftms/static/css/style-responsive.css" rel="stylesheet" />
   <link href="/ftms/static/css/style-default.css" rel="stylesheet" id="style_color" />
   <link href="/ftms/static/bootstrap/css/bootstrap-fullcalendar.css" rel="stylesheet" />
   <link href="/ftms/static/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen">
</head>


<body class="fixed-top">
   
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       
       <div class="navbar-inner">
           <div class="container-fluid">
               
               <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
               </div>
               
               
               <a class="brand" href="<?php echo U('Index/index');?>">
                   <img src="/ftms/static/img/logo.png" alt="Metro Lab" />
               </a>
               
               
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               
               <div id="top_menu" class="nav notify-row">
                   
                   <ul class="nav top-menu">
                       
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-tasks"></i>
                               <span class="badge badge-important">6</span>
                           </a>
                           <ul class="dropdown-menu extended tasks-bar">
                               <li>
                                   <p>你有6条任务</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                         <div class="desc">控制台</div>
                                         <div class="percent">44%</div>
                                       </div>
                                       <div class="progress progress-striped active no-margin-bot">
                                           <div class="bar" style="width: 44%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">数据库更新</div>
                                           <div class="percent">65%</div>
                                       </div>
                                       <div class="progress progress-striped progress-success active no-margin-bot">
                                           <div class="bar" style="width: 65%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">手机开发进度</div>
                                           <div class="percent">87%</div>
                                       </div>
                                       <div class="progress progress-striped progress-info active no-margin-bot">
                                           <div class="bar" style="width: 87%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">手机App进度</div>
                                           <div class="percent">33%</div>
                                       </div>
                                       <div class="progress progress-striped progress-warning active no-margin-bot">
                                           <div class="bar" style="width: 33%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">控制台</div>
                                           <div class="percent">90%</div>
                                       </div>
                                       <div class="progress progress-striped progress-danger active no-margin-bot">
                                           <div class="bar" style="width: 90%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li class="external">
                                   <a href="#">查看所有任务</a>
                               </li>
                           </ul>
                       </li>
                       
                       
                       <li class="dropdown" id="header_inbox_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-envelope-alt"></i>
                               <span class="badge badge-important">5</span>
                           </a>
                           <ul class="dropdown-menu extended inbox">
                               <li>
                                   <p>你有5条消息</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="/ftms/static/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jonathan Smith</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, 这是个消息列子.
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="/ftms/static/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jhon Doe</span>
									<span class="time">10 mins</span>
									</span>
									<span class="message">
									 Hi, 最近咋样?
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="/ftms/static/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jason Stathum</span>
									<span class="time">3 hrs</span>
									</span>
									<span class="message">
									    This is awesome dashboard.
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="/ftms/static/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jondi Rose</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is metrolab
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">See all messages</a>
                               </li>
                           </ul>
                       </li>
                       
                       
                       <li class="dropdown" id="header_notification_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                               <i class="icon-bell-alt"></i>
                               <span class="badge badge-warning">7</span>
                           </a>
                           <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>你有7条提示信息</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Server #3 overloaded.
                                       <span class="small italic">34 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-warning"><i class="icon-bell"></i></span>
                                       Server #10 not respoding.
                                       <span class="small italic">1 Hours</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Database overloaded 24%.
                                       <span class="small italic">4 hrs</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-success"><i class="icon-plus"></i></span>
                                       New user registered.
                                       <span class="small italic">Just now</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                       Application error.
                                       <span class="small italic">10 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">See all notifications</a>
                               </li>
                           </ul>
                       </li>
                       

                   </ul>
               </div>
               
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       
                       <li class="dropdown mtop5">

                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                               <i class="icon-comments-alt"></i>
                           </a>
                       </li>
                       <li class="dropdown mtop5">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                               <i class="icon-headphones"></i>
                           </a>
                       </li>
                       
                       
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="/ftms/static/img/avatar1_small.jpg" alt="">
                               <span class="username"><?php echo session('admin.username');?></span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu extended logout">
                               <li><a href="#"><i class="icon-user"></i>我的资料</a></li>
                               <li><a href="#"><i class="icon-cog"></i>我的设置</a></li>
                               <li><a href="<?php echo U('Login/login');?>"><i class="icon-key"></i>退出</a></li>
                           </ul>
                       </li>
                       
                   </ul>
                   
               </div>
           </div>
       </div>
       
   </div>
   <div id="container" class="row-fluid">
      
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

         
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         
         <ul class="sidebar-menu" style="padding-bottom:0;">
              <li class="sub-menu active">
                  <a class="" href="<?php echo U('Index/index');?>">
                      <i class="icon-dashboard"></i>
                      <span>基础信息设置</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>品牌车系</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo U('Brandcars/data_import');?>">数据导入</a></li>
                      <li><a class="" href="<?php echo U('Brandcars/vehicle_class');?>">车型分类</a></li>
                      <li><a class="" href="<?php echo U('Brandcars/paul_nav');?>">车系导航</a></li>
                      <li><a class="" href="<?php echo U('Brandcars/best_manage');?>">精品管理</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>经销商信息管理</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo U('Dealers/dealers_list');?>">经销商列表</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>一汽丰田基础信息</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo U('Basicinf/enterprise_style');?>">企业风采</a></li>
                      <li><a class="" href="<?php echo U('Basicinf/brand_history');?>">品牌历程</a></li>
                      <li><a class="" href="<?php echo U('Basicinf/contact_us');?>">联系我们</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>接口信息管理</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo U('Apimanage/tianmao');?>">天猫接口</a></li>
                      <li><a class="" href="<?php echo U('Apimanage/third_api');?>">第三方接口</a></li>
                      <li><a class="" href="<?php echo U('Apimanage/members');?>">会员系统</a></li>
                      <li><a class="" href="<?php echo U('Apimanage/dlr_space');?>">dlr-space</a></li>
                      <li><a class="" href="<?php echo U('Apimanage/central_database');?>">中央数据库</a></li>
                      <li><a class="" href="<?php echo U('Apimanage/tact');?>">TACT</a></li>
                      <li><a class="" href="<?php echo U('Apimanage/other');?>">其他</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>素材库</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo U('Material/classification');?>">分类</a></li>
                      <li><a class="" href="<?php echo U('Material/application');?>">应用</a></li>
                      <li><a class="" href="<?php echo U('Material/lists');?>">列表</a></li>
                  </ul>
              </li>
          </ul>
          <ul class="sidebar-menu" style="padding-top:0;">
              <li class="sub-menu active">
                  <a class="" href="<?php echo U('Index/index');?>">
                      <i class="icon-dashboard"></i>
                      <span>基础功能设置</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>资讯管理</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo U('Information/sel_type');?>">发布资讯</a></li>
                      <li><a class="" href="<?php echo U('Information/info_list');?>">资讯列表</a></li>
                      <li><a class="" href="<?php echo U('Information/draft_box');?>">草稿箱</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-cogs"></i>
                      <span>活动管理</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo U('Activity/activity_list');?>">活动列表</a></li>
                      <li><a class="" href="<?php echo U('Activity/activity_add');?>">发布活动</a></li>
                      <li><a class="" href="<?php echo U('Activity/activity_audit');?>">活动审核</a></li>
                      <li><a class="" href="<?php echo U('Activity/draft_box');?>">草稿箱</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-tasks"></i>
                      <span>购车工具管理</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo U('Cartool/first_drive');?>">预约试驾</a></li>
                      <li><a class="" href="<?php echo U('Cartool/check_dealers');?>">经销商查询</a></li>
                      <li><a class="" href="<?php echo U('Cartool/offer_consulting');?>">报价咨询</a></li>
                      <li><a class="" href="<?php echo U('Cartool/calculator');?>">购车计算器</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-th"></i>
                      <span>购车服务管理</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo U('Buycarservice/financial');?>">金融服务</a></li>
                      <li><a class="" href="<?php echo U('Buycarservice/insurance');?>">保险服务</a></li>
                      <li><a class="" href="<?php echo U('Buycarservice/used_car');?>">安心二手车(链接)</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-fire"></i>
                      <span>用车服务管理</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo U('Usecarservice/upkeep');?>">保养服务</a></li>
                      <li><a class="" href="<?php echo U('Usecarservice/maintenance');?>">维修服务</a></li>
                      <li><a class="" href="<?php echo U('Usecarservice/extended_warranty');?>">延保服务</a></li>
                      <li><a class="" href="<?php echo U('Usecarservice/rescue');?>">紧急救援</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-trophy"></i>
                      <span>报表管理</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a href="<?php echo U('Report/basis_report');?>" class="">基础报表</a></li>
                      <li><a href="<?php echo U('Report/smart_report');?>" class="">智能报表</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-map-marker"></i>
                      <span>流量统计代码植入</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a href="<?php echo U('Code/check_media');?>" class="">检测媒体渠道来源</a></li>
                      <li><a href="<?php echo U('Code/check_IP');?>" class="">IP监测</a></li>
                      <li><a href="<?php echo U('Code/check_Vp');?>" class="">VP监测</a></li>
                      <li><a href="<?php echo U('Code/check_Uv');?>" class="">UV监测</a></li>
                      <li><a href="<?php echo U('Code/add_Ip');?>" class="">网络新增IP</a></li>
                      <li><a href="<?php echo U('Code/data_api');?>" class="">数据接口</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-file-alt"></i>
                      <span>千人千面管理</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo U('Basicpage/blank');?>">空白页面</a></li>
                      <li><a class="" href="<?php echo U('Basicpage/blog');?>">博客</a></li>
                      <li><a class="" href="<?php echo U('Basicpage/timeline');?>">时间轴</a></li>
                      <li><a class="" href="<?php echo U('Basicpage/profile');?>">个人资料</a></li>
                      <li><a class="" href="<?php echo U('Basicpage/about_us');?>">关于我们</a></li>
                      <li><a class="" href="<?php echo U('Basicpage/contact_us');?>">联系我们</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-glass"></i>
                      <span>系统管理</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo U('System/user');?>">用户管理</a></li>
                      <li><a class="" href="<?php echo U('System/rbac');?>">权限管理</a></li>
                  </ul>
              </li>
          </ul>
         
      </div>
      </div>
      </div>
	 
      
       
    <div id="main-content">
         
         <div class="container-fluid">
            
            <div class="row-fluid">
               <div class="span12">
                   
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   
                  
                   <h3 class="page-title">
                   审核列表
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="<?php echo U('info_list');?>">资讯列表</a>
                           
                       </li>
                       
                       
                      
                   </ul>
                   
               </div>
            </div>
            
            <div class="row-fluid">
                <div class="span12">
                    
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> 审核列表 </h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            
                           <table border="2" width="100%" align="center">
								<tr>
									<th>资讯ID</th>
									<th>标题</th>
									<th>发布者</th>
									<th>概要</th>
									<th>图片</th>
									<th>发布时间</th>
									<th>类型</th>
									<th>操作</th>
									
								</tr>
								<?php if(is_array($checkList)): foreach($checkList as $key=>$list): ?><tr align="center">
									<th><input type="checkbox" name="id[]" value="<?php echo ($list['id']); ?>"><?php echo ($list['id']); ?></th>
									<th><?php echo ($list['title']); ?></th>
									<th><?php echo ($list['author']); ?></th>
									<th><?php echo ($list['summary']); ?></th>
									<th><img src="/ftms/<?php echo ($list['thumb_img']); ?>"></th>
									<th><?php echo ($list['time']); ?></th>
									<th><?php echo ($list['type']); ?></th>
									<th><a href="<?php echo U('information/check?id='.$list['id']);?>">通过</a>|<a href="<?php echo U('information/check?id='.$list['id'].'&draft='.$list['draft']);?>">不通过</a></th>
								</tr><?php endforeach; endif; ?>
								<tr>
									<td colspan="3">
										<button id="all">全选</button>
										<button id="uncheck">清除</button>
										<input type="button" value="一键通过">
									</td>
									<td colspan="6"><?php echo ($show); ?></td>
									
									
								</tr>
							</table>
                        </div>
				</div>
      
			</div>
   
	</div>
		</div>
	</div>
   
  
   

   
     <script src="/ftms/static/js/jQuery-1.12.3.js"> </script>
   <script type="text/javascript" charset="utf-8">
	$(function(){
        $('#all').click(function(){
                $('input[name="id[]"]').prop('checked',true);
            });
       
		 $('#uncheck').click(function(){
                $('input[name="id[]"]').prop('checked',false);
            });	
			
		$('input:button').click(function(){
            var data = $(':checkbox[name="id[]"]').serialize();
			console.log(data);
            if(!confirm('确认通过？')){
                return;
            }
            if(data.length==0){
                alert('至少选择一个');
                return;
            }
            location.href='<?php echo U("check");?>?'+data;
			});
			
        });
		

   </script>