@extends('layouts.main')

@section('title','Coletas')

@section('content')

<div class="p-5">
<h2>Cadastrar uma nova coleta</h2>
<div class="p-4">
<a class="btn btn-primary" href="/coleta/create">Cadastrar</a>
</div>
   <table class="table table-dark">
        <thead>
            <tr>
                <th>Código</th>
                <th>Item</th>
                <th>Entidade</th>
                <th>Quantidade</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coletas as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->item->descricao }}</td>
                <td>{{ $c->entidade->nome }} </td>
                <td>{{ $c->quantidade }}</td>
                <td>{{ $c->data }}</td>
                <td>
                <a href="/coletas/edit/{{$c->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
                <form action="/coletas/{{$c->id}}" method="POST" class="form-line-edit">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar
    </form></td>
            </tr>
            @endforeach

        </tbody>

    </table>

</div>


@endsection
