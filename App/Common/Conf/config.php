<?php
/* 域名配置 */
$domain = I('server.HTTP_HOST');
return array(
    // '配置项'=>'配置值'
    'URL_CASE_INSENSITIVE' => true, // 默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL' => '1',
    'DEFAULT_MODULE'     => 'Index', //默认模块
    // 开启子域名配置
    'APP_SUB_DOMAIN_DEPLOY' => 1,
    'APP_SUB_DOMAIN_RULES' => array(
        'admin' => 'Admin'
    ), // admin子域名指向Admin模块
       
    // 模板系统常量定义
    'TMPL_PARSE_STRING' => array(
        '__SITENAME__' => '微信公众号测试站', // 站点名称
        '__SLOGAN__' => '天天快乐生活！',
        '__SITEURL__' => $domain
    ),
    // SESSION初始化
    'SESSION_AUTO_START' => true,
    'SESSION_OPTIONS' => array(
        'expire' => 7000
    ),
    // 数据缓存设置
    'DATA_CACHE_PREFIX' => 'ai_', // 缓存前缀
    'DATA_CACHE_TYPE' => 'Memcache', // 数据缓存类型
    'MEMCACHE_HOST'   => 'tcp://127.0.0.1:11211',
    'MEMCACHE_PORT' => 11211,
    'DATA_CACHE_TIMEOUT' => 86400,
	
	
	'URL_MODEL' =>  1, // URL访问模式,可选参数0、1、2、3,代表以下四种模式;
    'DB_TYPE'   =>  'mysql',            // 数据库类型
    'DB_HOST'   =>  'localhost',        // 服务器地址
    'DB_NAME'   =>  'ftms',            // 数据库名
    'DB_USER'   =>  'root',             // 用户名
    'DB_PWD'    =>  '',   				// 密码
    'DB_PORT'   =>  '3306',             // 端口
	'DB_PREFIX'             =>  'ftms_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
);