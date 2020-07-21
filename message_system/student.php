<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>书目一览表</title>
<style type="text/css">
table{ margin:auto;
text-align:center;
}
tr:nth-chlid(odd){
background-color:drak;

}
</style>
</head>

<body>
<table width="760" border="0" >
  <tbody>
    <tr>
      <td><img src="images/tushuguanzidonghuaxitongshujifengmiansheji_5424067.jpg" width="760" height="254" alt=""/></td>
    </tr>
    <tr>
      <td><table width="700" border="0" >
        <tbody>
          <tr>
            <td>id</td>
            <td>姓名 </td>
            <td>微信</td>
            <td>电话</td>
            <td>学号</td>
			<td>邮箱</td>
          </tr>
     <?php
    include_once("public.php");
	$query="select * from message";
	$result=mysqli_query($link,$query);
	while ($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	 ?>
          <tr>
            <td><?php echo $rows['id'] ?></td>
            <td><?php echo $rows['name'] ?></td>
            <td><?php echo $rows['wechat'] ?></td>
            <td><?php echo $rows['phone'] ?></td>
            <td><?php echo $rows['studentID'] ?></td>
			<td><?php echo $rows['email'] ?></td>
			
          </tr>
          <?php
	}

  ?> 
   
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><img src="images/bg_09.jpg" width="760" height="34" alt=""/></td>
    </tr>
  </tbody>
</table>
</body>
</html>
