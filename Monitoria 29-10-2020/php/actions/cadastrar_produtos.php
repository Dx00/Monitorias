<?php

    require_once "db_connect.php";

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];

        $sql = "INSERT INTO produtos VALUES (null, '$nome', '$descricao', '$preco');";
        mysqli_query($connect, $sql);

        header("Location: ../../index.php");
        
    }

?>