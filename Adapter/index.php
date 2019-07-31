<?php

spl_autoload_register(function ($classname){
    require_once ($classname.".php");
});

$poolGame = new PoolGame();
$poolGameAdapter=new PoolGameAdapter($poolGame);
$poolGameAdapter->shoot();
$poolGameAdapter->loose();
$poolGameAdapter->win();
