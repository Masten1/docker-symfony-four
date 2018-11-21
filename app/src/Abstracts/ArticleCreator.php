<?php
/**
 * Created by PhpStorm.
 * User: m_ast
 * Date: 20.11.2018
 * Time: 13:43
 */

namespace App\Abstracts;


abstract class ArticleCreator
{
    public static function create()
    {
        return new static();
    }
}