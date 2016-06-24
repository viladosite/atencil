<?php if (!isset($_SESSION)) session_start(); ?>

<div id="content">

<?php
//Obtem as configurações do arquivo de config
require "../config.php";
// Verifica se a permissão do usuário é maior ou igual à necessária e monta as exibições
if ($_SESSION['UserLvl'] >= $perm_view_attendance):
?>


<!-- Início do conteúdo da página -->




<div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col">
            <h3>Segunda</h3>
            <!-- Início do Card -->
              <div class="mdl-card mdl-shadow--4dp at-card" >
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text">Atendimento 1</h2>
                </div>
                <div class="mdl-card__supporting-text">
                                <form action="#">

                                  <div class="at_flabel mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="firstname">
                                    <label class="mdl-textfield__label" for="firstname">Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="lastname">
                                    <label class="mdl-textfield__label" for="lastname">Último Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="username">
                                    <label class="mdl-textfield__label" for="username">Nome de Usuário</label>
                                  </div>
                                  
                                </form>
                </div>

                <div class="mdl-card__actions mdl-card--border">
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">salvar</button>
              <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active" id="spinnerBarra"></div>
                </div>


                <div class="mdl-card__menu">
                <button id="infoperson" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons">info</i>  
                </button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infoperson">
                            Informe seus dados pessoais e informações relativas à você e seus meios de contato
                            </div>
                </div>
              </div>
            <!-- Fim do Card -->

            <div class="mdl-card mdl-shadow--4dp at-card">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text">Atendimento 2</h2>
                </div>
                <div class="mdl-card__supporting-text">
                                <form action="#">

                                  <div class="at_flabel mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="firstname">
                                    <label class="mdl-textfield__label" for="firstname">Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="lastname">
                                    <label class="mdl-textfield__label" for="lastname">Último Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="username">
                                    <label class="mdl-textfield__label" for="username">Nome de Usuário</label>
                                  </div>
                                  
                                </form>
                </div>

                <div class="mdl-card__actions mdl-card--border">
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">salvar</button>
              <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active" id="spinnerBarra"></div>
                </div>


                <div class="mdl-card__menu">
                <button id="infoperson" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons">info</i>  
                </button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infoperson">
                            Informe seus dados pessoais e informações relativas à você e seus meios de contato
                            </div>
                </div>
              </div>
            <!-- Fim do Card -->
                        
                       
      </div>


      <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <h3>Terça</h3>
            <!-- Início do Card -->
              <div class="mdl-card mdl-shadow--4dp at-card">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text">Atendimento 1</h2>
                </div>
                <div class="mdl-card__supporting-text">
                                <form action="#">

                                  <div class="at_flabel mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="firstname">
                                    <label class="mdl-textfield__label" for="firstname">Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="lastname">
                                    <label class="mdl-textfield__label" for="lastname">Último Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="username">
                                    <label class="mdl-textfield__label" for="username">Nome de Usuário</label>
                                  </div>
                                  
                                </form>
                </div>

                <div class="mdl-card__actions mdl-card--border">
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">salvar</button>
              <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active" id="spinnerBarra"></div>
                </div>


                <div class="mdl-card__menu">
                <button id="infoperson" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons">info</i>  
                </button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infoperson">
                            Informe seus dados pessoais e informações relativas à você e seus meios de contato
                            </div>
                </div>
              </div>
            <!-- Fim do Card -->

            <div class="mdl-card mdl-shadow--4dp at-card">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text">Atendimento 2</h2>
                </div>
                <div class="mdl-card__supporting-text">
                                <form action="#">

                                  <div class="at_flabel mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="firstname">
                                    <label class="mdl-textfield__label" for="firstname">Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="lastname">
                                    <label class="mdl-textfield__label" for="lastname">Último Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="username">
                                    <label class="mdl-textfield__label" for="username">Nome de Usuário</label>
                                  </div>
                                  
                                </form>
                </div>

                <div class="mdl-card__actions mdl-card--border">
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">salvar</button>
              <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active" id="spinnerBarra"></div>
                </div>


                <div class="mdl-card__menu">
                <button id="infoperson" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons">info</i>  
                </button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infoperson">
                            Informe seus dados pessoais e informações relativas à você e seus meios de contato
                            </div>
                </div>
              </div>
            <!-- Fim do Card -->
                        
                       
      </div>

      <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <h3>Quarta</h3>
            <!-- Início do Card -->
              <div class="mdl-card mdl-shadow--4dp at-card">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text">Atendimento 1</h2>
                </div>
                <div class="at_suptxt mdl-card__supporting-text">
                                <form action="#">

                                  <div class="at_flabel mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="firstname">
                                    <label class="mdl-textfield__label" for="firstname">Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="lastname">
                                    <label class="mdl-textfield__label" for="lastname">Último Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="username">
                                    <label class="mdl-textfield__label" for="username">Nome de Usuário</label>
                                  </div>
                                  
                                </form>
                </div>

                <div class="mdl-card__actions mdl-card--border">
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">salvar</button>
              <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active" id="spinnerBarra"></div>
                </div>


                <div class="mdl-card__menu">
                <button id="infoperson" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons">info</i>  
                </button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infoperson">
                            Informe seus dados pessoais e informações relativas à você e seus meios de contato
                            </div>
                </div>
              </div>
            <!-- Fim do Card -->

            <div class="mdl-card mdl-shadow--4dp at-card">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text">Atendimento 2</h2>
                </div>
                <div class="mdl-card__supporting-text">
                                <form action="#">

                                  <div class="at_flabel mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="firstname">
                                    <label class="mdl-textfield__label" for="firstname">Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="lastname">
                                    <label class="mdl-textfield__label" for="lastname">Último Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="username">
                                    <label class="mdl-textfield__label" for="username">Nome de Usuário</label>
                                  </div>
                                  
                                </form>
                </div>

                <div class="mdl-card__actions mdl-card--border">
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">salvar</button>
              <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active" id="spinnerBarra"></div>
                </div>


                <div class="mdl-card__menu">
                <button id="infoperson" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons">info</i>  
                </button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infoperson">
                            Informe seus dados pessoais e informações relativas à você e seus meios de contato
                            </div>
                </div>
              </div>
            <!-- Fim do Card -->
                        
                       
      </div>

      <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <h3>Quinta</h3>
            <!-- Início do Card -->
              <div class="mdl-card mdl-shadow--4dp at-card">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text">Atendimento 1</h2>
                </div>
                <div class="mdl-card__supporting-text">
                                <form action="#">

                                  <div class="at_flabel mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="firstname">
                                    <label class="mdl-textfield__label" for="firstname">Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="lastname">
                                    <label class="mdl-textfield__label" for="lastname">Último Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="username">
                                    <label class="mdl-textfield__label" for="username">Nome de Usuário</label>
                                  </div>
                                  
                                </form>
                </div>

                <div class="mdl-card__actions mdl-card--border">
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">salvar</button>
              <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active" id="spinnerBarra"></div>
                </div>


                <div class="mdl-card__menu">
                <button id="infoperson" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons">info</i>  
                </button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infoperson">
                            Informe seus dados pessoais e informações relativas à você e seus meios de contato
                            </div>
                </div>
              </div>
            <!-- Fim do Card -->

            <div class="mdl-card mdl-shadow--4dp at-card">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text">Atendimento 2</h2>
                </div>
                <div class="mdl-card__supporting-text">
                                <form action="#">

                                  <div class="at_flabel mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="firstname">
                                    <label class="mdl-textfield__label" for="firstname">Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="lastname">
                                    <label class="mdl-textfield__label" for="lastname">Último Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="username">
                                    <label class="mdl-textfield__label" for="username">Nome de Usuário</label>
                                  </div>
                                  
                                </form>
                </div>

                <div class="mdl-card__actions mdl-card--border">
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">salvar</button>
              <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active" id="spinnerBarra"></div>
                </div>


                <div class="mdl-card__menu">
                <button id="infoperson" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons">info</i>  
                </button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infoperson">
                            Informe seus dados pessoais e informações relativas à você e seus meios de contato
                            </div>
                </div>
              </div>
            <!-- Fim do Card -->
                        
                       
      </div>

      <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <h3>Sexta</h3>
            <!-- Início do Card -->
              <div class="mdl-card mdl-shadow--4dp at-card">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text">Atendimento 1</h2>
                </div>
                <div class="mdl-card__supporting-text">
                                <form action="#">

                                  <div class="at_flabel mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="firstname">
                                    <label class="mdl-textfield__label" for="firstname">Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="lastname">
                                    <label class="mdl-textfield__label" for="lastname">Último Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="username">
                                    <label class="mdl-textfield__label" for="username">Nome de Usuário</label>
                                  </div>
                                  
                                </form>
                </div>

                <div class="mdl-card__actions mdl-card--border">
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">salvar</button>
              <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active" id="spinnerBarra"></div>
                </div>


                <div class="mdl-card__menu">
                <button id="infoperson" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons">info</i>  
                </button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infoperson">
                            Informe seus dados pessoais e informações relativas à você e seus meios de contato
                            </div>
                </div>
              </div>
            <!-- Fim do Card -->

            <div class="mdl-card mdl-shadow--4dp at-card">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text">Atendimento 2</h2>
                </div>
                <div class="mdl-card__supporting-text">
                                <form action="#">

                                  <div class="at_flabel mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="firstname">
                                    <label class="mdl-textfield__label" for="firstname">Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="lastname">
                                    <label class="mdl-textfield__label" for="lastname">Último Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="username">
                                    <label class="mdl-textfield__label" for="username">Nome de Usuário</label>
                                  </div>
                                  
                                </form>
                </div>

                <div class="mdl-card__actions mdl-card--border">
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">salvar</button>
              <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active" id="spinnerBarra"></div>
                </div>


                <div class="mdl-card__menu">
                <button id="infoperson" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons">info</i>  
                </button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infoperson">
                            Informe seus dados pessoais e informações relativas à você e seus meios de contato
                            </div>
                </div>
              </div>
            <!-- Fim do Card -->
                        
                       
      </div>


  </div>



<!-- Fim do conteúdo da página -->
<?php
// Caso o usuário não tenha permissão para visualizar o conteúdo exibe o arquivo de erro
else: include "../includes/at_errorperm.php";

endif; ?>
</div>