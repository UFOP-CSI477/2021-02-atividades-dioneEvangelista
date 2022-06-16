<?php

require '../vendor/autoload.php';
use App\Database\Connection;
use App\Database\AdapterSQLite;
use App\Models\Estado;
use App\Models\Cidade;
use App\Models\Produto;


$state = new Estado(1, 'Minas Gerais', 'MG');

$connection = new Connection(new AdapterSQLite('../App/Database/database.sqlite'));
$connection->getAdapter()->open();

$list_states = $connection->getAdapter()->get()->query('SELECT * FROM estados');
$list_products = $connection->getAdapter()->get()->query('SELECT * FROM produtos');
$list_citys = $connection->getAdapter()->get()->query('SELECT * FROM cidades');

$states = [];
foreach ($list_states as $state) {
    $states[] = new Estado($state['id'], $state['name'], $state['sigla']);
}
$citys = [];
foreach ($list_citys as $city) {
    $citys[] = new Cidade($city['id'], $city['nome'], $city['estado']);
}
$products = [];
foreach ($list_products as $product) {
    $products[] = new Produto($product['id'], $product['nome'], $product['um']);
}

echo "<body>";
  echo "<div>
<caption><strong>TABELA DAS CIDADES</strong></caption>";
    require '../App/Views/Cidades.php';
  echo "</div>";

  echo "<div>
  <caption><strong>TABELA DOS ESTADOS</strong></caption>";
   require '../App/Views/Estados.php';
  echo "</div>";

  echo "<div>
  <caption><strong>TABELA DOS PRODUTOS</strong></caption>";
  require '../App/Views/Produtos.php';
  echo "</div>";


echo "</body>";
echo "</html>";