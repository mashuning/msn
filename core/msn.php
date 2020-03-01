<?php
namespace core;
use core\lib\log;
use core\lib\route;

/**
 * 框架核心类
 */
class msn{
    
    public static $classMap = array();
    public $assign = array();

    /**
     * 启动框架
     */
    static public function run(){

        log::init(); //启动日志初始化
        $route = new route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlFile = APP.'/Controllers/'.$ctrlClass.'Controller.php';
        $ctrlClass = '\\'.MODULE.'\Controllers\\'.$ctrlClass.'Controller';

        if(is_file($ctrlFile)){
            include $ctrlFile;
            $ctrl = new $ctrlClass();
            $ctrl->beforeAction($action);
            $ctrl->$action();
            $ctrl->afterAction($action);
//            log::log('ctrl:'.$ctrlClass.'  action:'.$action);
        }else{

//            log:log('找不到控制器'.$ctrlClass);
            echo '找不到控制器'.$ctrlFile;
        }
    }
    /**
     * 自动加载类库
     *  new \core\route();
     *  $class = '\core\route';
     *  MSN.'/core/route.php';
     */
    static public function load($class){
        if(isset($classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\', '/', $class);
            $file = MSN.'/'.$class.'.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }
        
    }

}