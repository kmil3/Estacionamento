<?php
define("SERVER", "localhost");
define("USER", "root");
define("PASS", "80807");
define("DB", "estacionamento");

function criaConexao()
{
    try {
        $conexao = new PDO('mysql:host=' . SERVER . ';dbname=' . DB, USER, PASS);
        return $conexao;
    } catch (PDOException $e) {
        echo "Erro na conexão. Erro gerado: " . $e->getMessage();
    }
}
