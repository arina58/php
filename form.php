<?php
    header('Content-type: text/html; charset=utf-8');
    $x = $_GET['x'];
    $y = $_GET['y'];
    $d = $_GET['d'];
    $result = $x.$d.$y.'=';
    switch($d){
        case '+': $result .= $x + $y;
        break;
        case '-': $result .= $x - $y;
        break;
        case '*': $result .= $x * $y;
        break;
        case '/': $result .= $x / $y;
        break;
    }
    echo $result;
?>