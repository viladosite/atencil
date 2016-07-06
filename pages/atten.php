<?php if (!isset($_SESSION)) session_start(); ?>

<div id="content">

<?php
//Obtem as configurações do arquivo de config
require "../config.php";
require "../auth/at_connect.php";
// Verifica se a permissão do usuário é maior ou igual à necessária e monta as exibições
if ($_SESSION['UserPermLvl'] >= $perm_view_attendance):
?>


<!-- Início do Grid -->
<div class="mdl-grid">
  
    <div class="mdl-cell mdl-cell--12-col">
        <div id="atd_title">
        <h3>Atendimentos</h3>
        </div>

    </div>


<?php
          // Select all the attendances in the table
          $query = "SELECT * FROM at_attendances";

          // Results of the select
          $result = mysqli_query($mysql, $query);

          // While mysql find attendances it will show and create it's card
          while ($row = mysqli_fetch_assoc($result))
          
          // Starting the while
          { 
                $attendanceid = $row['attendanceid'];
                $attencompany = $row['attencompany'];
                $attenuser = $row['attenuser'];
                $attenclient = $row['attenclient'];
                $attendate = $row['attendate'];
                $attenhour = $row['attenhour'];
                $attentype = $row['attentype'];
                $attenchannel = $row['attenchannel'];
                $attensubject = $row['attensubject'];
                $attenobs = $row['attenobs'];
                $attenstatus = $row['attenstatus'];
                $attenreturn = $row['attenreturn'];
                $attenflag = $row['attenflag'];






                // Starting the loop
                echo"



    <div class=\"mdl-cell mdl-cell--2-col mdl-cell--4-col-phone\">
        
         <!-- Início do Card -->
          <div class=\"mdl-card mdl-shadow--4dp at-card at-cardatd\" >

              <div class=\"mdl-card__title\">
                <span>".$attentype."</span>
              </div>

              <div class=\"mdl-card__supporting-text\">

                <div id=\"at_date\"><span id=\"at_day\">Data: ".$attendate."</span></div>

                <div> Hora: ".$attenhour." </div>

                <div> Cadastrado por: ".$attenuser." </div>

                <div> Cliente: ".$attenclient." </div>

                <div> Tipo: ".$attentype." </div>

                <div> Status: ".$attenstatus." </div>

                <div class=\"at_opt\">

                <button class=\"at_btnAt mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--accent\">
                  <i class=\"material-icons\">visibility</i>
                  </button>

                  <button class=\"at_btnAt mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--accent\">
                  <i class=\"material-icons\">create</i>
                  </button>

                  <button class=\"at_btnAt mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--accent\">
                  <i class=\"material-icons\">delete</i>
                  </button>

                  </div>

              </div>


              <div class=\"mdl-card__menu\">

      
                <button id=\"infoperson\" class=\"mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon\">
                  <i class=\"material-icons\">info</i>  
                </button>
      
                <div class=\"mdl-tooltip mdl-tooltip--large mdl-tooltip--left\" for=\"infoperson\">
                menu
                </div>

              </div>   

          </div>
        <!-- Fim do Card -->

    </div>




                    ";
                // Finishing the loop
          }
          // Finishing the while and php tag
?>



<div class="atd_add" id="menu">
  <a href="pages/atten_create.php">
        <!-- Botão adicionar atendimento -->
        <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-js-ripple-effect" >
          <i class="material-icons">add</i>
        </button>
        </a>
    </div>



</div>
<!-- Fim do Grid -->

    


<!-- Fim do conteúdo da página -->
<?php
// Caso o usuário não tenha permissão para visualizar o conteúdo exibe o arquivo de erro
else: include "../includes/at_errorperm.php";

endif; ?>
</div>
