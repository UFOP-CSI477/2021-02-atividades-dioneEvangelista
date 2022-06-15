<?php
    require 'connection.php';

    // Controller
    $estados = $connection->query("SELECT * from estados");

    require 'estados.view.php';
   