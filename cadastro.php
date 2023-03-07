<?php

require_once('conexao.php');

$usuario = $_POST['usuarioCadastro_'];
$email = $_POST['email_'];
$senha = $_POST['usuarioSenha_'];
$perfil = $_POST['perfil_'];

$sql_cadastro = mysqli_query($ligar,
    "INSERT INTO tb_usuario(usuario, email, senha, perfil)
    VALUES('$usuario', '$email', '$senha', '$perfil')"
);

if ($sql_cadastro==true) {

    echo "<script>
    
    alert('Cadastrado com sucesso');
    window.location.href='index.html'
    </script>";
} else {
    
    echo "<script>
    
    alert('Falha no cadastro');
    window.location.href='cadastroUsuario.html';
    </script>";
}

?>