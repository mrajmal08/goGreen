<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Web;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [Web\HomeController::class, 'index'])->name('home');
Route::get('/types-of-plants', [Web\WellcomeController::class, 'types_of_plants'])->name('types.of.plants');
Route::get('/plants-by-season', [Web\WellcomeController::class, 'plant_by_season'])->name('plant.by.season');
Route::get('/plants-by-location', [Web\WellcomeController::class, 'plant_by_location'])->name('plant.by.location');
Route::get('/flowering-plants', [Web\WellcomeController::class, 'flowering_plants'])->name('flowering.plants');
Route::get('/flower-seeds', [Web\WellcomeController::class, 'flower_seeds'])->name('flower.seeds');
Route::get('/fruit-seeds', [Web\WellcomeController::class, 'fruit_seeds'])->name('fruit.seeds');
Route::get('/vegetable-seeds', [Web\WellcomeController::class, 'vegetable_seeds'])->name('vegetable.seeds');
Route::get('/spray', [Web\WellcomeController::class, 'spray'])->name('spray');
Route::get('/soil-fertilizer', [Web\WellcomeController::class, 'soil_fertilizer'])->name('soil.fertilizer');
Route::get('/plants', [Web\WellcomeController::class, 'plants'])->name('plants');
Route::get('/seeds', [Web\WellcomeController::class, 'seeds'])->name('seeds');
Route::get('/accessories', [Web\WellcomeController::class, 'accessories'])->name('accessories');
Route::get('/gardening-tools', [Web\WellcomeController::class, 'gardening_tools'])->name('gardening.tools');
Route::get('/seed-starter', [Web\WellcomeController::class, 'seed_starter'])->name('seed.starter');
Route::get('/pots', [Web\WellcomeController::class, 'pots'])->name('pots');
Route::get('/types-of-pots', [Web\WellcomeController::class, 'types_of_pots'])->name('types.of.pots');
Route::get('/growing-bags', [Web\WellcomeController::class, 'growing_bags'])->name('growing.bags');
Route::get('/steel-pots', [Web\WellcomeController::class, 'steel_pots'])->name('steel.pots');
Route::get('/garden-core', [Web\WellcomeController::class, 'garden_core'])->name('garden.core');
Route::get('/privacy-policy', [Web\WellcomeController::class, 'privacy_policy'])->name('privacy.policy');
Route::get('/events', [Web\WellcomeController::class, 'events'])->name('events');
Route::get('/trips-tricks', [Web\WellcomeController::class, 'trips_tricks'])->name('trips.tricks');
Route::get('/bird-cage', [Web\WellcomeController::class, 'bird_cage'])->name('bird.cage');
Route::get('/landscaping', [Web\WellcomeController::class, 'landscaping'])->name('landscaping');
Route::get('/faq', [Web\WellcomeController::class, 'faq'])->name('faq');
Route::get('/return-policy', [Web\WellcomeController::class, 'return_policy'])->name('return.policy');
Route::get('/damage-calm-out-of-stock', [Web\WellcomeController::class, 'damage_calm'])->name('damage.calm');
Route::get('/delivery-area-and-time', [Web\WellcomeController::class, 'delivery_area_and_time'])->name('delivery.area.time');
Route::get('/gardener', [Web\WellcomeController::class, 'gardener'])->name('gardener');
Route::get('/delivery-person', [Web\WellcomeController::class, 'delivery_person'])->name('delivery.person');
Route::get('/deals', [Web\WellcomeController::class, 'deals'])->name('deals');
