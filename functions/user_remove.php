<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';

// Variáveis com dados do formulário
$userid = $_POST['user'];

// Checagem de conexão
if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


// Prepara a query de remoção do banco
$userquery = " DELETE FROM at_users WHERE userid = '$userid' ";
$userdel = mysqli_query($mysql, $userquery);

// Executa a remoção do banco e dos arquivos
if ($userdel = true) {
	
	// Redirect back to the list
	header("Location: ../pages/user_list.php");

} else {

	// Redirect back to the list
	header("Location: ../pages/user_list.php");
    
}

?>