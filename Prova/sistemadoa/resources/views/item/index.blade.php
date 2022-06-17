@extends('layouts.main')


@section('title','Itens')

@section('content')

<div class="p-5">
<h2>Cadastrar novo item</h2>
<div class="p-4">
<a class="btn btn-primary" href="\item\create">Cadastrar</a>
</div>

    <h2>Lista de Itens</h2>

    <table class="table table-dark">

        <thead>
            <tr>
                <th>Código</th>
                <th>Descrição</th>
            </tr>
        </thead>

        <tbody>

            @foreach($itens as $i)

            <tr>
                <td>{{ $i->id }}</td>
                <td>{{ $i->descricao }}</td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection