<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends CommonController
{
	//管理员列表
	public function index()
	{
		if(IS_POST)
		{

		}else{

			$model=D('Jianjie');
			$data=$model->order('id desc')->select();
			// dump($aaa);die();
			$this->assign('data',$data);
			$this->display();
		}
	}

	//用户增加
	public function add()
	{
			layout(false);
			if (IS_POST) {
				$data=I('post.');
				// dump($data);die;
				$data['time']=date('Y-m-d H:i:s');
				// dump($data);die;
				$res=D('Jianjie')->add($data);
				if($res){
					$return=array(
							'code' => 10000,
							'msg' => 'success',
					);
					$this->ajaxReturn($return);
				}else{
					$return =array(
							'code' =>10001,
							'msg' => '添加失败',
					);
					$this->ajaxReturn($return);
				}
			}else{

			$this->display();
			}
	}
	public function edit(){
		layout(false);
		if (IS_AJAX) {
			$data=I("post.");
			// dump($data);die;
			// $model= D("Jianjie");
			$res=D("Jianjie")->save($data);
			// dump($res);die;
			if ($res) {
				$return =array(
						'code' => 10000,
						'msg' => 'success'
				);
				$this->ajaxReturn($return);
			}else{
				$return =array(
						'code' => 10001,
						'msg' => '失败'
				);
				$this->ajaxReturn($return);
			}
		}else{
			$id = I("get.id");
			// dump($id);die;
			$data=D('Jianjie')->where(['id'=>$id])->find();
			// dump($data);die;
			$this->assign('data',$data);
			$this->display();
		}
	}
	public function del(){
		$id=I('post.id');
		// dump($id);die;
		$res=D('Jianjie')->where(['id'=>$id])->delete();
		// dump($res);die;
		if ($res) {
		 $return=[
		          'code'=>10000,
		          'msg'=>'删除成功'
		        ];
		        $this->ajaxReturn($return);
		}else{
		  $return=[
		    'code'=>10001,
		    'msg'=>'删除失败'
		  ];
		  $this->ajaxReturn($return);
		}
	}
}