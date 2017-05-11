<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

require('./lib/init.php');
if(empty($_POST)) {
	//
	require(ROOT.'/view/front/login.html');
} else {
	//用户名为空
	$user['name'] = trim($_POST['name']);
	if ($user['name'] = '') {
		error('用户名未填写');
	}
	//密码为空
	$user['password'] = $_POST['password']
	if ($user['password'] = '') {
		error('密码未填写');
	}
	//取出用户名
	$sql = "select * from user where name = '$user[name]'";
	$row = mGetRow($sql);
	//if...用户名错误，else...判断密码是否错误
	if (!$row) {
		error('用户名错误');
	} else {
		if ($row['password'] !== $user['password']) {
			error('密码错误');
		} else {
			setcookie('name',$user['name']);
			setcookie('ccode',$user['password']);
			header('Location:artlist.php');
		}
		
	}
	

}

?>