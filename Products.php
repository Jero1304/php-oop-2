<?php

require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/toy.php";
require_once __DIR__ . "/models/kennel.php";


$food1 = new food("title", 13,"ing", uniqid(),"Dog");
$food2 = new food("title2", 23,"ing", uniqid(),"Cat");
$food4 = new food("title4", 6,"ing", uniqid(),"Cat");
$food3 = new food("title3", 34,"ing", uniqid(),"Dog");
var_dump($food1,$food2,$food3,$food4 );

$toy1 = new toy(20,"brand",uniqid(),"Cat");
$toy2 = new toy(17,"brand2",uniqid(),"Dog");
$toy3 = new toy(47,"brand3",uniqid(),"Dog");
var_dump($toy1,$toy2,$toy3);

$kennel1 = new kennel("brand",110,30,uniqid(),"Dog");
$kennel2 = new kennel("brand2",140,40,uniqid(),"Dog");
var_dump($kennel1,$kennel2);