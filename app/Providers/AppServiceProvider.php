<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\PostCardSendingService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        $this->app->singleton(PaymentGatewayContract::class, function ($currency) {
            if (request()->has(key:'credit')) {
                return new CreditPaymentGateway($currency='NPR');
            } else {
                return new BankPaymentGateway($currency='INR');
            }
        });


        // $this->app->singleton(BankPaymentGateway::class, function ($currency) {
        //     return new BankPaymentGateway($currency='INR');
        // });

        // $this->app->bind(PaymentGateway::class, function ($currency) {
        //     return new PaymentGateway($currency='INR');
        // });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         $this->app->singleton('PostCard', function ($currency) {
            return  new PostCardSendingService(country: 'us', width: 4, height: 6);
        });
    }
}
