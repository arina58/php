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
        <span class="text">Введите число </span><input name="ch" type="number"><br>
        <input type="submit" value="ОК">
    <div>
    <?php
        if (!empty ($_POST['ch'])){
            $ch = $_POST['ch'];
            for ($strt = 1; $strt < $ch; $strt++){
                if ($ch % $strt == 0){
                    echo $strt . ', ';
                }
            }
            echo $ch;
        }  
    ?>
    </div>
</body>
</html>