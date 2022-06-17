@extends('layouts.main')

@section('title',"Entidades")

@section('content')
<div class="col-md-10 offset-md-1 dashboard-entidades-title-container">
<h1 class="p-4">Informações sobre as Entidades</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-entidades-entidades-container">
@if(count($entidades) > 0)
<table class="table table-dark">
  <thead>
  <tr>
    <th>Código</th>
    <th>Nome</th>
    <th>Bairro</th>
    <th>Cidade</th>
    <th>Estado</th>
   </tr>
  </thead>

  <tbody>

@foreach($entidades as $e)
<tr>
    <td>{{ $e->id }}</td>
    <td>{{ $e->nome }}</td>
    <td>{{ $e->bairro }}</td>
    <td>{{ $e->cidade }}</td>
    <td>{{ $e->estado }}</td>
    <td><form action="/entidades/{{$e->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar
    </form></td>
</tr>

@endforeach
</tbody>
</table>

@else
<p>Não temos entidades cadastradas no momento</p>
@endif
</div>

@endsection