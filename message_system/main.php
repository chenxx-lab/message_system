
<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>学生信息一览表</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css"/>

<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
 <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
<?php
    session_start();
    header('Content-type:text/html;charset=utf-8');    
    if(isset($_SESSION['username']) && $_SESSION['username']==='陈兴学'){
        echo "您好！{$_SESSION['username']}>>欢迎回来！";
        echo "<a href='logout.php'>注销</a>";
    }  else {
        echo "<a href='login.php'>请登入</a>";
    }
?>
</head>
<body>



	<div class="row" style="padding-left: 0px;">
		<div class="col-sm-1.5">
			<div class="dropdown">
		    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
		      网上选课
		    </button>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="#">选修课</a>
		      <a class="dropdown-item" href="#">组选课/任选课</a>
		      <a class="dropdown-item" href="#">专业课</a>
		    </div>
            </div>
		</div>
		
		<div class="col-sm-1.5">
			<div class="dropdown">
		    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
		      活动报名
		    </button>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="#">网上报名</a>
		    </div>
            </div>
		</div>
		
		<div class="col-sm-1.5">
			<div class="dropdown">
		    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
		      信息维护
		    </button>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="#">个人信息</a>
		      <a class="dropdown-item" href="#">学习简历</a>
		      <a class="dropdown-item" href="#">密码修改</a>
		    </div>
            </div>
		</div>
		
		<div class="col-sm-1.5">
			<div class="dropdown">
		    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
		      信息查询
		    </button>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="#">班级课本查询</a>
		      <a class="dropdown-item" href="#">个人课本查询</a>
		      <a class="dropdown-item" href="#">学习成绩查询</a>
		      <a class="dropdown-item" href="#">等级考试查询</a>
		      <a class="dropdown-item" href="#">培养计划查询</a>
		      <a class="dropdown-item" href="#">补考成绩查询</a>
		      <a class="dropdown-item" href="#">学生考核</a>
		    </div>
            </div>
		</div>
		
		<div class="col-sm-1.5">
			<div class="dropdown">
		    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
		      毕业论文(设计)
		    </button>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="#">学生选题</a>
		      <a class="dropdown-item" href="#">学生信息维护</a>
		      <a class="dropdown-item" href="#">学生提交资料</a>
		      <a class="dropdown-item" href="#">学生查看提交周志</a>
		    </div>
            </div>
		</div>
		
		<div class="col-sm-1.5">
			<div class="dropdown">
		    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
		      教学质量评价
		    </button>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="#">教学质量评价</a>
		    </div>
            </div>
		</div>
	</div>
	
	<!--
    	作者：2872268327@qq.com
    	时间：2020-05-25
    	描述：搜索栏
    -->
    <div class="container" style="padding-top: 5px;">
    	<div class="row">
    		<div id="" class="col-sm-2">	
    		</div>
    		<div class="col-sm-6">
    			<div class="input-group mb-3">
			    <input type="text" class="form-control" placeholder="Search">
			    <div class="input-group-append">
			    <button class="btn btn-success" type="submit">Go</button>  
                </div>
            </div>
    	</div>
    		<div class="col-sm-1">
    			
    			<a href="" class="text-center">图书导航</a>
    		</div>
    		<div class="col-sm-1">
    			<a href="" class="text-center">期刊导航</a>
    		</div>
    		<div class="col-sm-1">
    			<a href="" class="text-center">意见反馈</a>
    		</div>
    		<div class="col-sm-1">
    			<a href="logout.php" class="text-center">退出系统</a>
    		</div>
    	</div>
    </div>


<!--
	作者：2872268327@qq.com
	时间：2020-05-04
	描述：左边菜单栏
-->

	<div class="left">
	<iframe name="my-iframe" id="my-iframe" src="left.html" frameborder="0" width="100%" height="500" scrolling="yes">
		
	</iframe>

  
   </div>


<div class="right">
	<iframe name="show_right" id="show_right" src="right.html" frameborder="0" width="100%" height="500" scrolling="yes">
	</iframe>
	
</div>

</body>
</html>
