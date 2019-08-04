<?php


class PayCollection
{
    public function paying(IPay $pay, array $paymentData)
    {
        return $pay->payment($paymentData);
    }
}