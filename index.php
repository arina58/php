<?php
    header('Content-type: text/html; charset=utf-8');
    // читаем со строки браузера
    $str1 = $_GET['name'];
    $str2 = $_GET['surname'];
    $result = '<h1>Имя: '.$str1.'</h1>';//делаем стиль h1
    $result .= '<h1>Фамилия: '.$str2.'</h1>';
    print_r($result);
?>