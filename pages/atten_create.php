<?php if (!isset($_SESSION)) session_start(); ?>

<div id="content">

<?php
//Obtem as configurações do arquivo de config
require "../config.php";
// Verifica se a permissão do usuário é maior ou igual à necessária e monta as exibições
if ($_SESSION['UserPermLvl'] >= $perm_view_attendance):
?>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>


<!-- Início do Grid -->
<div class="mdl-grid">
  
    <div class="mdl-cell mdl-cell--12-col">
        <div id="atd_title">
        <h3>Criar Atendimento</h3>
        </div>

    </div>

    <div class="mdl-cell mdl-cell--8-col">
        
        <!-- Início do Card -->
          <div class="mdl-card mdl-shadow--4dp at-card at-cardatd" >

              <div class="mdl-card__title">
                <span>Atendimento 1</span>
              </div>

              <form id="atten-add" action="" method="post">

              <div class="mdl-card__supporting-text">

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="attenid" name="attenid">
                          <label class="mdl-textfield__label" for="attenid">ID</label>
                          <span class="mdl-textfield__error">Somente Numeros!</span>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="companyid" name="companyid">
                          <label class="mdl-textfield__label" for="companyid">Empresa</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="userid" name="userid">
                          <label class="mdl-textfield__label" for="userid">Usuário</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="clientid" name="clientid">
                          <label class="mdl-textfield__label" for="userid">Cliente</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="attendate" name="attendate">
                          <label class="mdl-textfield__label" for="attendate">Data</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="attenhour" name="attenhour">
                          <label class="mdl-textfield__label" for="attenhour">Hora</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="attentype" name="attentype">
                          <label class="mdl-textfield__label" for="attentype">Tipo</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="attenchannel" name="attenchannel">
                          <label class="mdl-textfield__label" for="attenchannel">Canal</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="attensubject" name="attensubject">
                          <label class="mdl-textfield__label" for="attensubject">Assunto</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="attenobs" name="attenobs">
                          <label class="mdl-textfield__label" for="attenobs">Observações</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="attenstatus" name="attenstatus">
                          <label class="mdl-textfield__label" for="attenstatus">Status</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="attenreturn" name="attenreturn">
                          <label class="mdl-textfield__label" for="attenreturn">Retorno</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="attenflag" name="attenflag">
                          <label class="mdl-textfield__label" for="attenflg">Attenflag</label>
                      </div>

              </div>

              <div class="mdl-card__actions mdl-card--border">

                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">Salvar</button>
                  
              </div>


              </form>


              <div class="mdl-card__menu">

      
                </div>

              </div>   

          </div>
        <!-- Fim do Card -->

    </div>





<!-- Fim do Loop Simulado -->




</div>
<!-- Fim do Grid -->

<script type="text/javascript" language="javascript">

    $(document).ready(function() {
        /// Quando usuário clicar em salvar será feito todos os passo abaixo
        $('#add').click(function() {

            var data = $('#atten-add').serialize();

            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '../includes/atten_add.php',
                async: true,
                data: data,
                success: function(response) {
                    location.reload();
                }
            });

            return false;
        });

</script>




    


<!-- Fim do conteúdo da página -->
<?php
// Caso o usuário não tenha permissão para visualizar o conteúdo exibe o arquivo de erro
else: include "../includes/at_errorperm.php";

endif; ?>
</div>
