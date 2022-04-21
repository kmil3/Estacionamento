<?php
    include_once("conexao.php");

    function buscaUsuario($nome,$senha){
        $conexao = criaConexao();

        $sql = "SELECT * FROM usuarios WHERE usuarios.username = :username and usuarios.password = :password";


        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":username", $nome);
        $stmt->bindParam(":password", $senha);


        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
?>