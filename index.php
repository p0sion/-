<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web流量分析安全检测系统</title>
    <style>a{text-decoration:none;}</style> 
    <link rel="stylesheet" href="/static/css/index.css">
    <link rel="shortcut icon" href="/static/img/logo.ico">
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['username'])) {//如果没有登录，跳转到登陆页面
            echo "<script>location.href='/login/login.php';</script>";
            exit();//强制中断程序的执行
        } 
    
    ?>
    <!--网站主体部分-->
    
    <div class="logo">
        <a href="#/">
            <img src="/static/img/logo.png" alt="logo">
        </a>
        <b>web流量分析安全检测系统</b>
    </div>
    <div class="side">
        <div id="select">
            <p><a href="/index.php">首页</a></p>
            <br>
            <p><a href="/setting.php">等级设置</a></p>
            <br>
            <p><a href="/black.php">黑/白名单</a></p>
            <br>
            <p><a href="/count.php">流量统计</a></p>
            <br>
        </div>
       <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div id="profile">
            <p><a href="/login/logout.php">注销登陆</a></p>
            <br>
            <p><a href="/login/changepass.php">更改密码</a></p>
        </div>
    </div>
    <div class="home">
        <div id="now1" style="background: #20335d80; width:700px;height: 432px;margin:0px;position: absolute;top: 50px;bottom: 0px;left: 376px;color: snow;text-align: center;">
            <p>显示实时所有payload信息</p>
        </div>
        <div id="now2" style="background: #20335d80; width:700px;height: 432px;margin:0px;position: absolute;top: 506px;bottom: 0px;left: 376px;color: snow;text-align: center;">
            <p>显示实时危险payload信息</p>
        </div>
        <div id="now3" style="background: #20335d80; width:700px;height: 432px;margin:0px;position: absolute;top: 50px;bottom: 0px;right: 120px;color: snow;text-align: center;">
            <p>显示实时危险ip信息</p>
        </div>
        <div id="now4" style="background: #20335d80; width:700px;height: 432px;margin:0px;position: absolute;top: 506px;bottom: 0px;right: 120px;color: snow;text-align: center;">
            <p>显示当前在线用户</p>
        </div>
    </div>
</body>
</html>
