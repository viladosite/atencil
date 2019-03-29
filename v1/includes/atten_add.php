<?php
//Obtem as configurações do arquivo de config
require "../config.php";
//conexão com o banco
// Faz a conexão com o banco
require "../auth/at_connect.php";

// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

	$attencompany = $_POST['companyid'];
	$attenuser = $_POST['userid'];
	$attenclient = $_POST['clientid'];
	$attendate = $_POST['attendate'];
	$attenhour = $_POST['attenhour'];
	$attentype = $_POST['attentype'];
	$attenchannel = $_POST['attenchannel'];	
	$attensubject = $_POST['attensubject'];
	$attenobs = $_POST['attenobs'];
	$attenstatus = $_POST['attenstatus'];
	$attenreturn = $_POST['attenreturn'];
	$attenflag = $_POST['attenflag'];
	$query = "INSERT INTO at_attendances (`attencompany`, `attenuser`, `attenclient`, `attendate`, `attenhour`, `attentype`, `attenchannel`, `attensubject`, `attenobs`, `attenstatus`, `attenreturn`, `attenflag`) VALUES ('$attencompany', '$attenuser', '$attenclient', '$attendate', '$attenhour', '$attentype', '$attenchannel', '$attensubject', '$attenobs', '$attenstatus', '$attenreturn', '$attenflag')";
	
$insert = mysqli_query($mysql , $query);

    if($insert){
        echo "Inclusão de atendimento";
    }
    else{
        echo "Houve um erro ao tentar incluir seu atendimento. <br>".mysqli_error($mysql);
    }

 $mysql->close();
?>