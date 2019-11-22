<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';


// Variáveis com dados do formulário
$formpnome = mysqli_real_escape_string($mysql, $_POST['pnome']);
$formunome = mysqli_real_escape_string($mysql, $_POST['unome']);
$formemail = mysqli_real_escape_string($mysql, $_POST['email']);
$clienttel1 = '';
$clienttel2 = '';
$clienttel3 = '';
$clientzap = '';
$clientbirthdate = date("Y-m-d");
$clientaddress = '';
$formgroup = $_POST['group'];
$clientstatus = '1';
$clientobs = '';


// Variáveis nativas do usuário
$useridatual = $_SESSION['UserID'];
$usercompany = $_SESSION['UserCompany'];
$userregstatus = 1;
$regdate = date("Y-m-d H:i:s");



// Condicionais de verificação de preenchimento de campos
if ( empty($formpnome) or empty($formunome)	or empty($formemail) or empty($formgroup) ) {
	
	// Retorna o erro caso algum campo tenha sido deixado em branco
	echo '<script type="text/javascript">alert("Você não preencheu algum campo. Preencha todos os campos para continuar.");history.go(-1);</script>';

} else {

	// Checagem de conexão
	if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


	// Queries de inserção dos dados
	$usersql = "
	INSERT INTO at_clients (clientcompany, clientgroup, clientregister, clientfname, clientlname, clientmail, clienttel1, clienttel2, clienttel3, clientzap, clientbirthdate, clientaddress, clientstatus, clientobs)
	VALUES ('$usercompany', '$formgroup', '$regdate', '$formpnome', '$formunome', '$formemail', '$clienttel1', '$clienttel2', '$clienttel3', '$clientzap', '$clientbirthdate', '$clientaddress', '$clientstatus', '$clientobs');";

	// Execução de inserção de dados
	$criaclient = mysqli_query($mysql, $usersql);

	// Mostra mensagem de confirmação caso o registro funcione
	if ($criaclient) {

		// Mostra o aviso para relogar
		echo '<script type="text/javascript"> 
	    window.alert("O cliente foi cadastrado com sucesso.");
	    </script>';

	    // Direciona para a tela de login
	    header("Location: ../pages/client_list.php");

	    // Encerra a conexão
		mysqli_close($mysql);

	} else {

		// Mostra o aviso para relogar
		// echo '<script type="text/javascript"> 
	    // window.alert("Houve um erro ao cadastrar o cliente.");
	    // </script>';

	    // Direciona para a tela de login
		// header("Location: ../pages/client_new.php");
		echo mysqli_error($mysql);

	    // Encerra a conexão
		mysqli_close($mysql);
	}

}

?>