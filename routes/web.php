<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/", function () {
    return redirect("/comic");
});

//Create
Route::get("/comic/create", [HomeController::class, "create"])->name("comic.create");
Route::post("/comic", [HomeController::class, "store"])->name("comic.store");

//Mostra
Route::get('/comic', [HomeController::class, "index"])->name("home.index");
//Mostra il singolo fumetto
Route::get("/comic/{comic}", [HomeController::class, "show"])->name("comic.show");

//Modifica un fumetto con id
Route::get("/comic/{comic}/edit", [HomeController::class, "edit"])->name("comic.edit");

Route::put("/comic/{comic}", [HomeController::class, "update"])->name("comic.update");

//Cancellare un fumetto con id
Route::delete("/comic/{comic}/delete", [HomeController::class, "destroy"])->name("comic.destroy");
