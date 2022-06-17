<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entidade;
use App\Models\Coleta;

class EntidadeController extends Controller
{
  public function index(){
  
    $entidade = Entidade::all();
return view('entidade.index',['entidades'=>$entidade]);

  }

  public function destroy($id){

    $entidade= Entidade::findOrFail($id);
    $coleta = Coleta::all();
    $associado=false;

    foreach($coleta as $c){
    if($entidade->id == $c->entidade_id)
    $associado=true;
    };
    if($associado)
    return redirect('/entidade')->with('msgno','Entidade não pode ser excluída, coleta associada!');
    else{
    Entidade::findOrFail($id)->delete();
    return redirect('/dashboard')->with('msg','Entidade excluida com sucesso!');}
  }
}
