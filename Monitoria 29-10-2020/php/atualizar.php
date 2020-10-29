<?php

    require_once "./actions/db_connect.php";

    include_once "./includes/cabecalho.php";

    if(isset($_GET['atualizar'])){
        $id = $_GET['atualizar'];
        $sql = "SELECT * FROM produtos WHERE id = $id LIMIT 1";
        $resultado = mysqli_query($connect, $sql);
        while($row=mysqli_fetch_assoc($resultado)){
?>
    <div class="container-fluid">
        <div class="row">
            <form method="POST" action="./actions/atualizar_produtos.php?id=<?php echo $row['id'] ?>" class="col-md-4 mx-auto">
                <h4> Atualização de Produtos. </h4>
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input value="<?php echo $row['nome'] ?>" type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="preco">Preço: </label>
                    <input value="<?php echo $row['preco'] ?>" type="text" class="form-control" id="preco" name="preco">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição: </label>
                    <textarea class="form-control" id="descricao" name="descricao"><?php echo $row['descricao'] ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="atualizar">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
        }
    }

    include_once "./includes/rodape.php";
?>