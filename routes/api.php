<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseController;

Route::get('/tickets/{ticketCode}', [PurchaseController::class, 'show']);
Route::get('/tickets/{ticketCode}/check-in', [PurchaseController::class, 'checkIn']);
