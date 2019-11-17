<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';


// Variáveis com dados do formulário
$formcligrcomp = mysqli_real_escape_string($mysql, $_POST['cligrcomp']);
$formcligrname = mysqli_real_escape_string($mysql, $_POST['cligrname']);
$formcligrdesc = mysqli_real_escape_string($mysql, $_POST['cligrdesc']);

// Variáveis nativas do usuário
$useridatual = $_SESSION['UserID'];

// Condicionais de verificação de preenchimento de campos
if ( empty($formcligrname) ) {
	
	// Retorna o erro caso algum campo tenha sido deixado em branco
	echo '<script type="text/javascript">alert("Você não preencheu o nome do grupo. É necessário fornecer um nome para continuar.");history.go(-1);</script>';

} else {

	// Checagem de conexão
	if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


	// Queries de inserção dos dados
	$cligrsql = "
		INSERT INTO at_clientgroups (cligrcompany, cligrname, cligrdesc)
		VALUES ('$formcligrcomp', '$formcligrname', '$formcligrdesc');
	";

	// Execução de inserção de dados
	$criacligr = mysqli_query($mysql, $cligrsql);

	// Mostra mensagem de confirmação caso o registro funcione
	if ($criacligr) {

	    // Direciona para a tela de login
	    header("Location: ../pages/client_groups.php");

	    // Encerra a conexão
		mysqli_close($mysql);

	} else {

	    // Direciona para a tela de login
	    header("Location: ../pages/client_groups.php");

	    // Encerra a conexão
		mysqli_close($mysql);
	}

}

?>