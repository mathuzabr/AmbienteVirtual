<?php
session_start();
include('verificaaut.php');
?>

<DOCTYPE html>
<html lang="pt-br">
<head>
<title>Ambiente Virtual - Técnicas de Filmagem e Enquadramento</title>
<link href="pages/estilo/av.css" rel="stylesheet">
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="https://informaticode.store/imgs/INformaticodeSN.png"/>

</head>
<body>
<div id="g1">
    <div id="logo">
    <a href="?">
    <img src="img/logo.png" draggable="false"> </a>
    </div>

    <div id="cabecalho">
    <a href="pages/global/ajuda.php#p1"  target="ead">Sobre</a>  &nbsp;<a href="https://informaticode.store/linksdabio" target=_"blank">Social</a>  &nbsp;<a href="pages/global/ajuda.php"  target="ead">Ajuda </a>
<div class="userarea">


    <?php
    if(!$_SESSION['eMail']) {
    echo "<a href='pages/global/cadastro.php' target='ead'>Criar Conta</a>  &nbsp; <a href='pages/global/login.php' target='ead'><b>Entrar</b></a>";
    } else {
    echo "Olá <a href='pages/global/perfil.php' target='ead'>" . $_SESSION['Nome'] . "</a>!"; 
    }
?>

</div>
    </div>
</div>
<div id="g2">
<center>
<iframe id="navegar" name="ead" src="pages/a7x/welcome.php" height="100%"></iframe>
</center>
</div>
<div id="g3">
Todos direitos reservados a <b>Informaticode</b> - 2020.
</div>
</body>
</html>
