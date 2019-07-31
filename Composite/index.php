<?php

spl_autoload_register(function ($classname) {
    require_once($classname . '.php');
});

$kingdom = new Composite('Animalia');
$phylum = new Composite('Chordata');
$class = new Composite('Mammalia');
$order = new Composite('Carnivora');
$subOrder=new Composite('Feliformia');
$family=new Composite('Felidae');
$subFamily=new Composite('Felinae');
$species=new Leaf('Manul');

$kingdom->add($phylum);
$phylum->add($class);
$class->add($order);
$order->add($subOrder);
$subOrder->add($family);
$family->add($subFamily);
$subFamily->add($species);
$kingdom->display();

//По идее к именам переменных надо добавить еще и внутренние имена например вместо $class сделать $classMammaliaю Это будет добавлять уникальность к узлам и листьям. или не надо?