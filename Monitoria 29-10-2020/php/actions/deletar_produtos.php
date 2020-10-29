<?php

    require_once 'db_connect.php';

    if(isset($_GET['deletar'])){
        $id = $_GET['deletar'];

        $sql = "DELETE FROM produtos WHERE id = $id;";
        mysqli_query($connect, $sql);

        header('Location: ../lista.php');
    }


?>