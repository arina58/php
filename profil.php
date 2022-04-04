
<?php

    require_once 'class.php';
    session_start();
    header('Content-type:text/html; charset=utf-8');
    if (!isset($_SESSION['user_login'])){
        header('Location: form.php');
    }
    $user = new User();

    if (!empty($_POST)){
        $user->load_from_form();
        $user->save_to_sassion();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
</head>
<body>
<form action="" method="post">
        <h3>Профиль</h3>
            <span class="text">Имя </span><input type="text" name="name" value="<?php echo $user->get_name(); ?>"><br>
            <span class="text">Фамилия </span><input type="text" name="surname" value="<?php echo $user->get_surname(); ?>"><br>
            <span class="text">Возраст </span><input type="text" name="age" value="<?php echo $user->get_age(); ?>"><br>
            <input type="submit" name="">
        </form>
</body>
</html>