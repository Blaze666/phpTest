<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.09.2018
 * Time: 21:09
 */
require_once ('Car.php');
require_once ('Interfaces/IMovable.php');

class Nissan extends Car implements IMovable
{
    private $model;
    private $maxSpeed;
    private $fuel;
    static private $_color = 'black';
    private $color;

    public function __construct($type, $brand, $model, $maxSpeed, $fuel)
    {
        parent::__construct($type, $brand);
        $this->model = $model;
        $this->maxSpeed = $maxSpeed;
        $this->fuel = $fuel;
        $this->color = self::$_color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function run($speed)
    {
        return $speed;
    }

    public function stop()
    {
        return 0;
    }

    public function go()
    {
        return 'GoGo!';
    }


}