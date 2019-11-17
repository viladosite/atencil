<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';

// Variáveis com dados do formulário
$clientformid = $_POST['clientid'];

// Checagem de conexão
if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


// Prepara a query de remoção do banco
$clientquery = " DELETE FROM at_clients WHERE clientid = '$clientformid' ";
$clientdel = mysqli_query($mysql, $clientquery);

// Executa a remoção do banco e dos arquivos
if ($clientdel = true) {
	
	// Redirect back to the list
	header("Location: ../pages/client_list.php");

} else {

	// Redirect back to the list
	header("Location: ../pages/client_list.php");
    
}

?>