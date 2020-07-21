<?php
header('Content-type:text/html;charset=utf-8');

$link=@mysqli_connect('localhost','root','','message_system') or die ('数据库连接失败');//@屏蔽错误
mysqli_query($link,'set names utf8');
//var_dump(mysqli_connect_errno());
//连接时错误提示
if(mysqli_connect_errno()){
	exit(mysqli_connect_error);
}
//设置默认字符编码
mysqli_set_charset($link,'utf8');

//对数据库执行一个语句
//$query='insert into book1(id,name,price,date) values(10,mysql数据库,99,2000-02-3)';
//查询，以数组形式

$query='select * from message';
$result=mysqli_query($link,$query);
/*
while($data=mysqli_fetch_row($result)){
	var_dump($data);
}
*/

?>