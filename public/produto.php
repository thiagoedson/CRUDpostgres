<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> <link rel="stylesheet" type="text/css" href="assets/app.min.css">
    <title>
        Postgres
    </title>
    <script src="assets/app.min.js" ></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">
        <i class="fas fa-cog fa-spin"></i>
        Postgres
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="./">Caixa </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="produto.php">Cadastrar produto <span class="sr-only">(current)</span></a>
            </li>


        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-secondary my-2 my-sm-0" type="submit">Sair</a>
        </form>
    </div>
</nav>

<main role="main" class="container">

    <div class="starter-template">
        <div class="row">
            <div class="col-sm-4">
                <div class="card border-success shadow">
                    <div class="card-header">
                        Cadastro produto
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="produto_descricao">
                                Descrição
                            </label>
                            <input type="text" name="produto_descricao" id="produto_descricao" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="produto_preco">
                                Preço
                            </label>
                            <input type="text" name="produto_preco" id="produto_preco" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                           <button class="btn btn-success btn-sm">
                               <i class="fas fa-sign-in-alt"></i>
                               Cadastrar
                           </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border-warning shadow">
                    <div class="card-header">
                        Cadastro tipo
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="tipo_descricao">
                                Descrição
                            </label>
                            <input type="text" name="tipo_descricao" id="tipo_descricao" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="tipo_porcentagem">
                                %
                            </label>
                            <input type="text" name="tipo_porcentagem" id="tipo_porcentagem" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-warning btn-sm">
                                <i class="fas fa-sign-in-alt"></i>
                                Cadastrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- /.container -->
</body>
</html>
