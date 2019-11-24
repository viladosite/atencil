<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';

// Variáveis com dados do formulário
$groupid = $_POST['usergr'];

// Checagem de conexão
if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


// Prepara a query de remoção do banco
$usergrquery = " DELETE FROM at_usergroups WHERE usergroupid = '$groupid' ";
$usergrdel = mysqli_query($mysql, $usergrquery);

// Executa a remoção do banco e dos arquivos
if ($usergrdel = true) {
	
	// Move os usuários do grupo excluído para o grupo padrão
	$moveuserquery = " UPDATE at_users SET usergroup = '1'	WHERE usergroup = $groupid;";
	$moveusers = mysqli_query($mysql, $moveuserquery);

	// Redirect back to the list
	header("Location: ../pages/user_groups.php");

} else {

	// Redirect back to the list
	header("Location: ../pages/user_groups.php");
    
}

?>