<?php
include_once("Dao/entrada_saidaDao.php");
$id = remove_registro($_GET['id']);

header('Location:Telas/tela_controle.php');

