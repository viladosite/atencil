<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';

// Variáveis com dados do formulário
$modformid = $_POST['modtoremid'];
$modformdir = $_POST['modtoremdir'];

// Checagem de conexão
if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


// Remoção dos arquivos do mod
$modremdir = delete_files('$home_dir . $mods_dir . "/" . $modformdir');

// Queries de remoção do mod
$modremquery = " DELETE FROM at_modules WHERE modid = '$modformid' ";

// Execução de verificação de dados
$modremdb = mysqli_query($mysql, $modremquery);


if ($modrembd = true & $modremdir = true) {
	
	// Redirect back to the instalation page
	header("Location: ../pages/mod_list.php");

}




?>