<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<title></title>
<link rel="stylesheet" type="text/css" href="css/index.css"/>
<link rel="stylesheet" type="text/css" href="css/register.css"/>
</head>
<body onload="createcode()">




<div class="all">
<div class="header">
</div>
<!--
作者：2872268327@qq.com
时间：2020-05-25
描述：左边介绍栏
-->
<div class="aside">

</div>

<!--
作者：2872268327@qq.com
时间：2020-05-25
描述：登录区域
-->
<div class="login">
<div class="login_register">
<div style="padding-top: 0px;">
<h3 align="center">登录学生在线服务系统</h3>	
</div>
<div class="" align="center" style="padding-top: 18px;">



<form action="" method="post">
<div class="radio">
<label><a href="user.php">用&nbsp;&nbsp;户</a></label>
&nbsp; &nbsp; 
<label style="color:red">管理员</label>
</div>

<div class="form-group" style="padding-top: 25px; size: 26;">
<label for="username">名&nbsp;&nbsp;&nbsp;&nbsp;字:</label>
<input type="text" class="form-control" name="username" id="username" placeholder="Enter UserName">
</div>

<div class="form-group" style="padding-top: 10px;">
<label for="pwd">密&nbsp;&nbsp;&nbsp;&nbsp;码:</label>
<input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
</div>

<div class="form-group" style="padding-top: 10px;">
<label for="yzm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;验证码:</label>
<input type="text" class="form-control" id="yzm" placeholder="Enter identifying">
<script>
function createcode(){
var span=document.getElementById("spancode");
var code=Math.floor(Math.random()*9000+1000);
span.innerHTML=code;
}
</script>
<span id="spancode" onclick="createcode()" >1314</span>

</div>
<div class="form-check" style="padding-left: 300px; padding-top: 20px;">
<label class="form-check-label">
<input class="form-check-input" type="checkbox"> Remember me
</label>
</div>
<!--
描述：按钮事件
-->
<div id="" style="padding-top: 15px;">
<input type="submit" name="submit" class="btn btn-primary" value=" 登   录 ">
&nbsp; &nbsp; 
<input type="reset" class="btn btn-primary" value=" 重   置 ">
&nbsp; &nbsp; 
<input type="button" class="btn btn-primary" value="忘记密码">
</div>
</form>
</div>
</div>


<?php
session_start();
header('Content-type:text/html;charset=utf-8');   
if(isset($_SESSION['username']) && $_SESSION['username']==='陈兴学'){
exit('您已经登入了，请不要重新登入');
}

if(isset($_POST['submit'])){
if(isset($_POST['username']) && isset($_POST['password']) && $_POST['username']=='陈兴学' && $_POST['password']=='123456'){
$_SESSION['username']=$_POST['username'];
header('location:skip.php?url=main.php&info=登入成功！3秒后跳转到首面');

}  
else {
header('location:skip.php?url=login.php&info=对不起，用户名活密码填写错误！3秒后跳转到登入页面');
}
}
?>


<!--
作者：2872268327@qq.com
时间：2020-05-25
描述：系统说明处
-->
<div class="explain">
<div class="explain_1">
<img src="img/03.png" height="160px" width="130px"/>
</div>
<div class="explain_2">
<p>高校学生在线服务系统  V7.4.5</p>
<p>紧急呼叫中心<a href="#">10010</a></p>
<p>工作时间：周一~周五</p>
<p>上午9：00~12：00&nbsp;&nbsp;下午2：30~6：00</p>
</div>
</div>
</div>
<div class="footer">
Copyright © 2020 All rights reserved. 
学生信息管理 版权所有 京ICP备05037088号 
</div>
</div>

</body>
</html>
<!--<script src="dist/js/bootstrap.js" type="text/javascript" charset="utf-8"></script>-->
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>