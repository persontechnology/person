<?php

use App\Http\Controllers\Estaticas;
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
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

Route::get('/{locale?}', function ($locale=null) {
    
    if($locale!=null){
        if(in_array($locale,['es','en'])){
            session(['my_locale' => $locale]);
            return redirect()->back();
        }
        
    }
    return view('welcome');
});

