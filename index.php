<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Games.php";
require_once __DIR__ . "/Models/Kennel.php";

$croquettes = new Food('Kitten Pollame', 'cat', 'Feringa', '/img/pollame.jpg', 4.99);
$croquettes->type ='dry';
$croquettes->age ='young';
$croquettes->for_sterilised ='no';

var_dump($croquettes);

$polloSqueak = new Games('polletto-squeak', 'dog', 'Zooplus', '/img/pollo.jpg', 1.79);
$polloSqueak->material = 'latex';
$polloSqueak->type = 'chew toy';

var_dump($polloSqueak);

$lettoFluffy = new Kennel('Letto morbido Fluffy 2in1', 'dog and cat', 'Zooplus', '/img/letto.jpg', 15.49);
$lettoFluffy->material = 'nylon';
$lettoFluffy->size = 'L 50 x P 42 x H 7,5 cm';
$lettoFluffy->ambient = 'inside';
$lettoFluffy->color = 'white';

var_dump($lettoFluffy);
