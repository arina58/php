<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <form action="form.php" method="POST">
        <span class="text">Введите первое число </span><input name="ch1" type="number" value="<?php if (isset($_POST['ch1'])) echo $_POST['ch1'] ?>"><br>
        <span class="text">Введите второе число </span><input name="ch2" type="number" value="<?php if (isset($_POST['ch2'])) echo $_POST['ch2'] ?>"><br>
        <input type="submit" value="ОК">
    <div>
    <?php
        $m = min($_POST['ch1'], $_POST['ch2']);
        for ($i = 1; $i < $m; $i++){
            if(($_POST['ch1'] % $i == 0) and ($_POST['ch2'] % $i == 0)){
                echo $i . ', ';
            }
        }
            echo $m;
    ?>
    </div>
</body>
</html>
