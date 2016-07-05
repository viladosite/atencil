<?php

	include "../auth/at_connect.php";
	$attendanceid = $_POST['attenid'];
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
	$sql = "INSERT INTO `atencilt_usuario`.`at_attendances` (`attendanceid`, `attencompany`, `attenuser`, `attenclient`, `attendate`, `attenhour`, `attentype`, `attenchannel`, `attensubject`, `attenobs`, `attenstatus`, `attenreturn`, `attenflag`) VALUES ('$attendanceid', '$attencompany', '$attenuser', '$attenclient', '$attendate', '$attenhour', '$attentype', '$attenchannel', '$attensubject', '$attenobs', '$attenstatus', '$attenreturn', '$attenflag')";
	
	mysqli_query($mysql, $sql) or die(error());
	
	$response = array("success" => true);
	
	echo json_encode($response);

?>