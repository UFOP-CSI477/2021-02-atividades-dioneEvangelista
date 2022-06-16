<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Dione Willy Evangelista" />
  <title>Lista de Produtos</title>
</head>
<body>
  
<div>
  <h2 style="text-align:center">Produto por ID</h2>
  <table class="table table-striped-columns">
                <thead>
                    <tr class="table-primary">
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Unidade</th>
                    </tr>
                </thead>
                <tbody>)
                  <tr class="table-primary"> 
                    <td class="table-primary">{{$produto->id}}</td>
                    <td class="table-primary">{{$produto->nome}}</td>
                    <td class="table-primary">{{$produto->um}}</td>
                </tbody>
            </table>
</div>
</body>
</html>