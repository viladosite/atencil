<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';

// Variáveis com dados do formulário
$modformid = $_POST['modtoremid'];
$modformdir = $_POST['modtoremdir'];

// Checagem de conexão
if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


// Prepara a query de remoção do banco
$modremquery = " DELETE FROM at_modules WHERE modid = '$modformid' ";
$modremdb = mysqli_query($mysql, $modremquery);


// Executa a remoção do banco e dos arquivos
if ($modrembd = true) {
	
	// Remove os arquivos e a pasta do módulo
	delete_files('$home_dir . $mods_dir . "/" . $modformdir');

	// Redirect back to the instalation page
	header("Location: ../pages/mod_list.php");

}




?>