<?php
namespace core\lib;
use core\lib\conf;
use think\exception\PDOException;

/**
 * 模型类
 * 这里手写PDO，随后有兴趣可以找一些更好的开源累拿来用
 */
class Model extends \PDO
{
    protected $dns = "mysql:host=127.0.0.1;dbname=test";
    protected $username = 'root';
    protected $psw = 'root';

    public function __construct($dsn, $username = null, $passwd = null, $options = null)
    {
        try{
            parent::__construct($dsn, $username, $passwd, $options);
        }catch (PDOException $e){
            p($e->getMessage());
        }


    }
}