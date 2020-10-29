<?php

    require_once "./actions/db_connect.php";

    include_once "./includes/cabecalho.php";

?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mx-auto">
<?php
    $id = $_GET['visualizar'];
    $sql = "SELECT * FROM produtos WHERE id = $id LIMIT 1;";
    $resultado = mysqli_query($connect, $sql);

    while($row = mysqli_fetch_assoc($resultado)){
?>
        <p>Código: <?php echo $row['id'] ?></p>
        <p>Preço: <?php echo $row['preco'] ?></p>
        <label>Descição: </label>
        <p><?php echo $row['descricao'] ?> </p>

<?php
    }
?>
                    
            </div>
        </div>
    </div>

<?php

    include_once "./includes/rodape.php";

?>