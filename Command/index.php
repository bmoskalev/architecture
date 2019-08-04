<?php
spl_autoload_register(function ($className) {
    include $className . '.php';
});

$user = new User("123456789");
$user->runCommand('copy', 2, 4);
$user->runCommand('insert', 5, 7);
$user->runCommand('cut', 6, 8);

$user->down(1);