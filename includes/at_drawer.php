<!-- Este arquivo é responsável pela montagem do menu -->

<!-- criação do drawer padrão -->
<div class="mdl-layout__drawer">
    	<span class="mdl-layout-title">ATENCIL</span>

<!-- Criação do header do menu com dados do usuário -->

		<header class="avatar_box">
          <img src="../images/user.jpg" class="avatar_img">
          <div class="avatar_name">
          <span><?php echo $_SESSION['UsuarioNome'] ?></span>
          </div>
        </header>
    	<nav class="mdl-navigation">

      		<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">build</i>
            Editar Minha Conta</a>

      		<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">perm_phone_msg</i>
            Atendimentos</a>

      		<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person_pin</i>
            Clientes</a>

<!-- Item Usuários é exibido apenas se o usuário tiver permissão -->

		<?php
				// Nível necessário para exibição deste item de menu
				$nivel_necessario = 2;

				// Verifica se não há a variável da sessão que identifica o usuário
				if ($_SESSION['UsuarioNivel'] >= $nivel_necessario)
				{

				    // Exibe o item de menu
					echo '<a class="mdl-navigation__link" href="">
	    	        <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">group</i>
    	    	    Usuários</a>'
				
					// Caso o usuário não atenda os requisitos de nivel assume o comportamento abaixo
					;
				
				}
		?>
			
            
<!-- Item Configurações é exibido apenas se o usuário tiver permissão -->

		<?php
				// Nível necessário para exibição deste item de menu
				$nivel_necessario = 2;

				// Verifica se não há a variável da sessão que identifica o usuário
				if ($_SESSION['UsuarioNivel'] >= $nivel_necessario)
				{

				    // Exibe o item de menu
					echo '<a class="mdl-navigation__link" href="">
	    	        <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">settings</i>
    	    	    Configurações</a>'
				
					// Caso o usuário não atenda os requisitos de nivel assume o comportamento abaixo
					;
				
				}
		?>
			


			<a class="mdl-navigation__link" href="includes/at_logout.php">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">close</i>
            Sair</a>

            <div class="mdl-layout-spacer"></div>
            
       		<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help</i>
            Ajuda</a>
            
    	</nav>
  	</div>