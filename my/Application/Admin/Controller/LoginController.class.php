<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
  //后台登录页
  public function login(){
    //一个方法处理两个逻辑
    if (IS_POST) {
      //post请求 表单提交
      //接收参数
      $account=I('post.account');
      $password=I('post.password');
      $code=I('post.code');
      if (empty($account)||empty($password)||empty($code)) {
        $this->error('参数不全');
      }
      //验证码效验
      //实例化Verify类
      $verify=new \Think\Verify();
      //调用check方法进行效验
      $check=$verify->check($code);
      if (!$check) {
        //验证码效验
        $this->error('验证码错误');
      }
      //根据用户名查询tpshop——manager表
      $info=D('User')->where(['account'=>$account])->find();
      //如果查询到用户，则对比密码（将明文加密）
      if ($info && $info['password']==$password) {
        //用户名存在且密码一致，登录成功
        //设置登录标识
        session('user_info',$info);
        $this->success('登录成功',U('Admin/Index/index'));
      }else{
        //登录失败
        $this->error('账号或密码错误');
      }
    }else{
      //页面展示
      //1,如果已登录 可以直接跳转到后台首页
      //2，如果已登录 也可以制动退出重新打开登录页面
      if (session('?user_info')) {
        //$this->redirect('Admin/Index/index');
        session(null);
      }
      //临时关闭全局布局
      layout(false);
      $this->display();
    }

  }
  public function logout(){
    //销毁session数据
    session(null);
    //跳转到登录页面
    $this->redirect('Admin/Login/login');
  }
  //生成验证码
  public function captcha(){
    //
    $config=[
    //自定义验证码个数
    //'codeSet'=>true,
    'useCurve'  =>  false,
    //'useZh'=>true,
    'length'=>4,
    ];
    //实例化Verify类
    $verify=new \Think\Verify($config);
    //调用entry方法生成并输出验证码
    $verify->entry();
  }
  //ajax登录方法
  public function ajaxlogin(){
    //post请求 表单提交
    //接受参数
    $account=I('post.account');
    $password=I('post.password');
    $code=I('post.code');
    // dump($code);die;
    // 参数检测
    if (empty($account)||empty($password)||empty($code)) {
      $return=[
      'code'=>10001,
      'msg'=>'参数不全'
      ];
      $this->ajaxReturn($return);
    }
    //验证码效验
    //实例化Verify
    $verify=new \Think\Verify();
    //调用check方法进行效验
    $check=$verify->check($code);
    if (!$check) {
      //验证码错误
      $return=[
        'code'=>10002,
        'msg'=>'验证码错误'
      ];
      $this->ajaxReturn($return);
    }
    $info=D('User')->where(['account'=>$account])->find();
    // dump($info);die
    //如果查询到用户，则比对密码（将明文加密）
    if ($info && $info['password']==$password) {
      //用户名存在且密码一致，登录成功
      //设置登录标识
      session('user_info',$info);
      $return=[
        'code'=>10000,
        'msg'=>'success'
      ];
      $this->ajaxReturn($return);
    }else{
      //登录失败
      $return=[
        'code'=>10003,
        'msg'=>'用户名或者密码错误'
      ];
      $this->ajaxReturn($return);
    }
  }
}