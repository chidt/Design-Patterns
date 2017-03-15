<?php

/**
 * Created by PhpStorm.
 * User: Chidt
 * Date: 15/03/2017
 * Time: 23:43
 */
include_once('Creator.php');
include_once('Product.php');
class CountryFactory extends Creator
{

    private $country;
    function factoryMethod(Product $product)
    {
        // TODO: Implement factoryMethod() method.
        $this->country = $product;
        return ($this->country->getProperties());
    }
}