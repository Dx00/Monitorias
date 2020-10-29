<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Página Inicial.</title>
</head>
<body>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Página Inicial.</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./php/lista.php">Lista de Produtos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <form method="POST" action="./php/actions/cadastrar_produtos.php" class="col-md-4 mx-auto">
                <h4> Cadastro de Produtos </h4>
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
                <a href="./php/lista.php" class="btn btn-success">Lista de Produtos</a>
            </form>
        </div>
    </div>
</body>
</html>