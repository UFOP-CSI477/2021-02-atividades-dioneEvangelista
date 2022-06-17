@extends('layouts.main')

@section('title','Editando')

@section('content')

<div class="p-4">
  <h1>Editando Coleta - {{$coleta->id}}</h1>
<div class="form-group">
  <form action="/coletas/update/{{$coleta->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="item_id" class="form-label">Item</label>
      <select class="form-select" id="item_id" name="item_id">
        <option value="select">Selecione</option>
        @foreach($itens as $i)
        <option value="{{ $i->id }}">{{ $i->descricao }}</option>
        @endforeach
      </select>
    </div>
</div>
<div class="form-group">
  <label for="entidade_id" class="form-label">Entidade</label>
  <select class="form-select" id="entidade_id" name="entidade_id">
    <option value="select">Selecione</option>
    @foreach($entidades as $e)
    <option value="{{ $e->id }}">{{ $e->nome }}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="quantidade" class="form-label">Quantidade</label>
  <input type="text" value="{{ $coleta->quantidade }}" class="form-control" id="quantidade" name="quantidade" placeholder="" value="" required="">
</div>

<div class="form-group">
  <label for="data" class="form-label">Data</label>
  <input type="text" value="{{ $coleta->data }}" class="form-control" id="data" name="data" placeholder="" value="" required="">
</div>
<input type="submit" value="Atualizar" class="btn btn-primary">
</div>

@endsection