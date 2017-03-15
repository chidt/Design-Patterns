<?php
/**
 * Created by PhpStorm.
 * User: Chidt
 * Date: 12/03/2017
 * Time: 23:20
 */

include_once('Creator.php');
include_once('GraphicProduct.php');

class GraphicFactory extends Creator
{

    protected function factoryMethod()
    {
        // TODO: Implement factoryMethod() method.
        $product = new GraphicProduct();
        return $product->getProperties();
    }
}