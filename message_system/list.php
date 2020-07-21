<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>书目一览表</title>
<style type="text/css">
table{ 
margin:auto;
text-align:center;
width:100%;
}
td:nth-chlid(odd){
background-color:drak;

}
tr{
		height:40px;
	}
</style>
</head>

 


<body>
<table border="1" style="text-align: center" cellpadding="0">
  <tbody>
    <tr>
      <td><table width="400" border="1" >
        <tbody>
          <tr style="background-color:gray;color:white">
            <td>编号</td>
            <td>名字</td>
            <td>微信</td>
            <td>电话</td>
            <td>学号</td>
			<td>邮箱</td>
			<td>操作</td>
          </tr>
	  
		 
   <?php
   error_reporting(0);
   include_once("public.php");
   $query="select * from message";
   $result=mysqli_query($link,$query);//执行sql语句
   while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){//循环输出记录
  ?>
   <tr>
      <td><?php echo $rows['id'];?></td>
      <td><?php echo $rows['name'];?></td>
      <td><?php echo $rows['wechat'];?></td>
      <td><?php echo $rows['phone'];?></td>
	  <td><?php echo $rows['studentID'];?></td>
	  <td><?php echo $rows['email'];?></td>
      <td><a href="update_ok.php?id=<?php echo $rows['id'];?>">修改</a>&nbsp;|&nbsp;
	  <a href="delete.php?id=<?php echo $rows['id'];?>" onClick="return confirm('确定要删除该同学吗');">删除</a>
	  </td>
    </tr>
<?php
	}
  ?> 
		  
		 
        </tbody>
      </table>
	  </td>
    </tr>
  </tbody>
</table>

</body>
</html>
