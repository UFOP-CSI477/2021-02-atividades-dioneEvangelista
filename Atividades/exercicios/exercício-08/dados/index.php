<?php
    require 'connection.php';


 $estados = $connection->query("SELECT * from produtos");


    require 'produtosView.php';
   