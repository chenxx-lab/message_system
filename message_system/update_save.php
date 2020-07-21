<?php
header('Content-type:text/html;charset=utf-8');
$id=isset($_POST['id']) ? intval($_POST['id']):0;
$name=isset($_POST['name']) ? trim($_POST['name']): '';
$wechat=isset($_POST['wechat'])? trim($_POST['wechat']) : '';
$phone=isset($_POST['phone']) ? trim($_POST['phone']) : '';
$studentID=isset($_POST['studentID']) ? trim($_POST['studentID']) : '';
$email=isset($_POST['email']) ? trim($_POST['email']) : '';

//数据验证，姓名不能为空，类型不能为空。
if(empty($name)){
	//提示同时回到提交页面
	header('Refresh:2;url=list.php');//header前不能输出，header:refresh不会阻止脚本执行
	exit('姓名和学号不能为空');
	
	
}
include_once 'public.php';
//组织sql并更新数据库
$sql="update message set name='{$name}',wechat='{$wechat}',phone='{$phone}',studentID='{$studentID}',email='{$email}' where id={$id}";
mysqli_query($link,$sql);

//提示
header('Refresh:2;url=pages_2.php');
echo '当前同学更新成功';
?>