<?php

    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "";
    $banco    = "ecommerce";

    $connect = mysqli_connect($servidor, $usuario, $senha, $banco);
    mysqli_set_charset($connect, "UTF-8");

    if(mysqli_connect_error()){
        echo mysqli_connect_error();
    }

?>