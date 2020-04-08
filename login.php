<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            text-align: center;
            background-color: #fff7f7;
        }
    </style>
</head>
<body>

    <?php
    if (isset($_COOKIE["USER"])){
        $user = $_COOKIE["USER"];
        echo "歡迎再度光臨".$_COOKIE["USER"];
        setcookie("USER", "" ,time()-3600);
    }
    else{
        echo "歡迎新朋友";
        $user="";
    }
    ?>

    <form action = "check.php" method = "POST">
        <h2>請先登入</h2>
        Please input your username : <input type = "text" name = "user" required> <br/>
        Please input your password : <input type = "password" name = "passwd" required> <br/>
        <input type = "submit">
    </form>

</body>
</html>