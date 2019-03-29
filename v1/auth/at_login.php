<?php

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
    if (!empty($_POST) AND (empty($_POST['fielduser']) OR empty($_POST['fieldpass']))) {
        header("Location: /index.php"); exit;
    }
      


//Monta as variáveis para os campos do form
$user = $_POST['fielduser'];
$pass = $_POST['fieldpass'];
// $email = $_POST['email'];
// $name = $_POST['fname'];
// $name = $_POST['lname'];

// Pega as definições de banco de dados do arquivo de config
require '../config.php';

// Faz a conexão com o banco
require 'at_connect.php';

// Query que da um select no banco e se encontrar algo diferente de 1 como resultado, retorna erro
	$sql = "SELECT `userid`, `userfname`, `userlname`, `usermail`, `userpermlvl`, `usercomp`, `usercomplvl`, `userstatus`, `userregdate` FROM `at_users` WHERE (`userlogin` = '".$user ."') AND (`userpass` = '". sha1($pass) ."') AND (`userstatus` = 1) LIMIT 1";

    $query = mysqli_query($mysql, $sql);
	
    if (mysqli_num_rows($query) != 1) {

// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
	echo '<script type="text/javascript"> 
    window.alert("Dados incorretos, tente novamente ou procure o administrador do sistema.");
    window.history.back();
    </script>';


// Caso a resposta do select seja 1, o sistema encontrou o usuário, portanto salva os dados encontrados na sessão e redireciona o visitante para a devida página

    } else {

		// Salva os dados encontados na variável $resultado
        $resultado = mysqli_fetch_assoc($query);
      
        // Se a sessão não existir, inicia uma
        if (!isset($_SESSION)) session_start();
      
        // Salva os dados encontrados na sessão
        $_SESSION['UserID'] = $resultado['userid'];
        $_SESSION['UserFname'] = $resultado['userfname'];
        $_SESSION['UserLname'] = $resultado['userlname'];
        $_SESSION['UserEmail'] = $resultado['usermail'];
        $_SESSION['UserPermLvl'] = $resultado['userpermlvl'];
        $_SESSION['UserCompany'] = $resultado['usercomp'];
        $_SESSION['UserCompanyLvl'] = $resultado['usercomplvl'];
        $_SESSION['UserActive'] = $resultado['userstatus'];
        $_SESSION['UserRegDate'] = $resultado['userregdate'];
      
        // Redireciona o visitante
        header("Location: /dashboard.php"); exit;
    }

?>