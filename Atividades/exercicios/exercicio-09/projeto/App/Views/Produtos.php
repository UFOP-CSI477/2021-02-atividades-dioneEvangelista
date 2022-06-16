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
    <table class="table table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>UM</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $product) {
                echo "<tr>";
                echo "<td>{$product->getId()}</td>";
                echo "<td>{$product->getNome()}</td>";
                echo "<td>{$product->getUm()}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>