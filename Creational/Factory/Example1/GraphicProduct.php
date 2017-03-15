<?php
/**
 * Created by PhpStorm.
 * User: Chidt
 * Date: 12/03/2017
 * Time: 23:15
 */

include_once('Product.php');

class GraphicProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        // TODO: Implement getProperties() method.
        $this->mfgProduct = "<img style='padding: 10px 10px 10px 0px' src='img/mvietnam.gif' width='250' height='325'>";
        return $this->mfgProduct;
    }
}