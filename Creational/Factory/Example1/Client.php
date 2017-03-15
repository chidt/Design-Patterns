<?php
/**
 * Created by PhpStorm.
 * User: Chidt
 * Date: 12/03/2017
 * Time: 23:25
 */

include_once('GraphicFactory.php');
include_once('TextFactory.php');
class Client
{
    private $someGraphicObject;
    private $someTextObject;

    public function __construct()
    {
        $this->someGraphicObject = new GraphicFactory();
        echo $this->someGraphicObject->startFactory() . "<br />";
        $this->someTextObject = new TextFactory();
        echo $this->someTextObject->startFactory()."<br />";
    }

}

$worker = new Client();