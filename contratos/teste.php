<head>
<meta charset="UTF-8" >
</head>


<!-- Carrega o arquivo de configuração de conexão e as variáveis para utilização do php -->
<?php require 'at_conecta.php'; ?>


<p>
<label for="clientes">Cliente:</label>
        <select NAME="cliente" id="cliente">
            <OPTION VALUE=0>Selecione</option>
            <?php echo $list_clients ?> </option>
          </select>
</p>

<p>
<label for="faturas">Fatura:</label>
<select name="faturas" id="faturas">
	<option value="">-- Escolha uma fatura--</option>
</select>
</p>

		<script src="http://www.google.com/jsapi"></script>
		<script type="text/javascript">
		  google.load('jquery', '1.3');
		</script>		

		<script type="text/javascript">
		$(function(){
			$('#id').change(function(){
				if( $(this).val() ) {
					$('#invoiceid').hide();
					$('.carregando').show();
					$.getJSON('clientes.faturas.php?search=',{id: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value=""></option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].invoiceid + '">' + j[i].nome + '</option>';
						}	
						$('#invoiceid').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#invoiceid').html('<option value="">– Escolha um estado –</option>');
				}
			});
		});
		</script>
