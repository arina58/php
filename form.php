<?php
    session_start();
    if ($_GET['act'] === 'logout'){
        unset($_SESSION['reg']);
    }
    if (!empty($_POST['name']) && !empty($_POST['pas'])){
        if ($_POST['name'] === $_SESSION['user_login'] && $_POST['pas'] === $_SESSION['password']){
            $_SESSION['reg'] = 1;
            header('Location: index.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel = "stylesheet" href="form.css">
</head>
<body>
    <div id="content">
        <form action="" method="post">
            <h3>Авторизация</h3>
            <input type="text" name="name" placeholder="Логин"><br>
            <input type="text" name="pas" placeholder="Пароль"><br>
            <input type="submit" name="">
        </form>
        <a href="formregistr.php" class="reg">Регистрация</a><br>
    </div>
</body>
</html>

 