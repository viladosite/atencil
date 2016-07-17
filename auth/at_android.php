<?php
      
// Pega as definições de banco de dados do arquivo de config
require '../config.php';

// Faz a conexão com o banco
require 'at_connect.php';

//Monta as variáveis para os campos do form do app
$user = $_GET['fielduser'];
$pass = $_GET['fieldpass'];
// $email = $_POST['email'];
// $name = $_POST['fname'];
// $name = $_POST['lname'];

// Query que da um select no banco e se encontrar algo diferente de 1 como resultado, retorna erro
	$sql = "SELECT `userid`, `userfname`, `userlname`, `usermail`, `userpermlvl`, `usercomp`, `usercomplvl`, `userstatus`, `userregdate` FROM `at_users` WHERE (`userlogin` = '".$user ."') AND (`userpass` = '". sha1($pass) ."') AND (`userstatus` = 1) LIMIT 1";

    $query = mysqli_query($mysql, $sql);
	
    if (mysqli_num_rows($query) != 1) {

// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado retornando INVALID
	echo "invalid";


// Caso a resposta do select seja 1, o sistema encontrou o usuário, envia a resposta necessária para o que o app interprete, no caso o termo OK

    } else {

		echo "ok";
     
    }


?>