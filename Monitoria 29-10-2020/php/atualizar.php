<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Página Inicial.</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <form method="POST" action="./php/actions/cadastrar_produtos.php" class="col-md-4 mx-auto">
                <h4> Atualização de Produtos. </h4>
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="preco">Preço: </label>
                    <input type="text" class="form-control" id="preco" name="preco">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição: </label>
                    <textarea class="form-control" id="descricao" name="descricao"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="cadastrar">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>