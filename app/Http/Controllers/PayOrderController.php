<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGatewayContract;
use App\Order\OrderDetail;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDetail $orderDetail, PaymentGatewayContract $paymentGatewayContract){
        // $paymentGateway = new PaymentGateway();
        $order = $orderDetail->all();
        return $paymentGatewayContract->charge('50');
    }
}
