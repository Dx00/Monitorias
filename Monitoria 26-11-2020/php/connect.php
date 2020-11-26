<?php

    function query($sql) {
        $servidor = "0.0.0.0";
        $usuario = "root";
        $senha = "123456";
        $banco = "catalogo";

        $connect = mysqli_connect($servidor, $usuario, $senha, $banco);
        $resultado = mysqli_query($connect, $sql);
        mysqli_close($connect);
        return $resultado;
    }

    function nonquery($sql) {
        $servidor = "0.0.0.0";
        $usuario = "root";
        $senha = "123456";
        $banco = "catalogo";

        $connect = mysqli_connect($servidor, $usuario, $senha, $banco);
        $resultado = mysqli_query($connect, $sql);
        mysqli_close($connect);
    }