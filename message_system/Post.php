
<?php
$path="post/";//指定存储路劲
$filename="S".date("YmdHis").".bat";//有当前时间产生文件名
$fp=fopen($path.$filename,"w");//一写入方式创建并打开文件
//$title=$POST["title"];
//$author=$POST["author"];
//$conment=$POST["conment"];
fwrite($fp,$_POST["title"]."\n");
fwrite($fp,$_POST["author"]."\n");
fwrite($fp,$_POST["conment"]."\n");
fclose($fp);
echo "你的评论发表成功"; 
header('Refresh:1;url=display.php');
?>

