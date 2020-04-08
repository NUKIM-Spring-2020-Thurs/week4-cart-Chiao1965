<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <style>
        body{
            text-align: center;
            background-color: #fff7f7;
        }
    </style>
    <?php
    session_start();
    if ( isset($_POST["item"]) ) {
        $_SESSION["quantity"] = $_POST["quantity"];
        $id = $_POST["item"];  
        $_SESSION["id"] = $id; 
        switch (strtoupper($id)) {
            case "item1":
                $_SESSION["name"] = "Canon EOS R";
                $_SESSION["price"] = 64884;
                break;
            case "item2":
                $_SESSION["name"] = "FUJIFILM X-T20";
                $_SESSION["price"] = 19910;
                break;
            case "item3":
                $_SESSION["name"] = "SONY a7iii";
                $_SESSION["price"] = 59980;
                break;   
        }  
        header("Location: savecart.php");  
    }
    ?>
</head>
<body>

    <?php
    session_start();

    if(isset($_SESSION["login"])){
        echo "登入成功，祝您購物愉快"; 
        $date = strtotime("+7 days",time());
        setcookie("user",SESSION["USER"],$date);
        echo "<a href = 'login.php'>登出系統</a>";
    }
    else{
        echo "非法進入<br/>";
        echo "<a href = 'login.php'>乖乖回首頁</a>";
    }

    
    ?>

    <form action="catalog.php" method="post">
    選擇商品: <br/>
    <select name="item">
        <option value="item1">Canon EOS R - $64884</option>
        <option value="item2">FUJIFILM X-T20 - $19910</option>
        <option value="item3">SONY a7iii - $59980</option> 
    </select>
    <input type="text" size="5" name="quantity" value="1"/>
    <input type="submit" value="訂購"/>
    </form>
    <br/> 
    <a href="shoppingcart.php">檢視購物車</a> 
</body>
</html>