<?php


//Monta as variáveis para os campos do banco de dados
$login=$_POST['login'];
$senha=$_POST['senha'];
$email=$_POST['email'];
$nome=$_POST['nome'];



// Define as variáveis com a configuração do banco de dados
$dbserver = 'localhost';
$dbname = 'vilad103_at';
$dbuser = 'vilad103_at';
$dbpass = '46669a00';


// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
$mysqli->set_charset('utf8');


// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());





// Verifica se login e senha estão corretos e exibe um erro caso a verificação não seja possível
  $logar = mysqli_query($mysqli, "SELECT * FROM at_login WHERE login='$login' AND senha='$senha'")
  or die ("Não foi possível logar. Verifique seu login e senha ou fale com um administrador.");


// Se o login conferir, o sistema mostra ok, se não mostra not
  if (mysqli_num_rows($logar) > 0)
      header('Location: http://www.viladosite.com.br/atencil/painel.html');
  else
    

    echo '<script type="text/javascript"> 
    window.alert("Não foi possível fazer o Login");
    window.history.back();
    </script>'
    

   



?>