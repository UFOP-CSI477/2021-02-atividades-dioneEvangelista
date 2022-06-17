<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
public function index(){
    $item = Item::orderBy('descricao')->paginate(50);

return view ('item.index',['itens'=>$item]);
}
public function create(){
    return view('item.create');
}

public function store(Request $request){

$item = new Item;

$item->descricao = $request->descricao;

$item->save();

return redirect('/item/create')->with('msg','Item cadastrado com sucesso!');

}




}
