<?php

    header('Access-Control-Allow-Origin: *');

    $uri = $_SERVER['REQUEST_URI'];
    $uri = trim($uri, '/');
    
    $index = new compute();
    $index->index(intval($_GET['x']),intval($_GET['y']),intval($_GET['p']));

    class compute{
        public function index($x,$y,$p)
        {

            if ($x%$p==0){
                $info = $y/$p - $x/$p + 1;
            }
            else{
                $info = $y / $p - $x / $p;
            }

            echo json_encode($info);
        }
    }

?>