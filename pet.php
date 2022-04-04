<?php
    header('Content-type: text/html; charset=utf-8');
    require_once 'class.php';

    $toy1 = new Toy ('Игрушечная мышка');

    $pet1 = new Dog('Шарик', 'дворняга', new Toy('Мячик'));
    $pet2 = new Cat('Василий', 'кот', $toy1);

    $pet1->show();
    $pet1->voice();
    $pet1->game();

    $pet2->show();
    $pet2->voice();
    $pet2->game();
?>