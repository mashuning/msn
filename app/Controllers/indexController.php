<?php
namespace app\controllers;
use core\lib\Controller;
use core\lib\Model;

class indexController extends Controller
{


    public function index()
    {


//        $model = new Model();  //实例化model之后，就可以操作数据库
//        $sql = "";
//        $ret = $model->query($sql);
//        var_dump($ret->fetchAll());

        $this->assign('data', [1,2,3,4,5]);
        $this->display('index.php');
    }


}