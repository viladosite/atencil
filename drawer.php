<!-- criação do drawer padrão -->
<div class="demo-drawer mdl-layout__drawer">
    	<span class="mdl-layout-title">Menu Principal</span>

<!-- Criação do header do menu com dados do usuário -->

		<header class="demo-drawer-header">
          <img src="images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
          <span><?php echo $_SESSION['UsuarioNome'] ?></span>
            <button id="demo-menu-lower-left" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Contas</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
              <li class="mdl-menu__item">Editar minha conta</li>
              <li class="mdl-menu__item"><i class="material-icons">replay</i>Trocar de conta</li>
            </ul>
          </div>
        </header>
    	<nav class="mdl-navigation">
      		<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">perm_phone_msg</i>
            Atendimentos</a>

      		<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person_pin</i>
            Clientes</a>

      		<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">group</i>
            Usuários</a>

			<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">close</i>
            Sair</a>

            <div class="mdl-layout-spacer"></div>
            
       		<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help</i>
            Ajuda</a>
            
    	</nav>
  	</div>