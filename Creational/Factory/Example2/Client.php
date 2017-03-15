<?php
include_once('CountryFactory.php');
include_once('TextProduct.php');
include_once('GraphicProduct.php');

/**
 * Created by PhpStorm.
 * User: Chidt
 * Date: 15/03/2017
 * Time: 23:50
 */
class Client
{
    public function __construct()
    {
        $countryFactory = new CountryFactory();
        $textProduct = new TextProduct();
        $graphicProduct = new GraphicProduct();
        echo $countryFactory->doFactory($graphicProduct);
    }

}

$worker = new Client();