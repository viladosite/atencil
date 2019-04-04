<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';


// Monta os dados enviados nos campos em variáveis
$formemail = $_POST['email'];
$formsenhaatual = $_POST['senhaatual'];
$formsenhanova = $_POST['senhanova'];

// Caso o usuário não preencha o email, mantem o email do usuário logado
if (empty( $_POST['email'] )) { $formemail = $_SESSION['UserEmail']; }
// Caso o usuário forneça uma senha nova, informa ela para update no banco
if (!empty( $_POST['senhanova'] )) { $formsenhanova = ", `userpass`='".sha1($formsenhanova)."'"; }




// Checa a conexão
if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }

// Verifica na tabela se encontrou o usuário com id logado e senha correspondente à fornecida
$selectuser = "SELECT * FROM at_users WHERE (userid = ". $_SESSION['UserID'] .") AND (userpass = ". sha1($formsenhaatual) .")";

// Verifica se é possível encontrar o usuário
$checauser = mysqli_query($mysql, $selectuser);

// Monta a query de update dos dados
$update = "UPDATE at_users SET usermail=".$formemail.$formsenhanova."WHERE userid=".$_SESSION['UserID']."";





// Define o comportamento caso encontre o usuário e caso não encontre
if (mysqli_num_rows($checauser) != 1) {

	// Mostra o erro
	echo '<script type="text/javascript"> 
    window.alert("Houve um erro ou você não informou sua senha atual para salvar as alterações.");
    </script>';

} else {

	// Executa a query de update dos dados
	mysqli_query($mysql, $update);

}

// Encerra a conexão
mysqli_close($mysql);


?>