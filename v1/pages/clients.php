<?php if (!isset($_SESSION)) session_start(); ?>

<div id="content">

<?php
//Obtem as configurações do arquivo de config
require "../config.php";
require "../auth/at_connect.php";
// Verifica se a permissão do usuário é maior ou igual à necessária e monta as exibições
if ($_SESSION['UserPermLvl'] >= $perm_view_clients):
?>


<!-- Início do conteúdo da página -->

<!-- Início do Grid -->
<div class="mdl-grid">
  
    <div class="mdl-cell mdl-cell--12-col">
        <div id="atd_title">
        <h3>Clientes</h3>
        </div>

    </div>


<?php
          // Select all the attendances in the table
          $query = "SELECT * FROM at_clients";

          // Results of the select
          $result = mysqli_query($mysql, $query);

          // While mysql find attendances it will show and create it's card
          while ($row = mysqli_fetch_assoc($result))
          
          // Starting the while
          { 
                $clientid = $row['clientid'];
                $clientcompany = $row['clientcompany'];
                $clientregister = $row['clientregister'];
                $clientfname = $row['clientfname'];
                $clientlname = $row['clientlname'];
                $clientmail = $row['clientmail'];
                $clienttel1 = $row['clienttel1'];
                $clienttel2 = $row['clienttel2'];
                $clienttel3 = $row['clienttel3'];
                $clientzap = $row['clientzap'];
                $clientbirthdate = $row['clientbirthdate'];
                $clientadress = $row['clientadress'];
                $clientstatus = $row['clientstatus'];
                $clienteobs = $row['clienteobs'];
                

                /*
                $day = date('d',strtotime($attendate));
                $month = date('M',strtotime($attendate));
                $year = date('Y',strtotime($attendate));
				*/





                // Starting the loop
                echo"



    <div class=\"mdl-cell mdl-cell--2-col mdl-cell--4-col-phone mdl-cell--4-col-tablet\">
        
         <!-- Início do Card -->
          <div class=\"mdl-card mdl-shadow--4dp at-card at-cardatd\" >

              <div class=\"mdl-card__title\">
                <span>".$clientfname."</span>
              </div>

              <div class=\"mdl-card__supporting-text at_txtsup\">


                <div> Nome: ".$clientfname." </div>

                <div> Sobrenome: ".$clientlname." </div>

                <div> Email: ".$clientmail." </div>

                <div> Whatsapp: ".$clientzap." </div>

                

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
  <a href="pages/clients_create.php">
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