<head>
<title>Atencil - Modulo de Contratos</title>
<meta charset="UTF-8" >

<!-- Carrega o arquivo de configuração de conexão e as variáveis para utilização do php -->
<?php require 'at_conecta.php'; ?>

</head>

<body>
      <div align="center">
      <form method="get" action="">

        <p>SISTEMA DE GERAÇÃO AUTOMÁTICA DE CONTRATO</p>
        <p>&nbsp;</p>

        <p>
        <label for="cliente">Selecione o cliente:</label>
		<br>
        <select NAME=cliente>
            <OPTION VALUE=0>Selecione</option>
            <?php echo $list_clients ?> </option>
          </select>
		</p>

        <p>
          <label for="numcontrato">Para qual produto ou serviço deseja gerar o contrato?</label>
          <br>
          <select name=servico>
            <option value=0>Selecione</option>
<?php
		$sql = "SELECT cod_estados, sigla
				FROM estados
				ORDER BY sigla";
		$res = mysql_query( $sql );
		while ( $row = mysql_fetch_assoc( $res ) ) {
			echo '<option value="'.$row['cod_estados'].'">'.$row['sigla'].'</option>';
		}
	?>
          </select>
        </p>



		<p>
          <label for="tipocontrato">Selecione o tipo de contrato a ser gerado:</label>
          <br>
          <select name="tipocontrato" id="tipocontrato">
            <OPTION VALUE="criacao" selected>Criação de website</option>
            <OPTION VALUE="edicao">Edição/Manutenção de website</option>
            <OPTION VALUE="admredesoc">Administração de Redes Sociais</option>
          </select>
        </p>


       <p>&nbsp;</p>
        <p>
        </p>

        <p>
          <input type="submit" name="enviar" id="enviar" value="Gerar Contrato">
        </p>
        </p>

      </form>
</div>
</body>