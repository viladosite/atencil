<?php
	// Checagem de conexão
	if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


	// Monta as variáveis com os valores passados
	$newpass = mysqli_real_escape_string($mysql, $_POST['newpass']);
	$repnewpass = mysqli_real_escape_string($mysql, $_POST['repnewpass']);
	$user = mysqli_real_escape_string($mysql, $_POST['user']);


	// Queries de inserção dos dados
	$usersql = "
		INSERT INTO at_users (userpass)	VALUES ($repnewpass) WHERE usermail = '$user';
	";

	// Execução de inserção de dados
	$criauser = mysqli_query($mysql, $usersql);

	// Mostra mensagem de confirmação caso o registro funcione
	if ($criauser) {

		// Mostra o aviso para relogar
		echo '<script type="text/javascript"> 
	    window.alert("O usuário foi criado com sucesso.");
	    </script>';

	    // Direciona para a tela de login
	    header("Location: /pages/user_list.php");

	    // Encerra a conexão
		mysqli_close($mysql);

	} else {

		// Mostra o aviso para relogar
		echo '<script type="text/javascript"> 
	    window.alert("Houve um erro ao cadastrar o usuário.");
	    </script>';

	    // Direciona para a tela de login
	    header("Location: /pages/user_new.php");

	    // Encerra a conexão
		mysqli_close($mysql);
	}

?>