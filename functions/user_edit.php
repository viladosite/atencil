<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';


// Monta os dados enviados nos campos em variáveis e as prepara para uso no mysql
$formemail = $_POST['email'];
// $formemail = mysqli_real_escape_string($mysql, $_POST['email']);

$formsenhaatual = $_POST['senhaatual'];
// $formsenhaatual = mysqli_real_escape_string($mysql, sha1($_POST['senhaatual']));

$formsenhanova = $_POST['senhanova'];
// $formsenhanova = mysqli_real_escape_string($mysql, $_POST['senhanova']);

$useridatual = $_SESSION['UserID'];
// $useridatual = mysqli_real_escape_string($mysql, $_SESSION['UserID']);



// Caso o usuário não preencha o email, mantem o email do usuário logado
if (empty( $_POST['email'] )) { $formemail = $_SESSION['UserEmail']; }
// Caso o usuário forneça uma senha nova, informa ela para update no banco
if (!empty( $_POST['senhanova'] )) { $formsenhanova = ", userpass= '$formsenhanova'"; }




// Checa a conexão
if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }

// Verifica na tabela se encontrou o usuário com id logado e senha correspondente à fornecida
$selectuser = "SELECT * FROM at_users WHERE (userid = '$useridatual') AND (userpass = '$formsenhaatual')";

// Verifica se é possível encontrar o usuário
$checauser = mysqli_query($mysql, $selectuser);

// Monta a query de update dos dados
$update = "UPDATE at_users SET usermail = '$formemail' '$formsenhanova' WHERE userid = '$useridatual' ";

// Checa quantas linhas de resultado encontrou na checagem
$resultado = mysqli_num_rows($checauser);


// Define o comportamento caso encontre o usuário e caso não encontre
if ($resultado = 1) {

	// Executa a query de update dos dados
	mysqli_query($mysql, $update);
	
	// Mostra o aviso para relogar
	echo '<script type="text/javascript"> 
    window.alert("Seus dados foram alterados. Por favor faça o login novamente com os novos dados.");
    </script>';

	// Destroi a sessão do usuário para forçar o relogin
	session_destroy();

    // Direciona para a tela de login
    header("Location: index.php")

} else {

	// Mostra o erro
	echo '<script type="text/javascript"> 
    window.alert("Houve um erro ou você não informou sua senha atual para salvar as alterações.");
    </script>';

    // Direciona de volta para a página da conta
    header("Location: pages/account.php")

}


// Encerra a conexão
mysqli_close($mysql);


?>