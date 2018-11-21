<?php
/**
 * Created by PhpStorm.
 * User: dmytro
 * Date: 19.11.18
 * Time: 21:21
 */

namespace App\Services;

use App\Interfaces\IdentityObject;
use App\Traits\IdentityTrait;
use App\Traits\PriceUtilities;


class ShopProduct implements IdentityObject
{
    use IdentityTrait, PriceUtilities {
        PriceUtilities::calculateTax insteadof IdentityTrait;
        IdentityTrait::calculateTax as identityCalculateTax;
        PriceUtilities::calculateTax as private;
    }

    protected function getTextRate()
    {
        return 20;
    }

    public function storeIdentityObject(IdentityObject $identityObject)
    {
        dump(self::calculateTax(1));
        dump($this->identityCalculateTax(2));

        dump($this->calculateSomeValue());
    }
}