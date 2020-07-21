<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>书目一览表</title>
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style type="text/css">
table{ margin:auto;
text-align:center;
}
body{
	background-image: url(img/01.jpg);
		background-repeat: no-repeat;
}
</style>
</head>

<body>
<table width="760" border="0" >
  <tbody>
   
    <tr>
      <td>
      <form  method="post" action="add_ok.php">
        <table width="100%" border="0">
          <tbody>
            <tr>
              <td width="15%">&nbsp;</td>
              <td width="15%">&nbsp;</td>
              <td width="15%">&nbsp;</td>
						  <td width="15%">&nbsp;</td>
						  <td width="15%">&nbsp;</td>
              <!--<td width="28%">&nbsp;</td>-->
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>姓名：</td>
              <td><input type="text" name="name" size="30" class="form-control"/></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>微信：</td>
              <td><input type="text" name="wechat" size="30" class="form-control"/></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>电话：</td>
              <td><input type="text" name="phone" size="30" class="form-control"/></td>
              <td>&nbsp;</td>
            </tr>
			 <tr>
              <td>&nbsp;</td>
              <td>学号：</td>
              <td><input type="text" name="studentID" size="30" class="form-control"/></td>
              <td>&nbsp;</td>
            </tr>
			 <tr>
              <td>&nbsp;</td>
              <td>邮箱：</td>
              <td><input type="text" name="email" size="30" class="form-control"/></td>
              <td>&nbsp;</td>
            </tr>
         
            <tr>
              <td>&nbsp;</td>
              <td colspan="2">
			 
			  <input type="submit" name="Submit" value="添加" class="btn btn-primary">
			  &nbsp;&nbsp;&nbsp;&nbsp;
			  <input type="reset" name="reset" value="重置" class="btn btn-primary">
			  </td>
              <td>&nbsp;</td>
            </tr>
          </tbody>
        </table>
      
      </form>
      </td>
    </tr>
    <tr>
      <td><img src="images/bottom.jpg" width="797" height="48" alt=""/></td>
    </tr>
  </tbody>
</table>
</body>
</html>
