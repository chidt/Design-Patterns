<?php
include_once('Product.php');
/**
 * Created by PhpStorm.
 * User: Chidt
 * Date: 15/03/2017
 * Time: 23:49
 */
class GraphicProduct implements Product
{

    public function getProperties()
    {
        // TODO: Implement getProperties() method.
        return "This is graphic product";
    }
}