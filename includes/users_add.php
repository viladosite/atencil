<?php
//Obtem as configurações do arquivo de config
require "../config.php";
//conexão com o banco
// Faz a conexão com o banco
require "../auth/at_connect.php";


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

$query = "INSERT INTO at_users ( userlogin , userpass , userfname , userlname , usermail , userpermlvl , companyid , userstatus ) 
VALUES ('".$userlogin."', '".$userpass."', '".$userfname."', '".$userlname."', '".$usermail."', '".$userpermlvl."', '".$companyid."', '".$userstatus."' )";

mysqli_query($mysql, $query) or die(error());
$response = array("success" => true );
echo json_encode($response);
?>

