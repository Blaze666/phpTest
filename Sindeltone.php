<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.09.2018
 * Time: 22:14
 */

class Sindeltone
{
    private static $instance = null;

    public static function getInstance(){
        if (self::$instance === null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
    }
    private function __clone()
    {
    }


    public function test(){
        var_dump($this);
    }

}