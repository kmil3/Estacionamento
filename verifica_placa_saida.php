<?php
include_once("Dao/veiculoDao.php");
include_once("Dao/entrada_saidaDao.php");

$placa = $_POST['placa'];
$id = buscaId($placa); 
$registro = buscaRegistro($id); 

    if(isset($id)){
        //VEICULO NO BANCO DE DADOS
        if (isset($registro)) {
           //aqui a gente pega a hora da saída e tira ele do registro
           //mostra a tabela de saída
            date_default_timezone_set('America/Sao_Paulo');	
            $hora = date("H:i:s");

            registraSaida($id, $hora);
         
            header("Location:Telas/tela_saida.php?id=$id");
                            
        }else {
            echo("Esse veículo não entrou no estacionamento");
            //aqui seria show um modal dizendo que o veiculo não entrou 
            //o veiculo está no banco mas não se registrou na entrada
            header('Location:Telas/tela_placa.php');
        }
    }
    else{
        //VEICULO NÃO ESTÁ NO BANCO
        header('Location:Telas/tela_cadastro.php');
    }

  


	

