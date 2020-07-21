<?php
    session_start();
    header('Content-type:text/html;charset=utf-8');
    if(isset($_SESSION['username']) && $_SESSION['username']==='陈兴学'){
            session_unset();//free all session variable
            session_destroy();//销毁一个会话中的全部数据
            setcookie(session_name(),'',time()-3600);//销毁与客户端的卡号
            header('location:skip.php?url=login.php&info=注销成功，正在跳转！');
        }else{
            header('location:skip.php?url=main.php&info=注销失败，请稍后重试！');
        }
?>