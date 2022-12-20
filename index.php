<?php 
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});
$j1 = new Joueur('Raihani','Rayan',20,'Francaise');
echo $j1;
?>