<?php
//书目管理：编辑指定书目记录
header('Content-type:text/html;charset=UTF8');
//接受要编辑的书目id
$id=isset($_GET['id']) ? (integer)$_GET['id'] : 0;//0不会存在

if($id==0){
	header('Refresh:3;url=list.php');
	echo '当前编辑书目不存在';
	exit();
}
//删除数据
include_once 'public.php';
//组织sql语句并执行
mysqli_query($link,'delete from message where id='.$id);
header('Refresh:1;url=pages_2.php');
echo '当前同学删除成功！！！';
?>