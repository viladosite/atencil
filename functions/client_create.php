<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';


// Variáveis com dados do formulário
$formgroup = mysqli_real_escape_string($mysql, $_POST['group']);
$formstatus = mysqli_real_escape_string($mysql, $_POST['obs']);
$formpnome = mysqli_real_escape_string($mysql, $_POST['pnome']);
$formunome = mysqli_real_escape_string($mysql, $_POST['unome']);
$formemail = mysqli_real_escape_string($mysql, $_POST['email']);
$formtel1 = $_POST['ddi1'] . $_POST['ddd1'] . $_POST['tel1'];
$formtel2 = $_POST['ddi2'] . $_POST['ddd2'] . $_POST['tel2'];
$formtel3 = $_POST['ddi3'] . $_POST['ddd3'] . $_POST['tel3'];
$formzap = $_POST['ddiz'] . $_POST['dddz'] . $_POST['telz'];
$formbirth = $_POST['anonasc'] . "-" . $_POST['mesnasc'] . "-" . $_POST['dianasc'];

// Define a data de nascimento como vazia caso não sejam passados dados do dia, mês ou ano
if ( empty($_POST['dianasc']) OR empty($_POST['mesnasc']) OR empty($_POST['anonasc']) ) { $formbirth = '1000-01-01'; };

$formaddress = mysqli_real_escape_string($mysql, $_POST['endereco']);
$formobs = mysqli_real_escape_string($mysql, $_POST['obs']);


// Variáveis nativas do usuário
$useridatual = $_SESSION['UserID'];
$usercompany = $_SESSION['UserCompany'];
$regdate = date("Y-m-d H:i:s");



// Condicionais de verificação de preenchimento de campos
if ( empty($formpnome) or empty($formunome)	or empty($formemail) or empty($formgroup) ) {
	
	// Retorna o erro caso algum campo tenha sido deixado em branco
	echo '<script type="text/javascript">alert("Você não preencheu algum campo. Preencha os campos obrigatórios para continuar.");history.go(-1);</script>';

} else {

	// Checagem de conexão
	if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


	// Queries de inserção dos dados
	$usersql = "
	INSERT INTO at_clients (clientcompany, clientgroup, clientregister, clientfname, clientlname, clientmail, clienttel1, clienttel2, clienttel3, clientzap, clientbirthdate, clientaddress, clientstatus, clientobs)
	VALUES ('$usercompany', '$formgroup', '$regdate', '$formpnome', '$formunome', '$formemail', '$formtel1', '$formtel2', '$formtel3', '$formzap', '$formbirth', '$formaddress', '$formstatus', '$formobs');";

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
        // echo mysqli_error($mysql);

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