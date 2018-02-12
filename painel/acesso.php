<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../imagens/logos/bootstrap.png">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/assets.css">
</head>
<body>
<!-- menu do administrador -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- comentário -->
        <div class="navbar-header">
            <a class="navbar-brand" href="/public/index.php"> Agenda </a>
        </div>

        <!-- comentário -->
        <div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"> Área Restrita </a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- container principal -->
<div class="container">
    <div class="row">
        <div class="principal">
            <div class="col-md-4 col-md-offset-4">
                <div class="form-wrap">
                    <h1> ÁREA RESTRITA </h1>
                    <hr>
                    <form role="form" method="post" action="#">
                        <div class="form-group">
                            <label for="email" class="sr-only"> Email: </label>
                            <input class="form-control" type="email" name="email" placeholder="email@provedor.com">
                        </div>
                        <div class="form-group">
                            <label for="senha" class="sr-only"> Senha: </label>
                            <input class="form-control" type="password" name="senha" placeholder="********">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success btn-block" type="submit"> Entrar </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- comentário -->
<script src="public/js/jquery-3.2.1.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>




