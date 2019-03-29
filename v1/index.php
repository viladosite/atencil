<?php
// ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site.
// Mais informações em:   viladosite.com.br/atencil

// Carrega as funções para funcionamento do sistema
require "functions.php";

// Caso o usuário não atenda os requisitos de nivel direciona o usuário para outra página
if (perm_check($perm_view_dashboard) == true) {header("Location: dashboard.php"); exit;}

?>


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
    <input type="text" name="fielduser" id="fielduser" class="login"><br>
    </div>
    <div class="field2">
 	<label for="pass">Senha:</label>
	<input type="password" name="fieldpass" id="fieldpass" class="pass">
    <br>
    </div>
    <br><br>
    <input type="submit" value="Entrar" id="btn_login">
  	<input type="button" value="Esqueci minha senha" id="btn_forgot">
  	
	</form>
	</div>
<br/>

</body>
</html>