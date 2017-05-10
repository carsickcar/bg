<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

require('./lib/init.php');
//get到art_id

//判断地址栏传来的art_id 是否合法


//如果没有这篇文章 跳转到首页去


//查询文章


//查询所有的留言



//post 非空 代表有留言
if(!empty($_POST)) {

	if($rs) {
		//评论发布成功 将art表的comm+1

		//跳转到上个页面

	}
}


require(ROOT . '/view/front/art.html');




?>