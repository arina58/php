<?php
    header('Content-type: text/html; charset=utf-8');
    if(isset($_GET['x']) && isset($_GET['y']) && isset($_GET['d'])){
        $x = $_GET[x];
        $y = $_GET[y];
        $d = $_GET[d];
        $result = $x.$d.$y.'=';
        switch($d){
            case '+': $result .= $x + $y; break;
            case '-': $result .= $x - $y; break;
            case '*': $result .= $x * $y; break;
            case '/': $result .= $x / $y; break;
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="GET">
        <span class="text">x = </span><input name="x" type="number"><br><br>
        <span class="text">y = </span><input name="y" type="number"><br><br>
        <span class="text">Действие: </span>
        <select name="d" type="text">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <input type="submit" value="Отправить">
    </form>
    <div id="res">
        <?php
            echo $result;
        ?>
    </div>
</body>
</html>