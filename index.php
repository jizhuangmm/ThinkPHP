<?php

if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

define('APP_DEBUG',True);
define('BUILD_DIR_SECURE', false);

define('APP_PATH','./App/');
define('RUNTIME_PATH', './Runtime/');
define('THINK_PATH',realpath('./lib').'/');

require THINK_PATH . 'ThinkPHP.php';