<?php
namespace app\model;
use core\lib\Model;

class testModel extends Model{

    public $table = 'test';

    /**
     *  这里继承 基类model之后可以写数据库的交互方法；
     *  也可以再创建一个Server层，由server层调度这里，server层处理好的结果返回个 controller层
     */

}