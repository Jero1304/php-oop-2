<?php
require_once __DIR__. "/product.php";
class Kennel extends Product
{
    protected $brand;
    protected $length;
    protected $price;
    protected $id;
    protected $animal;


    function __construct($_brand, $_length, $_price,$_id,$_animal)
    {
        parent::__construct($_price, "Kennel");
        $this->brand = $_brand;
        $this->length = $_length;
        $this->price = $_price;
        $this->id = $_id;
        $this->animal= $_animal;
    }
}