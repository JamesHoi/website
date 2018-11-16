<html>
    <head>
        <meta charset="utf-8" />
        <title>庫存管理系統</title>
    </head>

    <body>
    <?php
        include 'php/user.php';
        $login_username = "${_GET['username']}";
        $login_password = "${_GET['password']}";
        if(checkusers($login_username,$login_password))echo "登錄成功";
        else echo "<script type='text/javascript'>alert('賬號或密碼錯誤！');window.history.go(-1)</script>";
    ?>   
    </body>
</html>
