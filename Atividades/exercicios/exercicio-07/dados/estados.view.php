<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <meta name="author" content="Dione Willy Evangelista" />
  <meta name="description"
        content="Tabela exibindo dados do banco de dados através do PHP" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Lista de Estados em Tabela</title>
</head>

<body>
    <div class="int">
        <div class="int-content">
            <div>
                <h1>Tabela com dados do banco</h1>
            </div>
        </div>
    </div>
    <section>
        <div id="rel">
            <table class="table table-striped-columns">
                <thead>
                    <tr class="table-primary">
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Sigla</th>
                        <th>Criado em</th>
                        <th>Atualizado em</th>
                    </tr>
                </thead>
                <tbody>
                  <?php 
                  while($e= $estados->fetch())
                    echo '<tr class="table-primary"> 
                    <td class="table-primary">'.$e['id'].'</td>
                    <td class="table-primary">'.$e['nome'].'</td>
                    <td class="table-primary">'.$e['sigla'].'</td>
                    <td class="table-primary">'.$e['created_at'].'</td>
                    <td class="table-primary">'.$e['updated_at'].'</td> </tr>'
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <footer>
        <div>
            <p>Exercício em Sistemas Web I - Dione W.</p>
        </div>
    </footer>
</body>
</html>