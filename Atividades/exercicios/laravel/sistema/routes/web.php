<?php

use Illuminate\Support\Facades\Route;
use App\Models\Estado;
use App\Models\Produto;
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
    return view('home');
});

Route::get('/estados', function(){
    return Estado::all();
});
Route::get('/estados/{id}', function($id){
   $estado =  Estado::findOrFail($id);

    if ($estado == null){
        return 'ID invalido';
    }
    return $estado;
});

Route::get('/produtos', function(){
   $produtos = Produto::all();
   return view('produtos',['produtos'=>$produtos]);

});

Route::get('/produtos/{id}', function($id){
    $produto = Produto::findOrFail($id);
    return view('produtos_id',['produto'=>$produto]);
 
 });