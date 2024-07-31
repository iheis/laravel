<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::metodo('Peticion'. acción)

Route::view('/saludo', 'vista' );
Route::get('/datos', function()
{
//return 'Hola mundo';
return [
    'curso' => 'Desarrollo con Laravel',
    'codigo' => '71941',
    'inicio' => '20-07-2024',
    'fin' => '2809-09-2024'

];
});

Route::get('/vista' , function()
{
    //proceso que mamos a escribir luego
    $curso = 'Desarrollo con Laravel';
    //retorno de una vista + pasaje de datos
return view('vista',
            [
               'curso' => $curso ,
               'numero' => 7,
               'zeppelin' => [
                'jimmi page',
                'rober plant',
                'jhon paul jones',
                'bonzo bonham'
               ]
            ]
);
}
);
