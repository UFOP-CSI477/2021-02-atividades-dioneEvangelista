@extends('layouts.main')

@section('title','Criar Item')

@section('content')

<div id="item-create-container" class="col-md-6 offset-md-3">
  <h1>Cadastre um item</h1>
  <form action="/item/create" method="POST">
    @csrf
<div class="form-group">
  <label for="title">Item:</label>
  <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição do item doado">
</div>
<input type="submit" class="btn btn-primary" value="Doar">
  </form>


</div>

@endsection