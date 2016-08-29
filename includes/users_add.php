<?php if (!isset($_SESSION)) session_start(); ?>

<div id="content">

<?php
//Obtem as configurações do arquivo de config
require "../config.php";
//conexão com o banco
// Faz a conexão com o banco
require "../auth/at_connect.php";
if ($_SESSION['UserPermLvl'] >= $perm_edit_clients):
?>

<?php


// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$userid = $_POST ["userid"];    
$userlogin  = $_POST ["userlogin"]; 
$userpass  = $_POST ["userpass"]; 
$userfname  = $_POST ["userfname"];  
$userlname = $_POST ["userlname"];  
$usermail = $_POST ["usermail"];  
$userpermlvl = $_POST ["userpermlvl"]; 
$companyid = $_POST ["companyid"];  
$userstatus = $_POST ["userstatus"];    
//Gravando no banco de dados !

$query = "INSERT INTO at_users ( userid , userlogin , userpass , userfname , userlname , usermail , userpermlvl , companyid , userstatus ) 
VALUES ('$userid', '$userlogin', '$userpass', '$userfname', '$userlname', '$usermail', '$userpermlvl', '$companyid', '$userstatus' )";

mysql_query($query) or die(error());
$response = array("succes" => true );
echo json_encode($response);


?>



<?php
// Caso o usuário não tenha permissão para visualizar o conteúdo exibe o arquivo de erro
else: include "../includes/at_errorperm.php";

endif; ?>
</div>