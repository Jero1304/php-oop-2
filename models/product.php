<?php

class Product
{
    protected $category;
    protected $price;
    protected $animal;

    function __construct( $_price,$_category){
        $this->price = $_price;
        $this->category = $_category;
    }
}