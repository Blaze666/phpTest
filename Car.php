<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.09.2018
 * Time: 21:05
 */

abstract class Car
{
    private $type;
    private $brand;

    public function __construct($type, $brand)
    {
        $this->type = $type;
        $this->brand = $brand;

    }

    abstract public function go();

}