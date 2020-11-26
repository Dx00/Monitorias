<?php

    header("Access-Control-Allow-Origin:*");

    require_once 'connect.php';

    if($_SERVER['REQUEST_METHOD'] === 'GET'){

        echo json_encode(array("msg" => "Método GET Efetuado"));

    } else if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $titulo    = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $categoria = $_POST['categoria'];

        $sql = "INSERT INTO filmes VALUES(null, '$titulo', '$descricao', '$categoria');";
        
        nonquery($sql);

        echo json_encode(array("msg" => "Método POST Efetuado"));

    } else if($_SERVER['REQUEST_METHOD'] === 'PUT'){

        echo json_encode(array("msg" => "Método PUT Efetuado"));

    } else if($_SERVER['REQUEST_METHOD'] === 'DELETE'){

        echo json_encode(array("msg" => "Método DELETE Efetuado"));

    } else {

        echo "Falha no processamento dos dados. Método inválido.";

    }