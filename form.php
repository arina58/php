<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    header('Content-type: text/html; charset=utf-8');
    if (empty($_GET)){
    ?>        

    <form action="form.php" method="GET">
        <span class="text">Ваше имя? </span><input name="name" type="text"><br>
        <input type="submit" value="ОК">
    <?php
        } else{
            echo $_GET['name'];
        }
    ?>
</body>
</html>
