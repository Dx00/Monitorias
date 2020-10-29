<?php

    require_once "./actions/db_connect.php";

    include_once "./includes/cabecalho.php";

?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mx-auto">
            <h3>Lista de produtos</h3>
                <table class="table table-responsive table-striped">
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Descricao</th>
                        <th>Preço</th>
                        <th>Opções</th>
                    </tr>

<?php

    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($connect, $sql);

    while($row = mysqli_fetch_assoc($resultado)){
?>
                    <tr>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['nome']; ?>
                        </td>
                        <td>
                            <?php echo $row['descricao']; ?>
                        </td>
                        <td>
                            <?php echo $row['preco']; ?>
                        </td>
                        <td>
                            <a href="#">Editar</a>|
                            <a href="#">Detalhe</a>|
                            <a href="./actions/deletar_produtos.php?deletar=<?php echo $row['id']; ?>" >Deletar</a>
                        </td>
                    </tr>
<?php

    }

?>
                    
                </table>
            </div>
        </div>
    </div>

<?php

    include_once "./includes/rodape.php";

?>