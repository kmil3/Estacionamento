<?php
include_once("Dao/usuarioDao.php");

$nome = $_POST['username'];
$senha = $_POST['password'];
   
$usuario = buscaUsuario($nome,$senha); ?>

<?php if (isset($usuario)) { 
    session_start();
    $_SESSION['username'] = $usuario['username'];
    $_SESSION['password'] = $usuario['id'];
    
    header('Location:Telas/tela_placa.php'); 
}  else { 

    header('Location:Estacionamento/index.php');
}

?>	
