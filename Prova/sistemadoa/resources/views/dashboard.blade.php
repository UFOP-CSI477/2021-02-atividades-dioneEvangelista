@extends('layouts.main')

@section('title','Área Administrativa')
@section('content')

<div id="search-container" class="col-md-12">
  <div id="entidades-container" class="col-md-12">
    <h2>Área Administrativa</h2>
    <p class="subtitle">Conheça os principais colaboradores!</p>
    <div id="cards-container" class="row">
      @foreach($entidades as $e)
      <div class="card col-md-3">
        <img src="{{$e->imgpath}}" alt="{{$e->nome}}">
        <div class="card-body">
          <p class="card-date">10/09/2022</p>
          <h5 class="card-title">{{$e->nome}}</h5>
          <!-- <p class="participants">X Pessoas ajudadas</p>
          <a href="{{$e->link}}" class="btn btn-primary">Instagram</a> -->
        </div>

      </div>
      @endforeach

    </div>


  </div>


</div>


@endsection