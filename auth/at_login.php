<?php

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
    if (!empty($_POST) AND (empty($_POST['user']) OR empty($_POST['pass']))) {
        header("Location: /index.php"); exit;
    }
      


//Monta as variáveis para os campos do form
$user = $_POST['user'];
$pass = $_POST['pass'];
// $email = $_POST['email'];
// $name = $_POST['fname'];
// $name = $_POST['lname'];

// Pega as definições de banco de dados do arquivo de config
require '../config.php';

// Faz a conexão com o banco
require 'at_connect.php';

// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

// Query que da um select no banco e se encontrar algo diferente de 1 como resultado, retorna erro
	$sql = "SELECT `id`, `fname`, `lname`, `email`, `lvl`, `company`, `companylvl`, `active`, `registerdate` FROM `at_users` WHERE (`user` = '".$user ."') AND (`pass` = '". sha1($pass) ."') AND (`active` = 1) LIMIT 1";

    $query = mysql_query($sql);
	
    if (mysql_num_rows($query) != 1) {

// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
	echo '<script type="text/javascript"> 
    window.alert("Dados incorretos, tente novamente ou procure o administrador do sistema.");
    window.history.back();
    </script>';


// Caso a resposta do select seja 1, o sistema encontrou o usuário, portanto salva os dados encontrados na sessão e redireciona o visitante para a devida página

    } else {

		// Salva os dados encontados na variável $resultado
        $resultado = mysql_fetch_assoc($query);
      
        // Se a sessão não existir, inicia uma
        if (!isset($_SESSION)) session_start();
      
        // Salva os dados encontrados na sessão
        $_SESSION['UserID'] = $resultado['id'];
        $_SESSION['UserFname'] = $resultado['fname'];
        $_SESSION['UserLname'] = $resultado['lname'];
        $_SESSION['UserEmail'] = $resultado['email'];
        $_SESSION['UserLvl'] = $resultado['lvl'];
        $_SESSION['UserCompany'] = $resultado['company'];
        $_SESSION['UserCompanyLvl'] = $resultado['companylvl'];
        $_SESSION['UserActive'] = $resultado['active'];
        $_SESSION['UserRdate'] = $resultado['registerdate'];
      
        // Redireciona o visitante
        header("Location: /dashboard.php"); exit;
    }

?>