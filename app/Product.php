<?php

namespace app;

abstract class Product
{
    private $sku;
    private $name;
    private $price;

    abstract public function addToDB();

    public function getSku(){
        return $this->sku;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getName() {
        return $this->name;
    }


}