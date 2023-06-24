<?php

//Incluindo conexão com banco de dados
include_once('./db/conexao.php');
 
session_start();

error_reporting(0);

if (isset($_SESSION['nome'])) {
    header("Location: ./dashboard.php");
}

if (isset($_POST['btn_acessar'])) {
	$email = $_POST['email'];
	$senha = sha1($_POST['senha']);

	$sql = "SELECT * FROM tb_usuarios WHERE email='$email' AND senha='$senha'";
	$result = mysqli_query($con, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['nome'] = $row['nome'];
		header("Location: ./dashboard.php");
	} else {
		echo "<script>alert('Ooops! E-mail ou senha incorretos. ')</script>";
	}
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Login - Sistema de Eventos</title>
</head>
<body>
    <!--Login-->
    <div class="login-container">
        <div class="login-inner">
            <div class="image-container">
                <img src="../assets/img/Computer login-amico.svg" class="group-image">
            </div>
            <div class="login-form">
                <div class="login-form-inner">
                    <div class="logo-container">
                        <img src="../assets/img/logotipo-usf.png" alt="" class="logo">
                    </div>
                </div>
                <header class="header">Login</header>
                <header class="sub-header">Bem vindo ao <b>Sistema de Eventos USF!</b></header>

                <!--Formulário-->
                <form action="" method="POST">
                    <div class="input-container">
                        <label for="emailAddress" class="label"><img src="../assets/img/bx-envelope.svg" class="label-icon"><span>Email*</span></label>
                        <input type="email" class="input" id="emailAddress" placeholder="Insira seu email" name="email" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="input-container">
                        <label for="password" class="label"><img src="../assets/img/bx-lock-alt.svg" class="label-icon"><span>Senha*</span></label>
                        <input type="password" class="input" id="password" placeholder="Insira seu email" name="senha" value="<?php echo $_POST['senha']; ?>" required>
                    </div>
                    <div class="options-container">
                        <div class="checkbox-container">
                            <input type="checkbox" id="remember" class="checkbox"><label for="remember">Lembre de mim</label>
                        </div>
                        <a href="#" class="forgot-password">Esqueceu a senha?</a>
                    </div>
                    <button class="login-button" name="btn_acessar">Acessar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>