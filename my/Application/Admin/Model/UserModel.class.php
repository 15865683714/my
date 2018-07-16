<?php  
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
	//定义字段映射
	protected $_map = array(
		'id' => 'user_id',
		'name' => 'username',
		'pwd' => 'password',
		'em' => 'email',
	);

	//自动验证
	protected $_validate = array(
		array('user_id','require','登录名不能为空'),	
		//array('user_id','require','id不能'),	
		//array('user_id','','登录名已经存在',0,'unique',1),
		array('username','require','昵称不能为空'),
		array('password','require','密码不能为空'),
		array('email','require','邮箱不能为空'),
		array('email','email','邮箱格式不正确'),
	);
}


?>