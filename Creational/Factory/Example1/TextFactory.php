<?php
/**
 * Created by PhpStorm.
 * User: Chidt
 * Date: 12/03/2017
 * Time: 23:06
 */

include_once('Creator.php');
include_once('TextProduct.php');

class TextFactory extends Creator
{

    protected function factoryMethod()
    {
        $product = new TextProduct();
        return $product->getProperties();
    }
}