<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Inserção de Produtos</title>
<style>
label{
  margin:10px;
}
input, button{
  margin:5px;
}

</style>

</head>
<body>
  
<form action="produtosControllerInsert.php" method="post">
<div class="form-group">
<label for="id">ID:</label>
<input type="text" name="id" id="id">
</div>
<div class="form-group">
<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome">
</div>
<div class="form-group">
<label for="un">Unidade:</label>
<input type="text" name="un" id="un">
</div>
<button type="submit" class="btn btn-primary">Inserir</button>



</form>



</body>
</html>