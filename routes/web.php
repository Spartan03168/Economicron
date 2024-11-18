<?php

use App\Http\Controllers\Homepage_controller;
use App\Http\Controllers\Routing_page_controller;
use App\Http\Controllers\Down_payments_controller;
use App\Http\Controllers\Tax_deduction_controller;
use App\Http\Controllers\Savings_calc_controller;
use App\Http\Controllers\Compound_interest_controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Routing of the created views
Route::get("/", [Homepage_controller::class, "index"]) ->name("homepage.index");
Route::get("/routing", [Routing_page_controller::class, "index"])-> name("routing.index");
Route::get("/Tax calculations", [Tax_deduction_controller::class, "index"]) -> name("tax_deduction_calculation.index");
Route::get("/Savings calculations", [Savings_calc_controller::class, "index"]) -> name("Savings_math.index");
Route::get("/Down payment calculations", [Down_payments_controller::class, "index"]) -> name("down_payment_calculation.index");
Route::get("/Compound interest rate calculations", [Compound_interest_controller::class, "index"]) -> name("Compound_interest.index");
//------------------------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
