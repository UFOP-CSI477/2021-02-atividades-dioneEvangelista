@extends('layouts.main')
@section('title','Área Comum')
@section('content')

<div class="p-5">

    <h2>Dados Gerais</h2>

    <table class="table table-dark">

        <thead>
            <tr>
                <th>Entidade</th>
                <th>Itens</th>
            </tr>
        </thead>

        <tbody>


            @foreach($entidades_col as $c)

            <tr>
                <td>{{ $c->entidade->nome }}</td>
                <td>{{ $c->total_qtd }}</td>
            </tr>


            @endforeach

            <tr>
                <td>Total Geral</td>
                <td>{{ $item_tot }}</td>
            </tr>

        </tbody>

    </table>

</div>

<div class="p-5">

    <h2>Total - Itens recebidos</h2>

    <table class="table table-dark">

        <thead>
            <tr>
                <th>Item</th>
                <th>Quantidade</th>
                <th>Porcentagem</th>
            </tr>
        </thead>

        <tbody>

            @foreach($item_col as $c)

            @php
            $porc = ($c->total_qtd * 100)/$item_tot
            @endphp

            <tr>
                <td>{{ $c->item->descricao }}</td>
                <td>{{ $c->total_qtd }}</td>
                <td> {{ $porc }} % </td>
            </tr>


            @endforeach
            <tr>
                <td>TOTAL GERAL</td>
                <td>{{ $item_tot}}</td>
                <td>100%</td>
            </tr>

        </tbody>

    </table>

</div>


@endsection