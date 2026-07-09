<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\frontEndController;










Route::get('/', [frontEndController::class, 'home'])->name('home');

Route::get('/about', [frontEndController::class, 'about'])->name('about');
Route::get('/properties', [frontEndController::class, 'properties'])->name('properties');
Route::get('/agents', [frontEndController::class, 'agents'])->name('agents');
Route::get('/blog', [frontEndController::class, 'blog'])->name('blog');
Route::get('/contact', [frontEndController::class, 'contact'])->name('contact');
Route::get('/property-detailed', [frontEndController::class, 'property_detailed'])->name('property_detailed');
Route::get('/agent-detailed', [frontEndController::class, 'agent_detailed'])->name('agent_detailed');

Route::get('/raw-district-2', [frontEndController::class, 'raw_district'])->name('raw_district');
Route::get('/linar', [frontEndController::class, 'linar'])->name('linar');
Route::get('/hudayriyat-golf-estates', [frontEndController::class, 'hudayriyat'])->name('hudayriyat');
Route::get('/roudah', [frontEndController::class, 'roudah'])->name('roudah');
Route::get('/everly-place', [frontEndController::class, 'everly_place'])->name('everly_place');
Route::get('/113-residences', [frontEndController::class, 'residences'])->name('residences');
Route::get('/aquaCrest-residences', [frontEndController::class, 'aquaCrest_residences'])->name('aquaCrest_residences');
Route::get('/DWTN-residences', [frontEndController::class, 'DWTN_residences'])->name('DWTN_residences');
Route::get('/binghatti-aquarise', [frontEndController::class, 'binghatti_aquarise'])->name('binghatti_aquarise');
Route::get('/address-grand', [frontEndController::class, 'address_grand'])->name('address_grand');
Route::get('/one-residence', [frontEndController::class, 'one_residence'])->name('one_residence');
Route::get('/fairmont-residences-solara-tower', [frontEndController::class, 'fairmont_residences'])->name('fairmont_residences');
Route::get('/bella-by-PASSO', [frontEndController::class, 'PASSO'])->name('PASSO');
Route::get('/olaia-residences', [frontEndController::class, 'olaia_residences'])->name('olaia_residences');
Route::get('/ela-residences', [frontEndController::class, 'ela_residences'])->name('ela_residences');
Route::get('/mansio-at-th8', [frontEndController::class, 'mansio_at'])->name('mansio_at');
Route::get('/armani-beach-residences', [frontEndController::class, 'beach_residences'])->name('beach_residences');
Route::get('/como-residences-by-nakheel', [frontEndController::class, 'como_residences'])->name('como_residences');
Route::get('/rove-home-dubai-marina', [frontEndController::class, 'rove_home'])->name('rove_home');
Route::get('/pelagos', [frontEndController::class, 'pelagos'])->name('pelagos');
Route::get('/marina-cove', [frontEndController::class, 'marina_cove'])->name('marina_cove');
Route::get('/franck-muller-vanguard', [frontEndController::class, 'vanguard'])->name('vanguard');
Route::get('/kempinski-marina-residences', [frontEndController::class, 'kempinski'])->name('kempinski');
Route::get('/habtoor-grand-residences', [frontEndController::class, 'habtoor'])->name('habtoor');
Route::get('/the-canal', [frontEndController::class, 'canal'])->name('canal');
Route::get('/haus-Of-tenet', [frontEndController::class, 'tenet'])->name('tenet');
Route::get('/avarra', [frontEndController::class, 'avarra'])->name('avarra');
Route::get('/eywa', [frontEndController::class, 'eywa'])->name('eywa');
Route::get('/lumena-alta', [frontEndController::class, 'lumena'])->name('lumena');
Route::get('/eden-house-marasi', [frontEndController::class, 'eden'])->name('eden');






