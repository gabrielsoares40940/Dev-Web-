<?php

include_once('conexao.php');

$usuario = $_POST['usuarioLogin_'];
$senha = $_POST['senhaLogin_'];

$login = "INSERT INTO tb_usuario(usuario, senha)
    VALUES('$usuario', '$senha'', NOW())";

    $fazerLogin = mysqli_query($ligar, $login);

?>