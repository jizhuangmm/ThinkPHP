<?php
return array(
	 'TMPL_PARSE_STRING'=>array(
		'__CSS__' => __ROOT__.'/static/css',
		'__BOOTSTRAPCSS__' => __ROOT__.'/static/bootstrap/css',
		'__BOOTSTRAPJS__' => __ROOT__.'/static/bootstrap/js',
		'__JQUERYCSS__' => __ROOT__.'/static/jquery-ui/css',
		'__JQUERYJS__' => __ROOT__.'/static/jquery-ui/js',
		'__JS__' => __ROOT__.'/static/js',
		'__CSS__' => __ROOT__.'/static/css',
		'__IMG__' => __ROOT__.'/static/img'
		),

    'TMPL_ACTION_ERROR'     =>  THINK_PATH.'Tpl/ft_jump.tpl', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   =>  THINK_PATH.'Tpl/ft_jump.tpl', // 默认成功跳转对应的模板文件
    'TMPL_CACHE_TIME' => 60,
	'DEFAULT_MODULE'     => 'Index', //默认模块
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
    'SESSION_AUTO_START' =>  true,// 是否自动开启Session
	
	
    // 'SHOW_PAGE_TRACE' => false,

    'TOKEN_ON'      =>    false,  // 是否开启令牌验证 默认关闭
    'TOKEN_NAME'    =>    'token',    // 令牌验证的表单隐藏字段名称，默认为__hash__
    'TOKEN_TYPE'    =>    'md5',  //令牌哈希验证规则 默认为MD5
    'TOKEN_RESET'   =>    true,  //令牌验证出错后是否重置令牌 默认为true

    // // 上传根目录
    // 'UPLOAD_DIR' => '/dev/shm/',
    // 'PIC_UPLOAD_MAXSIZE' => 2 * 1024 * 1024, // 图片上传最大2M

    // // 图片上传配置
    // 'PIC_UPLOAD_CONFIG' => array(
    //     'maxSize' => 2 * 1024 * 1024, // 2M
    //     'exts' => array('gif','jpg','jpeg','png'),
    //     'saveName' => array('rand_uniqid','i'),
    //     'rootPath' => '/dev/shm/',
    //     'hash' => false,
    //     'autoSub' => false,
    // ),


);