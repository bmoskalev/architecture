<?php


class QiwiPay implements IPay
{

    public function payment($paymentData)
    {
        echo "Выполнен платеж через систему Qiwi" . PHP_EOL;
    }
}