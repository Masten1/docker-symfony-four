<?php
/**
 * Created by PhpStorm.
 * User: dmytro
 * Date: 19.11.18
 * Time: 22:47
 */

namespace App\Traits;


trait PriceUtilities
{
    private static $textRate = 17;

    static function calculateTax($price)
    {
        return 2;
    }

    public function calculateSomeValue()
    {
        return $this->getTextRate() * 2;
    }

    abstract function getTextRate();
}