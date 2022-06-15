<?php ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Página Form (Formulário) estilizada com CSS utilizando framework Bootstrap, utilizando validação e PHP."
    />
    <meta name="author" content="Dione Willy Evangelista" />
    <link rel="stylesheet" href="style.css"/>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
   <script src="scripts.js"></script>
    <title>Formulário</title>
  </head>

  <body>
    <div class="int">
      <div class="int-content">
        <div>
          <img src="img/database.png" alt="Database" />
        </div>
        <div>
          <h1>Relatório</h1>
        </div>
      </div>
    </div>
    <header>
      <ul class="nav nav-tabs nav-justified">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Estados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pessoas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Compras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.html">Formulário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Relatório</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Perfil</a>
        </li>
      </ul>
    </header>

    <form action="validar.php" name="dados" method="POST">
        <div class="input-group">
            <span class="input-group-text">Primeiro e último nome</span>
            <input type="text" aria-label="First name" class="form-control" id="pnome" name="pnome">
            <input type="text" aria-label="Last name" class="form-control" id="snome" name="snome">
          </div>
      </div>
      <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input
          type="text"
          name="endereco"
          id="endereco"
          placeholder="Informe seu endereço"
          class="form-control"
        />
        <label for="bairro">Bairro:</label>
        <input
          type="text"
          name="bairro"
          id="bairro"
          placeholder="Informe seu bairro"
          class="form-control"
        />
        <label for="cidade">Cidade:</label>
        <input
          type="text"
          name="cidade"
          id="cidade"
          placeholder="Informe sua cidade"
          class="form-control"
        />
        <label for="estado">Estado:</label>
        <input
          type="text"
          name="estado"
          id="estado"
          placeholder="Informe seu estado"
          class="form-control"
        />
      </div>
      <div class="form-control">
        <label for="email">Email</label>
        <input
          type="text"
          name="email"
          id="email"
          placeholder="Informe seu email"
          class="form-control"
        />
      </div>
      <div class="form-group">
        <label for="tel">Telefone:</label>
        <input
          type="text"
          id="tel"
          name="tel"
          placeholder="Digite seu telefone de contato"
          class="form-control"
        />
      </div>
      <div class="input-group mb-3">
        <caption>Documento</caption>
        <input type="file" class="form-control" id="inputfile" name="inputfile">
      </div>
        <div>
          <input type="submit" value="Enviar dados!" name="subdados" onchange="preencheDados()"/>
        </div>
      </form>
    </div>
    <footer>
      <div>
        <p>Exercício em Sistemas Web I - Dione W.</p>
      </div>
    </footer>
  </body>
</html>
