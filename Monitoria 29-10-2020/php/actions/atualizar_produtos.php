<?php

    require_once "db_connect.php";

    if(isset($_POST['atualizar'])){
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];

        $sql = "UPDATE produtos SET nome='$nome', descricao='$descricao', preco='$preco' WHERE id = $id;";
        mysqli_query($connect, $sql);

        header("Location: ../lista.php");
    }

?>