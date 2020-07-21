<?php
$path="post/";
$dr=opendir($path);
while($filen=readdir($dr)){
if($filen !="." and $filen !=".."){
$fs=fopen($path.$filen,"r");
echo"<b>标题：</b>".fgets($fs)."<br/>";
echo"<b>作者：</b>".fgets($fs)."<br/>";
echo"<b>评论：</b>".fread($fs,filesize($path.$filen))."<pre/>";
echo"<hr/>";
fclose($fs);
}
}
closedir($dr);


?>
