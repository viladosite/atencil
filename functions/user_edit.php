<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';



// Monta os dados enviados nos campos em variáveis e as prepara para uso no mysql
$formemail = $_POST['email'];
$formsenhaatual = sha1($_POST['senhaatual']);
$formsenhanova = sha1($_POST['senhanova']);
$useridatual = $_SESSION['UserID'];


// Condicionais de verificação de preenchimento de campos
if ( empty( $formemail ) ) { $formemail = $_SESSION['UserEmail']; }
if ( empty( $formsenhanova ) ) { $formsenhanova = $formsenhatual; }


// Checagem de conexão
if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


// Queries de checagem dos dados
$usersql = " SELECT * FROM at_users WHERE `userpass`='$formsenhatual' AND `userid` = '$useridatual' ";


// Execução de verificação de dados
$checauser = mysqli_query($mysql, $usersql);


// Monta as queries de update dos dados
$updatemail = " UPDATE at_users SET usermail = '$formemail' WHERE userid = '$useridatual' ";
$updatesenha = " UPDATE at_users SET userpass = '$formsenhanova' WHERE userid = '$useridatual' ";


// Checa quantas linhas de resultado encontrou na checagem
$resultuser = mysqli_num_rows($checauser);


// Define o comportamento caso encontre o usuário e caso não encontre
if ($resultuser = 1) {

	// Executa a query de update dos dados
	mysqli_query($mysql, $updatemail);
	if ( $formsenhanova != $formsenhaatual ) { mysqli_query($mysql, $updatesenha); };
	
	// Mostra o aviso para relogar
	echo '<script type="text/javascript"> 
    window.alert("Seus dados foram alterados. Por favor faça o login novamente com os novos dados.");
    </script>';

	// Destroi a sessão do usuário para forçar o relogin
	session_destroy();

	// Encerra a conexão
	mysqli_close($mysql);

    // Direciona para a tela de login
    header("Location: /index.php");

} else {

	// Mostra o erro
	echo '<script type="text/javascript"> 
    window.alert("Houve um erro ou você não informou sua senha atual para salvar as alterações.");
    </script>';

    // Direciona de volta para a página da conta
    header("Location: pages/account.php");

    // Encerra a conexão
	mysqli_close($mysql);

}

?>