<?php
    include_once("conexao.php");

    function buscaRegistro($veiculo){
        $conexao = criaConexao();

        $sql = "SELECT * FROM entrada_saida WHERE veiculo = :veiculo";
        
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":veiculo", $veiculo);
        $stmt->execute();
    
        $res = $stmt->fetchAll();
    
        return $res[0];
    }

    function pegaRegistros(){
        $conexao = criaConexao();

        $sql = "SELECT * FROM entrada_saida";
    
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
    
        $registros = array();
    
        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($registros, $resultado);
        }
    
        return $registros;
    }

    function BuscaVeiculoPorRegistro($id){
        $conexao = criaConexao();

        $sql = "SELECT entrada_saida.veiculo, veiculos.placa, veiculos.fabricante, veiculos.modelo, 
        veiculos.cor, entrada_saida.hr_entrada, entrada_saida.hr_saida 
        FROM entrada_saida
        join veiculos on entrada_saida.veiculo = veiculos.id
        where entrada_saida.veiculo = :id";
    
        $stmt = $conexao->prepare($sql); 
        $stmt->bindParam(":id", $id);
    
    
        $selecionados = array();
    
        try {
            $stmt->execute();
            while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
                array_push($selecionados, $resultado);
            }
            return $selecionados;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function BuscaTodos(){
        $conexao = criaConexao();

        $sql = "SELECT entrada_saida.veiculo, veiculos.placa, veiculos.fabricante, veiculos.modelo, 
        veiculos.cor, entrada_saida.hr_entrada, entrada_saida.hr_saida
        FROM entrada_saida
        join veiculos on entrada_saida.veiculo = veiculos.id ";
    
        $stmt = $conexao->prepare($sql); 
    
    
        $selecionados = array();
    
        try {
            $stmt->execute();
            while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
                array_push($selecionados, $resultado);
            }
            return $selecionados;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function registraEntrada($veiculo,$hr_entrada){
        $conexao = criaConexao();
        //echo($veiculo);
        //echo($hr_entrada);die();

        $sql = "INSERT INTO entrada_saida (veiculo, hr_entrada) VALUES (:veiculo, :hr_entrada)"; 

        $stmt = $conexao->prepare($sql); 
        $stmt->bindParam(":veiculo", $veiculo);
        $stmt->bindParam(":hr_entrada", $hr_entrada);
    
        try {
            if ($stmt->execute()) {
                echo $stmt->rowCount() . " entrada registrada com sucesso.";
            } else {
                print_r($stmt->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Erro na conexão. Erro gerado: " . $e->getMessage();
        }
    }

    function registraSaida($veiculo, $hr_saida){
        $conexao = criaConexao();

        $sql = "UPDATE entrada_saida SET hr_saida = :hr_saida WHERE veiculo = :veiculo"; 

        $stmt = $conexao->prepare($sql); 
        $stmt->bindParam(":veiculo", $veiculo);
        $stmt->bindParam(":hr_saida", $hr_saida);
    
        try {
            if ($stmt->execute()) {
                echo $stmt->rowCount() . " saida registrada com sucesso.";
            } else {
                print_r($stmt->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Erro na conexão. Erro gerado: " . $e->getMessage();
        }
    }

    function calculaValor ($hr_entrada, $hr_saida){

        $entrada =  new \DateTime($hr_entrada);
        $saida =  new \DateTime($hr_saida);

        $dateDiff = $entrada->diff($saida);

        $resultado = $dateDiff->h. $dateDiff->i. $dateDiff->s;
        //ta calculando certo
    
        $minutos = $dateDiff -> i;
        $hora = $dateDiff -> h;
        
        $valor = (($hora + ($minutos/60))*5.50); //transforma tudo pra horas e calcula 
        echo("R$ ");
        echo round($valor, 2); //deu certo
  
    }

    
function remove_registro($id){
    $conexao = criaConexao();

    $sql = "DELETE FROM entrada_saida WHERE veiculo = :id"; 

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);

    try {
        $stmt->execute();
        echo "</br></br>";
        echo $stmt->rowCount() . " registro excluído.";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?> 