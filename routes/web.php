<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Paises', function(){
    $Paises = [
        "Colombia" => [
            "Cap" => "Bogota",
            "Mon" => "Peso",
            "Pobla" => 51,
            "Ciu" =>[
                "Medellin",
                "Cartagena",
                "Barranquilla"
            ]
            ],
        "Ecuador"=> [
            "Cap" => "Quito",
            "Mon" => "Dolar",
            "Pobla" => 20,
            "Ciu" => [
                "Cuenca",
                "Guayaquil"
            ]
            ],
            "Brasil"=> [
                "Cap" => "Brasilia",
                "Mon" => "Real",
                "Pobla" => 200,
                "Ciu" => [
                    "Rio de Janeiro",
                    "Bahia"
                ]
            ]
    ];

   return view('Paises')->with('Paises', $Paises);
});

Route::get('prueba' , function(){
    return view ('productos.create');
} );