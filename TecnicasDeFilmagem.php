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
    <a href="https://www.informaticode.com.br/sobre" target=_"blank">Sobre</a>  &nbsp;<a href="https://informaticode.store/linksdabio" target=_"blank">Social</a>  &nbsp;<a href="https://api.whatsapp.com/send?phone=5527988334621&text=Ol%c3%a1%20Preciso%20de%20suporte" target=_"blank">Suporte-me! </a>
<br /> 


    <?php
    if(!$_SESSION['eMail']) {
    echo "<a href='pages/global/cadastro.php' target='ead'>Criar Conta</a>  &nbsp; <a href='pages/global/login.php' target='ead'><b>Entrar</b></a>";
    } else {
    echo "Olá " . $_SESSION['Nome'] . "!"; 
    }
?>

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
