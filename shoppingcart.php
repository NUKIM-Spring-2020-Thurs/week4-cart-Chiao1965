<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoppingcart</title>
    <style>
        body{
            text-align: center;
            background-color: #fff7f7;
        }
    </style>
</head>
<body>
    <table border="0">
        <tr bgcolor="#96ceb4">
            <td>功能</td>
            <td>編號</td>
            <td>名稱</td>
            <td>價格</td>
            <td>數量</td>
        </tr>
            <?php
            $flag = false;  $total = 0;
            while ( list($arr,$value) = each($_COOKIE) ) {
                if ( isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr]) ) {
                    if ($flag) {   
                        $flag = false;
                        $color="#ffeead";
                    } 
                    else {
                        $flag = true;
                        $color="#ffad60";
                    }
                    echo "<tr bgcolor='".$color."'><td>";
                    echo "<a href='delete.php?id=".$arr."'>";
                    echo "刪除</a></td>";
                    $price = 0;
                    $quantity = 0; 
                    while ( list($name, $value)=each($_COOKIE[$arr])) {
                        echo "<td>" . $value . "</td>";
                        if ($name == "price")  $price = $value;
                        if ($name == "quantity") $quantity = $value;
                    }
                    $total += $price * $quantity;  
                    echo "</tr>";
                }
            }
            if ($total != 0) {  
            echo "<tr bgcolor=#d9534f><td colspan=5 align=right>";
            echo "總金額 = NT$".$total."元</td></tr>";
            }
            ?>
    </table>
    <a href="catalog.php">商品目錄</a>

</body>
</html>