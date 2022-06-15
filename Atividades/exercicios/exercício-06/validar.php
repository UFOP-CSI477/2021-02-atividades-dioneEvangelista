<?php
$pnome = $_POST['pnome'];
$snome = $_POST['snome'];
$enderecoCompleto = "{$_POST['endereco']}, {$_POST['bairro']}, {$_POST['cidade']}, {$_POST['estado']}";
$email = $_POST['email'];
$tel = $_POST['tel'];
$inputfile = $_POST['inputfile'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Pessoas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <h2>Dados do formulário</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="table-dark">
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Endereço</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $pnome ?></td>
                    <td><?php echo $snome ?></td>
                    <td><?php echo $enderecoCompleto ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $tel ?></td>
                </tr>
            </tbody>

        </table>
    </div>
    <footer>
        <div>
            <p>Exercício em Sistemas Web I - Dione W.</p>
        </div>
    </footer>
</body>

</html>