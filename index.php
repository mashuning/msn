<?php
/**
 * 入口文件
 * 1. 定义常量
 * 2. 加载函数库
 * 3. 启动框架
 */
define('MSN',str_replace('\\','/',dirname(realpath(__FILE__))));
define('CORE',MSN.'/core');
define('APP',MSN.'/app');
define('MODULE', 'app');
define('DEBUG',true);


if(DEBUG){
    ini_set('display_error', 'On');
    ini_set('zend.assertions', 1);
    ini_set('assert.exception', 1);
}else{
    ini_set('display_error', 'Off');
}


include CORE.'/common/function.php';
include CORE.'/msn.php';

spl_autoload_register('\core\msn::load');

\core\msn::run();