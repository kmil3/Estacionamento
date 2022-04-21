<?php
include_once("Dao/veiculoDao.php");
include_once("Dao/entrada_saidaDao.php");

$placa = $_POST['placa'];   
$placa_cod = buscaPlaca($placa);

if (isset($placa_cod)) {

    date_default_timezone_set('America/Sao_Paulo');	
    $hora = date("H:i:s");
    $placa = $_POST['placa'];
    $id = buscaId($placa); 
    $registro = buscaRegistro($id);

    if(isset($registro)){
        echo("lerolero");
    }
    else{
        registraEntrada($id,$hora); 
    }
    //echo($placa); 
    //echo($id);die(); 

    header('Location:Telas/tela_controle.php');


}else {
    header('Location:Telas/tela_cadastro.php');
}
	

