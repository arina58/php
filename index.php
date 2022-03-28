<?php
    session_start();
    header('Content-type:text/html; charset=utf-8');
    if (!isset($_SESSION['reg'])){
        header('Location: form.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
    <h1>Привет, <?php echo $_SESSION['user_login']; ?></h1>
    <a href="form.php?act=logout">Выйти</a><br>
    <a href="profil.php">Профиль</a><br>
</body>
</html>
 