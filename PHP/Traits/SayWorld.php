<?php

/**
 * Created by PhpStorm.
 * User: Chidt
 * Date: 13/03/2017
 * Time: 22:17
 */
trait SayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo 'World!';
    }
}