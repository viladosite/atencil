<?php
// ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site.
// Mais informações em:   viladosite.com.br/atencil

// Carrega as funções para funcionamento do sistema
require "functions.php";

// Caso o usuário não atenda os requisitos de nivel direciona o usuário para outra página
if (perm_check($perm_view_dashboard) == false) {header("Location: /index.php"); exit;}
?>



<!-- This is the main dashboard exibition file -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width= device-width, initial-scale=1.0">
	<title>ATENCIL</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue-amber.min.css" />
   	<link rel="stylesheet" href="css/style_dashboard.css" />
	<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	 
</head>

<script>
$(document).ready(function() {
		$(document).on('click', '#menu a', function( e ){ 
 		e.preventDefault();
		var href = $( this ).attr('href');
		$("#content").load( href +" #content", null, function(){componentHandler.upgradeAllRegistered();});
		});
});
</script>

<body>
	<!-- Div de montagem do layout e definições de header -->
    <div class=" mdl-layout mdl-js-layout mdl-layout--fixed-header">

        <!-- Inclui o header -->
        <?php include "includes/at_header.php"; ?>

        <!-- Inclui o drawer com o menu principal -->
        <?php include "includes/at_drawer.php"; ?>

        <!-- Div de montagem do conteúdo -->
        <main class="mdl-layout__content">
        
            <!-- Inclui o conteúdo principal do painel (Variável a partir do carregamento Jquery) -->
            <div id="content"> <?php include "includes/at_content.php"; ?> </div>
    
            <!-- Inclui um espaçador para separar o footer -->
            <div class="mdl-layout-spacer"></div>
    
            <!-- Inclui o footer -->
            <?php include "includes/at_footer.php"; ?>
        
        </main>
	</div>

</body>
</html>