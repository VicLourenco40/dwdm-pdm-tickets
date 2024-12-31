<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseController;

Route::get('/tickets/{ticketCode}', [PurchaseController::class, 'show']);
