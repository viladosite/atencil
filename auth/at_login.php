<?php

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
    if (!empty($_POST) AND (empty($_POST['fieldemail']) OR empty($_POST['fieldpass']))) {
        header("Location: ../index.php"); exit;
    }
      


//Monta as variáveis para os campos do form
$user = $_POST['fielduser'];
$pass = $_POST['fieldpass'];
$email = $_POST['fieldemail'];
// $name = $_POST['fname'];
// $name = $_POST['lname'];

// Carrega as funções para funcionamento do sistema
require './functions/functions.php';
load_core();

// Query que da um select no banco e se encontrar algo diferente de 1 como resultado, retorna erro
	$sql = "SELECT `userid`, `userfname`, `userlname`, `userlogin`, `usermail`, `userpermlvl`, `usercomp`, `usercomplvl`, `userstatus`, `userregdate` FROM `at_users` WHERE (`usermail` = '".$email ."') AND (`userpass` = '". sha1($pass) ."') AND (`userstatus` = 1) LIMIT 1";

    $query = mysqli_query($mysql, $sql);
	
    if (mysqli_num_rows($query) != 1) {

// Caso a resposta do select seja diferente de 1, exibe a mensagem de erro
// Este caso se aplica quando os dados são inválidos, o usuário não foi encontrado ou até mesmo por algum erro foram encontrados mais de 1 login
        
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
        $_SESSION['UserLogin'] = $resultado['userlogin'];
        $_SESSION['UserEmail'] = $resultado['usermail'];
        $_SESSION['UserPermLvl'] = $resultado['userpermlvl'];
        $_SESSION['UserCompany'] = $resultado['usercomp'];
        $_SESSION['UserCompanyLvl'] = $resultado['usercomplvl'];
        $_SESSION['UserActive'] = $resultado['userstatus'];
        $_SESSION['UserRegDate'] = $resultado['userregdate'];
      
        // Redireciona o visitante
        header("Location: ../pages/dashboard.php"); exit;
    }

?>