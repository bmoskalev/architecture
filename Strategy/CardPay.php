<?php


class CardPay implements IPay
{

    public function payment($paymentData)
    {
        echo "Выполнен платеж по карте" . PHP_EOL;
    }
}