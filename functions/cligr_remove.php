<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';

// Variáveis com dados do formulário
$cligrformid = $_POST['cligrid'];
$clientcomp = $_SESSION['UserCompany'];

// Checagem de conexão
if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


// Prepara a query de remoção do banco
$cligrquery = " DELETE FROM at_clientgroups WHERE cligrid = '$cligrformid' ";
$cligrdel = mysqli_query($mysql, $cligrquery);

// Executa a remoção do banco e dos arquivos
if ($cligrdel = true) {
	
	// Move os usuários do grupo excluído para o grupo padrão
	$moveuserquery = "UPDATE `at_clients` SET `clientgroup` = `1` WHERE `clientcompany` = `$clientcomp` AND `clientgroup` = `$cligrformid`";
	$moveusers = mysqli_query($mysql, $moveuserquery);

	// Redirect back to the list
	header("Location: ../pages/client_groups.php");

} else {

	// Redirect back to the list
	header("Location: ../pages/client_groups.php");
    
}

?>