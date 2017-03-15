<?php

/**
 * Created by PhpStorm.
 * User: Chidt
 * Date: 13/03/2017
 * Time: 22:19
 */
include_once('Base.php');
include_once('SayWorld.php');

class MyHelloWorld extends Base
{
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();