<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Página Home (Principal) estilizada com CSS, exercício 002 das atividades da máteria Sistemas Web I"/>
        
    <meta name="author" content="Dione Willy Evangelista" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/css/style.css" />
    <title>Home</title>
</head>

<body>
    <div class="int">
        <div class="int-content">
            <div>
                <h1>Sistemas Web - Banco de dados</h1>
            </div>
        </div>
    </div>
    <header>
    <div>
        <nav class="nav justify-content-center">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">Home</a>
                </li>
                <li>
                    <a class="nav-link" href="/resources/pages/states.html">Estados</a>
                </li>
                <li>
                    <a class="nav-link" href="/resources/pages/cities.html">Cidades</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('/produtos') }}">Produtos</a>
                </li>
                <li>
                    <a class="nav-link" href="/resources/pages/people.html">Pessoas</a>
                </li>
                <li>
                    <a class="nav-link" href="/resources/pages/shopping.html">Compras</a>
                </li>
                <li>
                    <a class="nav-link" href="/resources/pages/profile.html">Perfil</a>
                </li>
                <li>
                    <a class="nav-link" href="/resources/pages/form.html">Formulario</a>
                </li>
                <li>
                    <a class="nav-link" href="/resources/pages/report.html">Relatório</a>
                </li>
                <li>
                    <a class="nav-link" href="/resources/pages/logout.html">Sair</a>
                </li>
            </ul>
        </nav>
    </div>
    </header>
<footer>
<div>
  <p>Exercício em Sistemas Web I - Dione W.</p>
</div>
</footer>

</body>

</html>