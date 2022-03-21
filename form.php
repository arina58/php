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
        <span class="text">Ваш город? </span><input name="gorod" type="text" value="<?php if (isset($_GET['gorod'])) echo $_GET['gorod'] ?>"><br>
        <span class="text">Ваша страна? </span><input name="strana" type="text" value="<?php if (isset($_GET['strana'])) echo $_GET['strana'] ?>"><br>
        <input type="submit" value="ОК">
    <div>
    <?php
        echo $_GET['gorod'].' '.$_GET[strana];
    ?>
    </div>
</body>
</html>
