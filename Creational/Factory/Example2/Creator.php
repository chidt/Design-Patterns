<?php

/**
 * Created by PhpStorm.
 * User: Chidt
 * Date: 15/03/2017
 * Time: 23:39
 */
abstract class Creator
{
    abstract function factoryMethod(Product $product);

    public function doFactory($productNow)
    {
        $countryFactory = $productNow;
        $mfg = $this->factoryMethod($countryFactory);
        return $mfg;
    }
}