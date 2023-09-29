<?php


namespace App\Orders;

use App\Billing\PaymentGatewayContract;

class OrderDetails
{
    private $paymentGateWay;

    public function __construct(PaymentGatewayContract $paymentGateWay)
    {
        $this->paymentGateWay = $paymentGateWay;
    }

    public function all()
    {
        $this->paymentGateWay->setDiscount(500);

        return [
            'name' => 'Kostya',
            'address' => 'Street 5',

        ];
    }
}
