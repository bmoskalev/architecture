<?php


class YandexPay implements IPay
{

    public function payment($paymentData)
    {
        echo "Выполнен платеж через систему YandexMoney" . PHP_EOL;
    }
}