<html>
<head>
<meta charset="utf-8" http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>带关闭按钮的浮动窗口</title>
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
 <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
#fdck {border:1px solid #c0c0c0;margin:0 auto;padding:5px;background:#f0f0f0}
.loginPark{
	width: 100%;
	height: 100%;
	background-color: #008000;
	border-radius: 20px;
}
.login{
	width: 40%;
	height: 100%;
	background-color: red;
	margin-left: 60%;
	border-radius: 30px;
}
</style>
</head>
<body onload="createcode()">
<div class="loginPark">
	<div class="login">
		<h3 style="padding-top: 20px;" align="center">登录学生在线服务系统</h3>
		  <form action="" method="post">
		<table border="0" cellspacing="" cellpadding="">
			<tbody>
			<tr>
              <td></td>
              <td>
              	<div id="" align="center">
              	<a href="" style="font-size: 20px;color: darkgray;">用户</a>
              	<a href="" style="font-size: 20px;color: darkgray;">管理员</a>
              	</div>
              </td>
           </tr>
           
         
            	<tr>
              <td><label for="username">姓名：</label></td>
              <td><input type="text" size="30" class="form-control" name="username" id="username" placeholder="Enter username"/></td>
             
            </tr>
            <tr>
           
              <td><label for="pwd">密码：</label></td>
              <td><input type="password" size="30" class="form-control" name="password" id="pwd" placeholder="Enter password"/></td>

            </tr>
            <tr>
        
              <td><label for="yzm">验证码：</label></td>
              <td><input type="text" name="zym" size="30" class="form-control" id="yzm"/></td>
             <td>
             	<script>
				function createcode(){
				var span=document.getElementById("spancode");
				var code=Math.floor(Math.random()*9000+1000);
				span.innerHTML=code;
				}
				</script>
               <span id="spancode" onclick="createcode()" style="width: 80px;"><a href="">1314</a></span>
             </td>
            </tr>
            <tr>           
            	<td></td>      
            	<td>
            		<div class="form-check" style="padding-left: 300px; padding-top: 20px;">
					<label class="form-check-label">
					<input class="form-check-input" type="checkbox">记住密码
					</label>
					</div>
            	</td>
            </tr>
            <td>&nbsp;</td>
              <td colspan="2">
			 
			  <input type="submit" name="Submit" value="登录" class="btn btn-primary">
			  &nbsp;&nbsp;&nbsp;&nbsp;
			  <input type="reset" name="reset" value="重置" class="btn btn-primary">
			  </td>
            </tr>   
            
            </form>         
            </tbody>
		</table>
		
<h6 style="padding-left: 340px; margin-top: 20px;">
没有登录账号，请点此
<a href="register.html" id="register">注册</a>
</h6>
<div class="explain" align="center" style="margin-top: 120px;">
<p>高校学生在线服务系统  V7.4.5</p>
<p>紧急呼叫中心<a href="#">10010</a></p>
<p>工作时间：周一~周五</p>
<p>上午9：00~12：00&nbsp;&nbsp;下午2：30~6：00</p>
</div>
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
</body>
</html>