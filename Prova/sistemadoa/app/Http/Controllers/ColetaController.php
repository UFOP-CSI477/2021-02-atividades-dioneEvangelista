<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coleta;
use App\Models\Entidade;
use App\Models\Item;


class ColetaController extends Controller
{
    public function index(){
     $coleta = Coleta::all();
        return view('coleta.index',['coletas'=>$coleta]);
    }
    
    public function create(){
        $itens = Item::all();
        $entidades = Entidade::all();
        return view('coleta.create',['itens' => $itens,'entidades' => $entidades]);
    }

    public function edit($id)
    {
        $coleta= Coleta::findOrFail($id);
        $itens = Item::get();
        $entidades = Entidade::get();
        return view('coleta.edit',['itens' => $itens,'entidades' => $entidades, 'coleta' => $coleta]);
    }


    public function destroy($id){

        Coleta::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg','Coleta excluida com sucesso!');
    }
    

    public function update(Request $request){
         Coleta::findOrFail($request->id)->update($request->all());
         return redirect('/dashboard')->with('msg', 'Coleta editada com sucesso!');
    }

    public function store(Request $request)
    {
        $coleta = new Coleta;
        $coleta->item_id= $request->item_id;
        $coleta->entidade_id = $request->entidade_id;
        $coleta->quantidade = $request->quantidade;
        $coleta->data = $request->data;
        
        $coleta->save();
        
        return redirect('/coleta/create')->with('msg','Coleta cadastrado com sucesso!');
    }
}
