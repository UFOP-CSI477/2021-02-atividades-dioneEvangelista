@extends('layouts.main')

@section('title','Criando Coleta')

@section('content')

<div class="container">
  <main>
    <div class="p-4 m2">
      <h2>Cadastrar uma nova Coleta</h2>
      <form action="/coleta/create" method="POST">

        @csrf
        <div class="form ">
          <div class="form-group">
            <label for="item_id" class="form-label">Item</label>
            <select class="form-select" id="item_id" name="item_id">
              <option value="select">Selecione</option>
              @foreach($itens as $i)
              <option value="{{ $i->id }}">{{ $i->descricao }}</option>
              @endforeach
            </select>
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
            <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="" value="" required="">
          </div>

          <div class="form-group">
            <label for="data" class="form-label">Data</label>
            <input type="text" class="form-control" id="data" name="data" placeholder="" value="" required="">
          </div>

        </div>

        <button class="btn btn-primary " type="submit">Cadastrar Coleta</button>
      </form>
    </div>
</div>
</main>

</div>

@endsection