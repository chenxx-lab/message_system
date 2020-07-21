<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>分页</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
	  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
	<style>
	table{ 
	margin:auto;
	text-align:center;
	width:100%;
	}
	tr:nth-chlid(odd){
	background-color:drak;
	
	}
	tr{
		height:40px;
	}
	
	</style>
   <?php
//分页的函数
function news($pageNum =1,$pageSize =3)
{
    $array = array();
    $coon = mysqli_connect('localhost','root','','message_system') or die ('数据库连接失败');//@屏蔽错误
    mysqli_select_db($coon, "jereh");
    mysqli_set_charset($coon, "utf8");
    // limit为约束显示多少条信息，后面有两个参数，第一个为从第几个开始，第二个为长度
    $rs = "select * from message limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize;
    $r = mysqli_query($coon, $rs);
    while ($obj = mysqli_fetch_object($r)) {
        $array[] = $obj;
    }
    mysqli_close($coon,"jereh");
    return $array;
}
//显示总页数的函数
function allNews()
{
    $coon = mysqli_connect('localhost','root','','message_system') or die ('数据库连接失败');//@屏蔽错误
    mysqli_select_db($coon, "jereh");
    mysqli_set_charset($coon, "utf8");
    $rs = "select count(*) num from message"; //可以显示出总页数
    $r = mysqli_query($coon, $rs);
    $obj = mysqli_fetch_object($r);
    mysqli_close($coon,"jereh");
    return $obj->num;
}
    @$allNum = allNews();
    @$pageSize = 10; //约定没页显示几条信息
    @$pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];
    @$endPage = ceil($allNum/$pageSize); //总页数
    @$array = news($pageNum,$pageSize);
    ?>
	
</head>
<body>
<table border="1" style="text-align: center" cellpadding="0">
    <tr style="background-color:gray;color:white">
            <td>编号</td>
            <td>姓名</td>
            <td>微信</td>
            <td>电话</td>
            <td>学号</td>
			<td>邮箱</td>
    </tr>
    <?php
    foreach($array as $key=>$values){
        echo "<tr>";
        echo "<td>{$values->id}</td>";
        echo "<td>{$values->name}</td>";
        echo "<td>{$values->wechat}</td>";
        echo "<td>{$values->phone}</td>";
        echo "<td>{$values->studentID}</td>";
		echo "<td>{$values->email}</td>";	
        echo "</tr>";
    }
    ?>
	
	<?php
   error_reporting(0);
   include_once("public.php");
   $query="select * from message";
   $result=mysqli_query($link,$query);//执行sql语句
   while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){//循环输出记录
  ?>
   <!--
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
	-->
<?php
	}
  ?> 
</table>
<p align="center">
    
    <a href="?pageNum=1"><button class="btn btn-secondary">首页</button></a>
    <a href="?pageNum=<?php echo $pageNum==1?1:($pageNum-1)?>"><button class="btn btn-primary">上一页</button></a>
    <a href="?pageNum=<?php echo $pageNum==$endPage?$endPage:($pageNum+1)?>"><button class="btn btn-primary">下一页</button></a>
    <a href="?pageNum=<?php echo $endPage?>"><button class="btn btn-secondary">尾页</button></a>
	
</p>
</body>
</html>