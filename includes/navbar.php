<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>NavBar</title>
</head>
<body>
    <nav id="nav-bar">
        <div class="navbar-parte-1">
            <div class="ajuste-logo">
                <img class="logo" src="./imagens/logo.png">
            </div>
        </div>
        <div class="navbar-parte-2">
            <a id="nav-links"href="index.php">HOME</a>
            <a id="nav-links1"href="index.php#sobre">SOBRE</a>
            <a id="nav-links2"href="denuncias.php">PORTAL DE DENÚNCIAS</a>
        </div>
        <div class="navbar-parte-3">
            <div id="navbarDeslogado" class="navbar-deslogado">
                <div id="pesquisa" style="display:none;"class="pesquisa">
                    <input type="text" placeholder="Localizar Denuncias" name id="">
                    <button>🔍</button>
                </div>
                <div class="ajuste-link-login">
                    <a class="link-login" href="novo-login.php">Login</a>
                </div>
            </div>
            <div class="navbar-logado">
                <img class="foto-navbar circulo" src="imagens/foto-de-perfil-vazia.jpg">
                <div class="seta">
                    <div class="linha-seta-1"></div>
                    <div class="linha-seta-2"></div>
                </div>
            </div>
        </div>
    </nav>
