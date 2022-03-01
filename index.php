<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="estilos/style.css">
    <title>CadLogin - Login</title>
</head>

<header>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper blue">
                <a href="index.php" class="brand-logo center">CadLogin</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="pages/ViewCadastro.php">Cadastro</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<body>

    <form action="controllers/newLogin.php" method="post" class="formulario">
        <div class="container">
            <h1 class="titulo">Login</h1>

            <label for="user">Insira seu usuario:</label>
            <input type="text" name="user" id="user">
            <label for="psswd">Insira sua senha:</label>
            <input type="password" name="psswd" id="psswd">
            <br>
            <input type="submit" value="Entrar" class="waves-effect waves-light btn-large blue">
            <br>
            <a href="pages/ViewCadastro.php">Cadastrar novo usuario</a>
        </div>
    </form>

</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</html>