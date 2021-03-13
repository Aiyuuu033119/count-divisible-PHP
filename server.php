<?php

    $uri = $_SERVER['REQUEST_URI'];
    $uri = trim($uri, '/');
    
    include 'back.php';
    
    // echo $uri;

    // if($uri=='server.php/compute'){
        $index = new Compute();
        $index->divisible();
    // }
?>