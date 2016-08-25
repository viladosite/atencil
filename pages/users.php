<?php if (!isset($_SESSION)) session_start(); ?>

<div id="content">

<?php
//Obtem as configurações do arquivo de config
require "../config.php";
// Faz a conexão com o banco
require "../auth/at_connect.php";
// Verifica se a permissão do usuário é maior ou igual à necessária e monta as exibições
if ($_SESSION['UserPermLvl'] >= $perm_view_users):
?>
<!-- Início do conteúdo da página -->

	<div class="mdl-grid ">

			

  			<div class="mdl-cell mdl-cell--6-col mdl-cell--3-offset-desktop mdl-cell--8-col-tablet">

  				<div class="mdl-card mdl-shadow--3dp at-card">
		  					<div class="mdl-card__title">
		  						<h2 class="mdl-card__title-text">Usuários</h2>
		  					</div>
		  					<div class="mdl-card__supporting-text">
                            
                            <!-- Lista de funcionários -->
                            <ul class="at-employ-list mdl-list">


<?php
          // Select all the attendances in the table
          $query = "SELECT * FROM at_users";

          // Results of the select
          $result = mysqli_query($mysql, $query);

          // While mysql find attendances it will show and create it's card
          while ($row = mysqli_fetch_assoc($result))
          
          // Starting the while
          { 
                $userid = $row['userid'];
                $userfname = $row['userfname'];
                $userlname = $row['userlname'];
                $userlogin = $row['userlogin'];
                $usermail = $row['usermail'];
                $userpermlvl = $row['userpermlvl'];
                $usercomp = $row['usercomp'];
                $usercomplvl = $row['usercomplvl'];
                $userstatus = $row['userstatus'];
                $userregdate = $row['userregdate'];


                $day = date('d',strtotime($userregdate));
                $month = date('M',strtotime($userregdate));
                $year = date('Y',strtotime($userregdate));



                // Starting the loop
                echo"



                              <!-- Início do Item -->

                              <li class=\"mdl-list__item mdl-list__item--three-line\">
                                <span class=\"mdl-list__item-primary-content\">
                                  <i class=\"material-icons mdl-list__item-avatar\">person</i>
                                  <span class=\"f_name\">".$userfname." ".$userlname."</span>
                                  <span class=\"f_text mdl-list__item-text-body\">
                                    Login: ".$userlogin."
                                    <br>
                                    Cargo: ".$usercomplvl."
                                    <br>
                                  </span>

                                </span>
                                <span class=\"mdl-list__item-secondary-content\">
                                    <button id=\"btn_employ1\" class=\"mdl-button mdl-js-button mdl-button--accent mdl-button--icon mdl-list__item-secondary-action\">
                                      <i class=\"material-icons\">more_vert</i>
                                    </button>
                                    <ul class=\"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\"
                                        for=\"btn_employ1\">
                                      <li class=\"mdl-menu__item\">Excluir</li>
                                      <li class=\"mdl-menu__item\">Perfil</li>
                                      <li disabled class=\"mdl-menu__item\">Permissões</li>
                                    </ul>
                                </span>
                              </li>

                              <!-- Fim do Item -->



                    ";
                // Finishing the loop
          }
          // Finishing the while and php tag
?>
                             
                              </ul>
		  					</div>

		  					<div class="mdl-card__actions mdl-card--border">
		  						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised">salvar</button>              

		  					</div>

		  					<div class="mdl-card__menu">
		  					<button id="infocorp2" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
		  						<i class="material-icons">info</i>	
		  					</button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infocorp2">
                            Inclua, exclua ou edite as informações e permissões de funcionários vinculados a sua empresa.
                            <br>
                            Os funcionários vinculados à sua empresa compartilham os atendimentos ligados a ela.
                            </div>
		  					</div>
  						</div>

  			</div>

        <div class="atd_add" id="menu">
            <a href="pages/users_create.php">
            <!-- Botão adicionar atendimento -->
            <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-js-ripple-effect" >
            <i class="material-icons">add</i>
            </button>
            </a>
        </div>


  	</div>			



<!-- Fim do conteúdo da página -->
<?php
// Caso o usuário não tenha permissão para visualizar o conteúdo exibe o arquivo de erro
else: include "../includes/at_errorperm.php";

endif; ?>
</div>