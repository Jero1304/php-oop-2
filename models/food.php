<?php

require_once __DIR__. "/product.php";
class Food extends Product{
    protected $title;
    protected $price;
    protected $ingredient;
    protected $id;
    protected $animal;

    
    function __construct($_title,$_price,$_ingredient,$_id,$_animal){
        parent:: __construct($_price,"Food");
        $this->title = $_title;
        $this->price = $_price."$";
        $this->ingredient = $_ingredient;
        $this->id = $_id;
        $this->animal= $_animal;

    }
}