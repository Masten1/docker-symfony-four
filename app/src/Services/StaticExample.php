<?php

namespace App\Services;


class StaticExample
{
    static public $aNum = 0;

    static public function sayZero()
    {
        echo self::$aNum;
    }

    public function test()
    {
        return "1";
    }
}