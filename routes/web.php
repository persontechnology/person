<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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
Route::get('/limpiar-cache', function () {
    
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    return 'ok';
    // Artisan::call('storage:link');
    // Artisan::call('key:generate');
    // Artisan::call('migrate:fresh --seed');
});
Route::get('/odoo-crm', function ($locale=null) {
    return view('info.odoo');
})->name('odoo');
Route::get('/nuestros-clientes', function ($locale=null) {
    
    return view('info.clientes');
})->name('clientes');

Route::get('/{locale?}', function ($locale=null) {
    
    if($locale!=null){
        if(in_array($locale,['es','en'])){
            session(['my_locale' => $locale]);
            return redirect()->back();
        }
        
    }
    return view('welcome');
})->name('inicio');






