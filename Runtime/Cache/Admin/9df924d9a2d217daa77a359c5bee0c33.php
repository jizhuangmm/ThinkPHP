<?php if (!defined('THINK_PATH')) exit();?>﻿
   
   
   
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
                            <span class="text">主题颜色:</span>
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
                     控制台
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">首页</a>
                           <span class="divider">/</span>
                       </li>                      
                       <li class="active">
                           控制台
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="http://www.js-css.cn/divcss/admin/metro/search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   
               </div>
            </div>
            
            
            <div class="row-fluid">
                
                <div class="metro-nav">
                    <div class="metro-nav-block nav-block-orange">
                        <a data-original-title="" href="#">
                            <i class="icon-user"></i>
                            <div class="info">321</div>
                            <div class="status">新增用户</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-olive">
                        <a data-original-title="" href="#">
                            <i class="icon-tags"></i>
                            <div class="info">+970</div>
                            <div class="status">销售数据</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-yellow">
                        <a data-original-title="" href="#">
                            <i class="icon-comments-alt"></i>
                            <div class="info">49</div>
                            <div class="status">用户评论</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-green double">
                        <a data-original-title="" href="#">
                            <i class="icon-eye-open"></i>
                            <div class="info">+897</div>
                            <div class="status">UV</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-red">
                        <a data-original-title="" href="#">
                            <i class="icon-bar-chart"></i>
                            <div class="info">+288</div>
                            <div class="status">更新</div>
                        </a>
                    </div>
                </div>
                <div class="metro-nav">
                    <div class="metro-nav-block nav-light-purple">
                        <a data-original-title="" href="#">
                            <i class="icon-shopping-cart"></i>
                            <div class="info">29</div>
                            <div class="status">新增订单</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-light-blue double">
                        <a data-original-title="" href="#">
                            <i class="icon-tasks"></i>
                            <div class="info">$37624</div>
                            <div class="status">库存信息</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-light-green">
                        <a data-original-title="" href="#">
                            <i class="icon-envelope"></i>
                            <div class="info">123</div>
                            <div class="status">消息</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-light-brown">
                        <a data-original-title="" href="#">
                            <i class="icon-remove-sign"></i>
                            <div class="info">34</div>
                            <div class="status">取消订单</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-grey ">
                        <a data-original-title="" href="#">
                            <i class="icon-external-link"></i>
                            <div class="info">$53412</div>
                            <div class="status">总利润</div>
                        </a>
                    </div>
                </div>
                <div class="space10"></div>
                
            </div>
            <div class="row-fluid">
                <div class="span6">
                    
                    <div class="widget ">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> 饼状图</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <div class="text-center">
                                <canvas id="doughnut" height="300" width="400"></canvas>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="span6">
                    
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"> </i> 曲线图</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <div class="text-center">
                                <canvas id="line" height="300" width="450"></canvas>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="row-fluid">
                <div class="span7">
                    
                    <div class="widget orange">
                        <div class="widget-title">
                            <h4><i class="icon-tasks"></i> 通用统计 </h4>
                         <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                         </span>
                            <div class="update-btn">
                                <a href="javascript:;" class="btn update-easy-pie-chart"><i class="icon-repeat"></i> Update</a>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="text-center">
                                <div class="easy-pie-chart">
                                    <div class="percentage success" data-percent="55"><span>55</span>%</div>
                                    <div class="title">New visits</div>
                                </div>
                                <div class="easy-pie-chart">
                                    <div class="percentage" data-percent="46"><span>46</span>%</div>
                                    <div class="title">Bounce rate</div>
                                </div>
                                <div class="easy-pie-chart">
                                    <div class="percentage" data-percent="92"><span>92</span>%</div>
                                    <div class="title">Server load</div>
                                </div>
                                <div class="easy-pie-chart">
                                    <div class="percentage" data-percent="84"><span>752</span>MB</div>
                                    <div class="title">Used RAM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="span5">
                    
                    <div class="widget purple">
                        <div class="widget-title">
                            <h4><i class="icon-tasks"></i> 统计数据 </h4>
                         <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                         </span>
                        </div>
                        <div class="widget-body">
                            <div class="row-fluid">
                                <div class="text-center">
                                    <div class="sparkline">
                                        <div id="metro-sparkline-type1"></div>
                                        <div class="sparkline-tittle">Server Load</div>
                                    </div>
                                    <div class="sparkline">
                                        <div id="metro-sparkline-type2"></div>
                                        <div class="sparkline-tittle">Network Load</div>
                                    </div>
                                    <div class="sparkline">
                                        <div id="metro-sparkline-type3"></div>
                                        <div class="sparkline-tittle">Visit Load</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="row-fluid">
                 <div class="span6">
                     
                     <div class="widget blue">
                         <div class="widget-title">
                             <h4><i class="icon-bell"></i> 提示信息 </h4>
                           <span class="tools">
                               <a href="javascript:;" class="icon-chevron-down"></a>
                               <a href="javascript:;" class="icon-remove"></a>
                           </span>
                         </div>
                         <div class="widget-body">
                             <ul class="item-list scroller padding"  style="overflow: hidden; width: auto; height: 320px;" data-always-visible="1">
                                 <li>
                                     <span class="label label-success"><i class="icon-bell"></i></span>
                                     <span>New user registered.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">Just now</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-success"><i class="icon-bell"></i></span>
                                     <span>New order received.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">15 mins ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                     <span>Alerting a user account balance.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">3 hours ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-important"><i class=" icon-bug"></i></span>
                                     <span>Alerting administrators staff.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">9 mins ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-important"><i class=" icon-bug"></i></span>
                                     <span>Messages are not sent to users.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">10 hours ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                     <span>Web server #12 failed to relosd.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">3 mins ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-success"><i class="icon-bell"></i></span>
                                     <span>New order received.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">40 mins ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                     <span>Alerting a user account balance.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">1 hours ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-important"><i class=" icon-bug"></i></span>
                                     <span>Alerting administrators staff.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">1 mins ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-important"><i class=" icon-bug"></i></span>
                                     <span>Messages are not sent to users.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">11 hours ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                     <span>Web server #12 failed to relosd.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">1 day ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-success"><i class="icon-bell"></i></span>
                                     <span>New order received.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">10 mins ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                     <span>Alerting a user account balance.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">3 hours ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-important"><i class=" icon-bug"></i></span>
                                     <span>Alerting administrators support staff.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">6 hours ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-important"><i class=" icon-bug"></i></span>
                                     <span>Messages are not sent to users.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">3 days ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                     <span>Web server #12 failed to relosd.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">1 day ago</span>

                                     </div>
                                 </li>
                             </ul>
                             <div class="space10"></div>
                             <a href="#" class="pull-right">View all notifications</a>
                             <div class="clearfix no-top-space no-bottom-space"></div>
                         </div>
                     </div>
                     
                 </div>
                 <div class="span6">
                     
                     <div class="widget red">
                         <div class="widget-title">
                             <h4><i class="icon-comments-alt"></i>聊天</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                         </div>
                         <div class="widget-body">
                             <div class="timeline-messages">
                                 
                                 <div class="msg-time-chat">
                                     <a class="message-img" href="#"><img alt="" src="/static/img/avatar1.jpg" class="avatar"></a>
                                     <div class="message-body msg-in">
                                         <span class="arrow"></span>
                                         <div class="text">
                                             <p class="attribution"><a href="#">Jhon Doe</a> at 1:55pm, 13th April 2013</p>
                                             <p>Hello, How are you brother?</p>
                                         </div>
                                     </div>
                                 </div>
                                 

                                 
                                 <div class="msg-time-chat">
                                     <a class="message-img" href="#"><img alt="" src="/static/img/avatar2.jpg" class="avatar"></a>
                                     <div class="message-body msg-out">
                                         <span class="arrow"></span>
                                         <div class="text">
                                             <p class="attribution"> <a href="#">Jonathan Smith</a> at 2:01pm, 13th April 2013</p>
                                             <p>I'm Fine, Thank you. What about you? How is going on?</p>
                                         </div>
                                     </div>
                                 </div>
                                 

                                 
                                 <div class="msg-time-chat">
                                     <a class="message-img" href="#"><img alt="" src="/static/img/avatar1.jpg" class="avatar"></a>
                                     <div class="message-body msg-in">
                                         <span class="arrow"></span>
                                         <div class="text">
                                             <p class="attribution"><a href="#">Jhon Doe</a> at 2:03pm, 13th April 2013</p>
                                             <p>Yeah I'm fine too. Everything is going fine here.</p>
                                         </div>
                                     </div>
                                 </div>
                                 

                                 
                                 <div class="msg-time-chat">
                                     <a class="message-img" href="#"><img alt="" src="/static/img/avatar2.jpg" class="avatar"></a>
                                     <div class="message-body msg-out">
                                         <span class="arrow"></span>
                                         <div class="text">
                                             <p class="attribution"><a href="#">Jonathan Smith</a> at 2:05pm, 13th April 2013</p>
                                             <p>well good to know that. anyway how much time you need to done your task?</p>
                                         </div>
                                     </div>
                                 </div>
                                 
                             </div>
                             <div class="chat-form">
                                 <div class="input-cont">
                                     <input type="text" placeholder="Type a message here..." />
                                 </div>
                                 <div class="btn-cont">
                                     <a href="javascript:;" class="btn btn-primary">Send</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     
                 </div>
             </div>
            <div class="row-fluid">
                <div class="span7 responsive" data-tablet="span7 fix-margin" data-desktop="span7">
                    
                    <div class="widget yellow">
                        <div class="widget-title">
                            <h4><i class="icon-calendar"></i> 日历</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <div id="calendar" class="has-toolbar"></div>
                        </div>
                    </div>
                    
                </div>
                <div class="span5">
                    
                    <div class="widget purple">
                        <div class="widget-title">
                            <h4><i class="icon-tasks"></i> 任务进度 </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <ul class="unstyled">
                                <li>
                                    <span class="btn btn-inverse"> <i class="icon-refresh"></i></span>  Update Jquery <strong class="label"> 48%</strong>
                                    <div class="space10"></div>
                                    <div class="progress">
                                        <div style="width: 48%;" class="bar"></div>
                                    </div>
                                </li>
                                <li>
                                    <span class="btn btn-inverse"> <i class="icon-check"></i></span>  Update font awesome <strong class="label label-success"> 85%</strong>
                                    <div class="space10"></div>
                                    <div class="progress progress-success">
                                        <div style="width: 85%;" class="bar"></div>
                                    </div>
                                </li>
                                <li>
                                    <span class="btn btn-inverse"> <i class="icon-fire"></i></span>  Update CSS3 <strong class="label label-important"> 65%</strong>
                                    <div class="space10"></div>
                                    <div class="progress progress-danger">
                                        <div style="width: 65%;" class="bar"></div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    
                    
                    <div class="widget orange">
                        <div class="widget-title">
                            <h4><i class="icon-bell-alt"></i> 警告提示</h4>
                            <span class="tools">
                            <a class="icon-chevron-down" href="javascript:;"></a>
                            <a class="icon-remove" href="javascript:;"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <div class="alert">
                                <button data-dismiss="alert" class="close">×</button>
                                <strong>Warning!</strong> Best check yo self, you're not looking too good.
                            </div>
                            <div class="alert alert-success">
                                <button data-dismiss="alert" class="close">×</button>
                                <strong>Success!</strong> You successfully read this important message.
                            </div>
                            <div class="alert alert-info">
                                <button data-dismiss="alert" class="close">×</button>
                                <strong>Info!</strong> Heads up! This alert needs your attention.
                            </div>
                            <div class="alert alert-error">
                                <button data-dismiss="alert" class="close">×</button>
                                <strong>Error!</strong> Change a few things. Please submit again.
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

                     
         </div>
         
      </div>
        
   </div>
   

   
   <div id="footer">
       2013 &copy; MetroAdmin.
   </div>
   

   
   
   <script src="/ftms/static/js/jquery-1.8.3.min.js"></script>
   <script src="/ftms/static/js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="/ftms/static/jquery-ui/js/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="/ftms/static/js/jquery.slimscroll.min.js"></script>
   <script src="/ftms/static/js/fullcalendar.min.js"></script>
   <script src="/ftms/static/bootstrap/js/bootstrap.min.js"></script>

   
   <!--[if lt IE 9]>
   <script src="http://www.js-css.cn/js/excanvas.js"></script>
   <script src="http://www.js-css.cn/js/respond.js"></script>
   <![endif]-->

   <script src="/ftms/static/js/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="/ftms/static/js/jquery.sparkline.js" type="text/javascript"></script>
   <script src="/ftms/static/js/chart.js"></script>
   <script src="/ftms/static/js/jquery.scrollto.min.js"></script>


   
   <script src="/ftms/static/js/common-scripts.js"></script>

   

   <script src="/ftms/static/js/easy-pie-chart.js"></script>
   <script src="/ftms/static/js/sparkline-chart.js"></script>
   <script src="/ftms/static/js/home-page-calender.js"></script>
   <script src="/ftms/static/js/home-chartjs.js"></script>

      
</body>



<meta http-equiv="content-type" content="text/html;charset=UTF-8">
</html>