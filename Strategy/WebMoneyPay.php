<?php


class WebMoneyPay implements IPay
{

    public function payment($paymentData)
    {
        echo "Выполнен платеж через систему WebMoney" . PHP_EOL;
    }
}