<?php

use App\Http\Controllers\ColetaController;
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
use App\Http\Controllers\EntidadeController;
use App\Http\Controllers\ItemController;
use App\Models\Entidade;
use App\Models\Coleta;
use Illuminate\Support\Facades\DB;



//Home
Route::get('/', function(){
    return view('welcome');
});
// Entidades
Route::get('/entidade',[EntidadeController::class, 'index'])->middleware('auth');
Route::delete('/entidades/{id}',[EntidadeController::class, 'destroy'])->middleware('auth');

//Itens 
Route::get('/item',[ItemController::class, 'index'])->middleware('auth');
Route::get('/item/create',[ItemController::class, 'create'] );
Route::post('/item/create',[ItemController::class,'store'])->middleware('auth');

//Coletas
Route::get('/coleta',[ColetaController::class, 'index'])->middleware('auth');
Route::get('/coleta/create',[ColetaController::class,'create'])->middleware('auth');
Route::post('/coleta/create',[ColetaController::class,'store'])->middleware('auth');
Route::get('/coletas/edit/{id}',[ColetaController::class,'edit'])->middleware('auth');
Route::put('/coletas/update/{id}',[ColetaController::class,'update'])->middleware('auth');
Route::delete('/coletas/{id}',[ColetaController::class, 'destroy'])->middleware('auth');

//Comum
Route::get('/comum', function(){

    $entidades_col = Coleta::select('entidade_id', DB::raw('SUM(quantidade) as total_qtd'))
    ->groupBy('entidade_id')
    ->get();

    $item_col = Coleta::select('item_id', DB::raw('SUM(quantidade) as total_qtd'))
    ->groupBy('item_id')
    ->get();

    $item_tot = Coleta::sum('quantidade');

    return view('geral',['entidades_col' => $entidades_col,
                            'item_col' => $item_col,
                            'item_tot' => $item_tot ]);   
});

// Auth
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

// Area ADM
Route::get('/dashboard', function(){
    $entidades = Entidade::all();
    return view('dashboard',['entidades'=>$entidades]);
})->middleware('auth');
});
