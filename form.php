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
        <span class="text">Введите градусы Цельсия </span><input name="grad" type="number"><br>
        <input type="submit" value="ОК">
    <div>
    <?php
        if (!empty ($_GET['grad'])) {$result = ($_GET[grad] * 1.8) + 32;
        echo 'Фаренгейты: '.$result;
        }
    ?>
    </div>
</body>
</html>
