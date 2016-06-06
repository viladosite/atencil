<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) {session_start();}
// Pega as definições de banco de dados e permissões do arquivo de config
require 'config.php';
// Verifica se não há a variável da sessão que identifica o usuário
if (isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] > $perm_view_dashboard))
	{
	// Encaminha para o dashboard
	header("Location: /dashboard.php");
	}
?>

<!--
ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site (www.viladosite.com.br)

Para mais informações sobre o sistema ou suas características por favor acesse o nosso site:
http://www.viladosite.com.br/atencil
-->

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
  <title>Atencil</title>
  <link rel="stylesheet" type="text/css"  href="css/style_index.css" /> 
  <link rel="stylesheet" media="screen and (max-device-width : 414px) and (orientation:portrait)" type="text/css"  href="css/style_index_mobile_vert.css" />
  <link rel="stylesheet" media="screen and (max-device-width : 736px) and (orientation:landscape)" type="text/css"  href="css/style_index_mobile_horiz.css" />
  </head>  
  
<body>

<div class="box_login">
	<p><img class="logo" src="images/logo_atencil_vert.png"  alt=""/></p>
	<form class="vform" action="auth/at_login.php" method="post" autocomplete="on">
  	<div class="field1">
  	<label for="user">Usuário:</label>
    <input type="text" name="user" id="user" class="login"><br>
    </div>
    <div class="field2">
 	<label for="pass">Senha:</label>
	<input type="password" name="pass" id="pass" class"pass">
    <br>
    </div>
    <br><br>
  	<input type="submit" value="Esqueci minha senha" id="btn_forgot">
  	<input type="submit" value="Entrar" id="btn_login">
	</form>
	</div>
<br/>

</body>
</html>