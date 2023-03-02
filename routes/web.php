<?php

use App\PostCard;
use App\PostCardSendingService;
use Illuminate\Support\Facades\Route;


Route::get('/postCards', function (PostCardSendingService $postcardservice) {
    $postcardservice->hello(message:'hello I am nepal',email:'test@test.com');
});

Route::get('/facades', function () {
    PostCard::hello(message:'hello I am nepal',email:'test@test.com');
});