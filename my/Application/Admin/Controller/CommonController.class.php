<?php

/**
 * @Author: wei
 * @email:15865683714@163.com
 * @Date:   2018-07-04 17:45:45
 */
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
  //构造方法
  public function __construct(){
    //先实现父类的构造方法
    parent::__construct();
    //登录判断
    if (!session('?user_info')) {
      $this->redirect('admin/login/login');
    }
    // $this->getauth();

    //调用checkauth进行权限检测
    // $this->checkauth();
  }
}