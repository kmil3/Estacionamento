<?php
    include_once('Dao/veiculoDao.php');
    include_once('Dao/entrada_saidaDao.php');

    $placa = $_POST['placa_form'];
    $fabricante = $_POST['fabricante_form'];
    $modelo = $_POST['modelo_form'];
    $cor = $_POST['cor_form'];
    insereVeiculo($placa, $fabricante, $modelo, $cor);

    date_default_timezone_set('America/Sao_Paulo');	
    $hora = date("H:i:s");
    $id = buscaId($placa); 
    $registro = buscaRegistro($id);
    registraEntrada($id,$hora); 
    header('Location:Telas/tela_controle.php');
    

?> 