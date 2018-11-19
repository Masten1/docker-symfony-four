<?php

namespace App\Services;

class ShopProduct
{
    public $title = "Standard product";
    public $producerLastName = "Last name";
    public $producerFirstName = "First name";
    public $price = 0;


    public function __toString()
    {
        return "test" . rand(1, 3);
    }
}