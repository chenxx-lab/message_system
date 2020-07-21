<?php
//var_dump($_POST);
$name=isset($_POST['name']) ? trim($_POST['name']): '';
$wechat=isset($_POST['wechat'])? trim($_POST['wechat']) : '';
$phone=isset($_POST['phone']) ? trim($_POST['phone']) : '';
$studentID=isset($_POST['studentID']) ? trim($_POST['studentID']) : '';
$email=isset($_POST['email']) ? trim($_POST['email']) : '';
if(empty($name) || empty($studentID)){
	header('Refresh:2;url=add.php');
	//echo "姓名和学号不能为空";
exit('姓名和学号不能为空');
}
//数据入库
include_once("public.php");	
//执行sql语句。
	$sql="insert into message values (null,'{$name}','{$wechat}','{$phone}','{$studentID}','{$email}')";
    $result=mysqli_query($link,$sql);
//成功操作
//提示同时去到列表页。	
header('Refresh:2;url=pages_2.php'); 
    echo ''.$name.'同学添加成功';

?>