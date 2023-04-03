<?php

require_once __DIR__. "/product.php";
class Toy extends Product{
    protected $price;
    protected $brand;
    protected $id;
    protected $animal;


    function __construct($_price,$_brand,$_id,$_animal){
        parent:: __construct($_price,"Toy");
        $this->price = $_price."$";
        $this->brand = $_brand;
        $this->id = $_id;
        $this->animal= $_animal;

    }
}