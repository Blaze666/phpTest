<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.09.2018s
 * Time: 21:04
 */
require_once ('Car.php');
require_once ('Nissan.php');
require_once ('Sindeltone.php');

$nissan = new Nissan('jeep','Nissan','x-trail','220','diesel');

var_dump($nissan);
echo '<br>';

$nissan->setColor('RED');
var_dump($nissan);
echo '<br>';
echo '<br>';
var_dump($nissan->run(51112));


echo '<br>';
var_dump($nissan->stop());
echo '<br>';
echo '<br>';

var_dump(Sindeltone::getInstance());
