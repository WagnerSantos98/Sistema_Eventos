<?php
//Incluindo conexão com banco de dados e iniciando a seção
include_once('../db/conexao.php');
session_start();

if (!isset($_SESSION['nome'])) {
    header("Location: ./login.php");
} 

error_reporting(0);

//Cadastro de usuário
if (isset($_POST['btn_usuario'])) {
	$nome = $_POST['nome'];
    $email = $_POST['email'];
	$senha = sha1($_POST['senha']);
		$sql = "SELECT * FROM tb_usuarios WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO tb_usuarios (nome, email, senha)
					VALUES ('$nome', '$email', '$senha')";
			$result = mysqli_query($con, $sql);
			if ($result) {
				$nome = "";
				$email = "";
				$_POST['senha'] = "";
                echo "<script>alert('Wow! Registro do usuário concluído.')</script>";
			} else {
				echo "<script>alert('Woops! Algo errado aconteceu.')</script>";
			}
		} else {
			echo "<script>alert('Woops! E-mail já existe.')</script>";
		}
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Compiled CSS-->
    <link rel="stylesheet" href="../assets/css/uikit.min.css">

    <!--Compiled JS-->
    <script src="../assets/js/uikit.min.js"></script>

    <!--Compiled Icons-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.14/js/uikit-icons.min.js"></script>
    <title>Sistema de Eventos</title>
</head>
<body>
    <header>
    <!--Navbar-->
    <nav class="uk-container uk-navbar">
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active">
                    <a href="#">Eventos <strong>USF</strong></a>
                </li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@s">
                <li class="uk-active"><a href="#">Pagina Inicial</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Cadastro</a></li>
                <li><a href="./logout.php"><i uk-icon="sign-out"></i></a></li>
            </ul>
            <!--Menu Icon-->
            <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
        </div>
    </nav>
</header>

<!--Sidenav Mobile-->
<div id="sidenav" uk-offcanvas="flip:true" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav">
            <li><a href="#">Pagina Inicial</a></li>
            <li><a href="#">Eventos</a></li>
            <li><a href="#">Cadastro</a></li>
            <li><a href="./logout.php"><i uk-icon="sign-out"></i></a></li>  
        </ul>
    </div>
</div>

<!--Página Inicial-->
<div class="uk-container">
    <div class="uk-container uk-container-center">
    <h3 class="uk-margin-top">Cadastros</h3>
        <ul class="uk-tab" data-uk-tab="{connect:'#my-id'}">
            <li><a href="">Usuários</a></li>
            <li><a href="">Tab 2</a></li>
            <li><a href="">Tab 3</a></li>
        </ul>
        <ul id="my-id" class="uk-switcher uk-margin">
            <li><a href="#" id="autoplayer" data-uk-switcher-item="next"></a>
            <form class="uk-grid-small" uk-grid method="POST" action="">
                <div class="uk-width-1-1">
                    <label for="nome">Nome Completo</label>
                    <input class="uk-input" id="nome" type="text" name="nome">
                </div>
                <div class="uk-width-1-2@s">
                    <label for="email">Email</label>
                    <input class="uk-input" id="email" type="email" name="email">
                </div>
                <div class="uk-width-1-4@s">
                    <label for="senha">Senha</label>
                    <input class="uk-input" id="senha" type="password" name="senha">
                </div>
                <div class="uk-width-1-4@s"><br>
                    <button class="uk-button uk-button-primary" name="btn_usuario" type="submit">Salvar</button>
                </div>

            </form>
            </li>
            <li>Content 2</li>
            <li>Content 3</li>
        </ul>
    </div>
</div>

</body>
</html>