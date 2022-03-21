<?php
    header('Content-type: text/html; charset=utf-8');
    $name = $_GET['n'];
    $surname = $_GET['s'];
    $result = '<h1>Вас зовут: '.$name .' '. $surname.'</h1>';
    echo $result;
?>