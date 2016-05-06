<?php
$dbserver = 'viladosite.com.br';
$dbname = 'vilad103_clientes';
$dbuser = 'vilad103_at';
$dbpass = '46669a00';

$options = "";

// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
$mysqli->set_charset('utf8');

// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());


// variavel com o comando que queremos executar
  $query="SELECT * from tblclients";

  $resultado = mysqli_query($mysqli, $query) or die ("Erro: " . mysql_error());

  while ($row=mysqli_fetch_array($resultado))
{
  $id=$row['id'];
  $firstname=$row['firstname'];
  $lastname=$row['lastname'];
  $companyname=$row['companyname'];
  $email=$row['email'];
  $address1=$row['address1'];
  $address2=$row['address2'];
  $city=$row['city'];
  $state=$row['state'];
  $postcode=$row['postcode'];
  $country=$row['country'];
  $phonenumber=$row['phonenumber'];
  $status=$row['status'];
  $list_clients.="<OPTION VALUE=\"$firstname\".\"$lastname\">$firstname $lastname ($companyname - $email) </option>";
  $list_clients2.="<OPTION VALUE=\"$id\">$firstname $lastname ($companyname - $email) </option>";
}

?>