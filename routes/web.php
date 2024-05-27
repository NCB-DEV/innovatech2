<?php

use App\Http\Controllers\envoiMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', function () {
    return view('welcome');
});
//menu
Route::get('Site-web',[WebController::class,"Siteweb"])->name('Site-web');
Route::get('Hebergement',[WebController::class,"Applicationweb"])->name('Hebergement');
Route::get('Application-mobile',[WebController::class,"Applicationmobile"])->name('Application-mobile');
Route::get('Robot-rpa',[WebController::class,"Robotrpa"])->name('Robot-rpa');
Route::get('Marketing-Digital',[WebController::class,"MarketingDigital"])->name('Marketing-Digital');
Route::get('Application-de-gestion',[WebController::class,"Applicationdegestion"])->name('Application-de-gestion');
Route::get('Cabinet-conseils',[WebController::class,"Cabinetconseils"])->name('Cabinet-conseils');
Route::get('A-propos',[WebController::class,"Apropos"])->name('A-propos');
Route::get('Contacts',[WebController::class,"Contact"])->name('Contacts');
//newsletter
Route::post('abonnement',[envoiMail::class,"abonnement"])->name('abonnement');
