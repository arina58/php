<?php
    header('Content-type: text/html; charset=utf-8');
    $x = $_GET['x'];
    $y = $_GET['y'];
    $d = $_GET['d'];
    $result = $x.$d.$y.'=';
    if ($d == '+'){
        $result .= $x + $y;
    }
    if ($d == '-'){
        $result .= $x - $y;
    }
    if ($d == '*'){
        $result .= $x * $y;
    }
    if ($d == '/'){
        $result .= $x / $y;
    }
    echo $result;
?>