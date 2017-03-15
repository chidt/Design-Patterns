<?php
include_once('Product.php');

/**
 * Created by PhpStorm.
 * User: Chidt
 * Date: 15/03/2017
 * Time: 23:48
 */
class TextProduct implements Product
{

    public function getProperties()
    {
        // TODO: Implement getProperties() method.
        return "This is text product";
    }
}