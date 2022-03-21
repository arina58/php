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
        <span class="text">Введите число </span><input name="ch" type="number"><br>
        
        <input type="submit" value="ОК">
    <div>
    <?php
        if (!empty ($_GET['ch'])){
            $result = 1;
            for ($i = 1; $i <= $_GET['ch']; $i++){
                $result = $result * $i;
            }
            echo $result;
        }
    ?>
    </div>
</body>
</html>
