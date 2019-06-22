<?php
	// Inclui as informações de conexão
	require __DIR__ . '/../includes/at_core.php';

	// Checagem de conexão
	if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


	// Monta as variáveis com os valores passados
	$newpass = mysqli_real_escape_string($mysql, $_POST['newpass']);
	$repnewpass = mysqli_real_escape_string($mysql, $_POST['repnewpass']);
	$passencryp = sha1($repnewpass);
	$user = $_POST['user'];


	// Queries de inserção dos dados
	$usersql = "
		UPDATE at_users SET userpass = '$passencryp' WHERE usermail = '$user';
	";

	// Execução de inserção de dados
	$criauser = mysqli_query($mysql, $usersql);

	// Mostra mensagem de confirmação caso o registro funcione
	if ($criauser) {

		// Mostra o aviso para relogar
		echo '<script type="text/javascript"> 
	    window.alert("Sua senha foi alterada com sucesso.");
	    </script>';

	    // Direciona para a tela de login
	    // header("Location: /index.php");

	    // Encerra a conexão
		mysqli_close($mysql);

	} else {

		// Mostra o aviso para relogar
		echo '<script type="text/javascript"> 
	    window.alert("Houve um erro ao alterar sua senha e ela não foi alterada.");
	    </script>';

	    // Direciona para a tela de login
	    // header("Location: /index.php.php");

	    // Encerra a conexão
		mysqli_close($mysql);
	}

?>