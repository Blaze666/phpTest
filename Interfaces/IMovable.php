<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.09.2018
 * Time: 21:50
 */

interface IMovable
{
    public function run($speed);
    public function stop();
}