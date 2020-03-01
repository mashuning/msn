# msn
 自制MVC框架；超轻量级，助轻松应对千万并发；
(从index.php入口文件，一行一行得看代码，一小时理解框架思想，一小时加入你自己所需类库，半天就可以打造出符合你自己微服务的框架)

## 框架运行流程
入口文件 -> 定义常量  -> 引入函数库  -> 自动加载类  -> 启动框架 <- 路由解析  <- 加载控制器 <- 返回结果     

## 入口文件

## 类自动加载
```
spl_autoload_register('\core\msn::load');
```
没有引入的类调用load方法  

## 路由类

默认的路由地址：  xxx.com/index.php/index/index    

1. 隐藏index.php    
    在根目录添加.htaccess文件
2. 获取URL参数部分   
    /index/index/id/1/str/2
3. 返回对应的控制器和方法   
   
## 模型类
继承pdo

## 视图类

## 配置类

## 控制器
添加core\lib\Controller基类   
添加beforeAction方法   
添加afterAction方法   

##日志类
\核心\ lib \ log.php



ps:用swoole的httpServer 热加载，可以进一步提升代码效率；后续完善并发布httpServer
