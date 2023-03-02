<?php

namespace App\Order;

use Illuminate\Support\Str;
use App\Billing\PaymentGatewayContract;

class OrderDetail
{
  private $paymentGatewayContract;
  public function __construct(PaymentGatewayContract $paymentGatewayContract)
  {
      $this->paymentGatewayContract = $paymentGatewayContract;
  }

  public function all(){
    $this->paymentGatewayContract->setDiscount(500);

    return [
        'name'=>'sonu jha',
        'address'=>'nepal'
    ];
  }
}
