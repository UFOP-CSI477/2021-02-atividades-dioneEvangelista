<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>



  <!-- Fonte do google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Roboto" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@800&family=Fascinate&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
  <!-- CSS da Aplicação -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


  <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-center">
        <a href="/" id="home">
          <img src="/img/icon_heart.svg" id="core" alt="Home" />
          Home
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" id="navl">
          <li><a href="/comum" class="nav-link px-4 text-white">
              <ion-icon name="lock-open-outline"></ion-icon>Área Comum
            </a></li>
          @auth
          <li><a href="/entidade" class="nav-link px-4 text-white">
              <ion-icon name="people-circle-outline"></ion-icon>Entidades
            </a></li>
          <li><a href="/coleta" class="nav-link px-4 text-white">
              <ion-icon name="bag-remove-outline"></ion-icon>Coletas
            </a></li>
          <li><a href="/item" class="nav-link px-4 text-white">
              <ion-icon name="restaurant-outline"></ion-icon>Itens
            </a>
          </li>
          <li><a href="/dashboard" class="nav-link px-4 text-white">
              <ion-icon name="lock-closed-outline"></ion-icon>Área Administrativa
            </a></li>
          <li class="nav-item">
            <form action="/logout" method="POST">
              @csrf
              <a href="/logout" class="nav-link" onclick="event.preventDefault();
             this.closest('form').submit()";>Sair
              </a>
            </form>
          </li>
          @endauth
        </ul>
        @guest
        <div class="text-end">
         <a href="/login"><button type="button" class="btn btn-outline-light me-2">Login</button></a> 
          <a href="/register"><button type="button" class="btn btn-warning">Registre-se</button></a>
        </div>
        @endguest
      </div>
    </div>
  </header>

  <main>
    <div>
      <div>
        @if(session('msg'))
        <p class="msg">{{session('msg')}}</p>
        @elseif(session('msgno'))
        <p class="msgno">{{session('msgno')}}</p>
        @endif
        @yield('content')
      </div>
    </div>
  </main>

  <footer>
    <p>Sistema de Doação de Alimentos e Agasalhos</p>
    <p>By: Dione Willy Evangelista</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>