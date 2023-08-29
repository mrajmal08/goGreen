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
Route::get('/plant-detail/{id}', [Web\WellcomeController::class, 'plant_detail'])->name('plant.detail');

Route::get('/seeds', [Web\WellcomeController::class, 'seeds'])->name('seeds');
Route::get('/seeds-detail/{id}', [Web\WellcomeController::class, 'seeds_detail'])->name('seeds.detail');


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



// Admin Route
//users Routs
Route::get('/users', [web\UserController::class, 'index'])->name('users.index');
Route::get('/user/create', [web\UserController::class, 'create'])->name('users.create');
Route::post('/user/store', [web\UserController::class, 'store'])->name('users.store');
Route::get('/user/edit/{id}', [web\UserController::class, 'edit'])->name('users.edit');
Route::post('/user/update/{id}', [web\UserController::class, 'update'])->name('users.update');
Route::get('/user/delete/{id}', [web\UserController::class, 'destroy'])->name('users.delete');
Route::get('/profile', [web\HomeController::class, 'profile'])->name('profile');

//Plants Route
Route::get('/admin/plants', [web\PlantController::class, 'index'])->name('plants.index');
Route::get('/plants/create', [web\PlantController::class, 'create'])->name('plants.create');
Route::post('/plants/store', [web\PlantController::class, 'store'])->name('plants.store');
Route::get('/plants/edit/{id}', [web\PlantController::class, 'edit'])->name('plants.edit');
Route::post('/plants/update/{id}', [web\PlantController::class, 'update'])->name('plants.update');
Route::get('/plants/delete/{id}', [web\PlantController::class, 'destroy'])->name('plants.delete');


//Plants by season Route
Route::get('/admin/season', [web\SeasonController::class, 'index'])->name('season.index');
Route::get('/season/create', [web\SeasonController::class, 'create'])->name('season.create');
Route::post('/season/store', [web\SeasonController::class, 'store'])->name('season.store');
Route::get('/season/edit/{id}', [web\SeasonController::class, 'edit'])->name('season.edit');
Route::post('/season/update/{id}', [web\SeasonController::class, 'update'])->name('season.update');
Route::get('/season/delete/{id}', [web\SeasonController::class, 'destroy'])->name('season.delete');

//Plants by Flower Route
Route::get('/admin/flower', [web\FlowerController::class, 'index'])->name('flower.index');
Route::get('/flower/create', [web\FlowerController::class, 'create'])->name('flower.create');
Route::post('/flower/store', [web\FlowerController::class, 'store'])->name('flower.store');
Route::get('/flower/edit/{id}', [web\FlowerController::class, 'edit'])->name('flower.edit');
Route::post('/flower/update/{id}', [web\FlowerController::class, 'update'])->name('flower.update');
Route::get('/flower/delete/{id}', [web\FlowerController::class, 'destroy'])->name('flower.delete');

//Plants by Flower Route
Route::get('/admin/seeds', [web\SeedsController::class, 'index'])->name('seeds.index');
Route::get('/seeds/create', [web\SeedsController::class, 'create'])->name('seeds.create');
Route::post('/seeds/store', [web\SeedsController::class, 'store'])->name('seeds.store');
Route::get('/seeds/edit/{id}', [web\SeedsController::class, 'edit'])->name('seeds.edit');
Route::post('/seeds/update/{id}', [web\SeedsController::class, 'update'])->name('seeds.update');
Route::get('/seeds/delete/{id}', [web\SeedsController::class, 'destroy'])->name('seeds.delete');
