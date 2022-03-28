<?php
    session_start();
    if (!empty($_POST['name']) && !empty($_POST['pas'])){
        $_SESSION['user_login'] = $_POST['name'];
        $_SESSION['password'] = $_POST['pas'];
        $_SESSION['reg'] = 1;
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel = "stylesheet" href="">
</head>
<body>
    <div id="content">
        <form action="" method="post">
            <h3>Регистрация</h3>
            <input type="text" name="name" placeholder="Логин"><br>
            <input type="text" name="pas" placeholder="Пароль"><br>
            <input type="submit" name="">
        </form>
    </div>
</body>
</html>