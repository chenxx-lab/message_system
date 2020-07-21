<?php
//书目管理：编辑指定书目记录
header('Content-type:text/html;charset=UTF-8');
//echo '修改成功';
//接受要编辑的书目id
$id=isset($_GET['id']) ? (integer)$_GET['id'] : 0;//0不会存在
//$id=$_GET['id'];
if($id==0){
	header('Refresh:2;url=list.php');
	echo '当前编辑学生信息不存在';
	exit();
}
//获取对应书籍的id信息
include_once 'public.php';
$sql="select * from message where id=$id";
$res=mysqli_query($link,$sql);
//$res=mysqli_query($link,'delete from message where id='.$id);
$rows=mysqli_fetch_assoc($res);//$new
include_once 'update.html';
?>