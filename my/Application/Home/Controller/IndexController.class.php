<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
  public function index(){
    $data=D('Jianjie')->order('id desc')->select();
    // dump($data);die();
    $this->assign('data',$data);
    $this->display();
  }
  public function tanchu(){
    $data=D('Jianjie')->order('id desc')->select();
    // dump($data);die();
    $this->assign('data',$data);
    $this->display();
  }
  public function tanchu2(){
    $data=D('Xiangmu')->where(['id'=>1])->select();
    // dump($data);die();
    $this->assign('data',$data);
    $this->display();
  }
  public function tanchu3(){
    $data=D('Xiangmu')->where(['id'=>2])->select();
    // dump($data);die();
    $this->assign('data',$data);
    $this->display();
  }
  public function tanchu4(){
    $id = I('post.id');
    $data=D('Jianjie')->where(['id'=>$id])->setInc('count');
    if ($data !== false) {
      $return =  [
          'code'=>10000,
          'msg'=>'点赞成功'
      ];
    }else{
      $return =  [
        'code'=>101,
        'msg'=>'点赞失败'
      ];
    }
    $this->ajaxReturn($return);
  }
}