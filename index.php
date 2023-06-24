<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Compiled CSS-->
    <link rel="stylesheet" href="assets/css/uikit.min.css">

    <!--Compiled JS-->
    <script src="assets/js/uikit.min.js"></script>

    <!--Compiled Icons-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.14/js/uikit-icons.min.js"></script>
    <title>Home</title>
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
                <li><a href="./content/login.php"><i uk-icon="user"></i> USF Eventos</a></li>
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
            <li><a href="./content/login.php"><i uk-icon="user"></i> USF Eventos</a></li>  
        </ul>
    </div>
</div>

<!--Página Inicial-->
<div class="uk-container">
    <h2>Teste</h2>
</div>

</body>
</html>