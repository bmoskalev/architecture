<?php

spl_autoload_register(function ($className) {
    include $className . '.php';
});

$paymentData = [];

function testStrategy($paymentData)
{
    $payCollection = new PayCollection();
    //платеж по карте
    $payCollection->paying(new CardPay(),$paymentData);
    //платеж через киви
    $payCollection->paying(new QiwiPay(),$paymentData);
    //платеж через яндекс
    $payCollection->paying(new YandexPay(),$paymentData);
    //платеж через Вебмани
    $payCollection->paying(new YandexPay(),$paymentData);
}

testStrategy($paymentData);