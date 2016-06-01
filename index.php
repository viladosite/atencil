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

<div class="quadro_login">
	<p><img class="logo" src="images/logo_atencil_vert.png"  alt=""/></p>
	<form class="vform" action="auth/at_login.php" method="post" autocomplete="on">
  	<div class="campo1">
  	<label for="usuario">Usuário:</label>
    <input type="text" name="usuario" id="usuario" class="login"><br>
    </div>
    <div class="campo2">
 	<label for="senha">Senha:</label>
	<input type="password" name="senha" id="senha" class"senha">
    <br>
    </div>
    <br><br>
  	<input type="submit" value="Esqueci minha senha" id="btn_esq">
  	<input type="submit" value="Entrar" id="btn_entrar">
	</form>
	</div>
<br/>

</body>
</html>