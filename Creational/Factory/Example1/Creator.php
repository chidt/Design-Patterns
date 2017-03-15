<?php
/**
 * Created by PhpStorm.
 * User: Chidt
 * Date: 11/03/2017
 * Time: 17:55
 */


abstract class Creator {
    protected abstract function factoryMethod();
    public function startFactory(){
        $mfg = $this->factoryMethod();
        return $mfg;
    }
}