<?php
    include_once("conexao.php");

    function insereVeiculo($placa, $fabricante, $modelo, $cor){
    $conexao = criaConexao(); 

    $sql = "INSERT INTO veiculos (placa, fabricante, modelo, cor) VALUES (:placa, :fabricante, :modelo, :cor)"; 

    $stmt = $conexao->prepare($sql); 
    $stmt->bindParam(":placa", $placa);
    $stmt->bindParam(":fabricante", $fabricante);
    $stmt->bindParam(":modelo", $modelo);
    $stmt->bindParam(":cor", $cor);


    try {
        if ($stmt->execute()) {
            echo $stmt->rowCount() . " registro inserido com sucesso.";
        } else {
            print_r($stmt->errorInfo());
        }
    } catch (PDOException $e) {
        echo "Erro na conexão. Erro gerado: " . $e->getMessage();
    }
}


function buscaPlaca($placa) {
    $conexao = criaConexao();

    $sql = "SELECT * FROM veiculos WHERE placa = :placa";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":placa", $placa);
    $stmt->execute();

    $res = $stmt->fetchAll();

    return $res[0];
}


function BuscaTodosVeiculos(){
    $conexao = criaConexao();

    $sql = "SELECT * FROM veiculos";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    $veiculos = array();

    while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
        array_push($veiculos, $resultado);
    }

    return $veiculos;
}

function hora () {		
    date_default_timezone_set('America/Sao_Paulo');		
    $hora = date('H');		
    }

    function buscaVeiculoPeloId($id){
        $conexao = criaConexao();

        $sql = "SELECT * FROM entrada_saida WHERE id = :id";
        
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    
        $res = $stmt->fetchAll();
    
        return $res;
    }

    function buscaId($placa){
        $conexao = criaConexao();
    
        $sql = "SELECT id FROM veiculos WHERE placa = :placa";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":placa", $placa);
        $stmt->execute();
    
        $res = $stmt->fetchAll();
        //print_r($res);die();
        return $res[0]['id'];
    }
