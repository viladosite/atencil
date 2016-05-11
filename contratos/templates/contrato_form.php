<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>
	Contrato
	</title>
	<link rel="stylesheet" type="text/css" href="contrato_criacao_style.css" />
	<link rel="stylesheet" href="form.css" />
	
</head>



<body>
 
<div class="corpo_msg">
	<header id="cabecalho">
	
	<h2 id="tit1">Contrato nº</h2>

	<img id="logo" src="" />


	</header>

	
<form method="post" id="contrato_vs" action=" " oninput=" " >
	<fieldset id="d_pessoais"><legend>Dados Pessoais</legend>
			<p><label for="nome_rs">Nome/Razão Social:</label>
			<input type="text" name="nome_rs" id="nome_rs" placeholder="Nome ou Razão Social" /></p>
			<p><label for="NomeF">Nome Fantasia:</label>
			<input type="text" name="NomeF" id="nome_f" placeholder=" Nome Fantasia "/></p>
			<p><label for="CPF">CPF/CNPJ:</label>
			<input type="number" name="CPF" id="cpf" placeholder="CPF ou CNPJ"/>
			<label for="inscE">Insc.Est:</label>
			<input type="text" name="InscE" id="inscE" />
			<label for="inscM">Insc.Mun:</label>
			<input type="text" name="InscM" id="inscM" /> </p>

			<p><label for="Endereco">Endereço:</label>
			<input type="text" name="Endereco" id="Endereco" />
			<label for="bairro">Bairro:</label>
			<input type="text" name="bairro" id="bairro" /> </p>

			<p><label for="tel">Telefones:</label>
			<input type="tel" name="tel" id="tel" />
			<input type="tel" name="tel" id="tel" />
			<label for="cep">CEP:</label>
			<input type="number" name="cep" id="cep" /> </p>

			<p><label for="aut">Nome do Autorizante:</label>
			<input type="text" name="aut" id="aut" />
			<label for="cargo">Cargo:</label>
			<input type="text" name="cago" id="cargo" /> </p>

			<p><label for="data">Data de Nascimento:</label>
			<input type="date" name="data" id="data" />
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" /> </p>
			</fieldset>

			<fieldset id="cp2">

			<fieldset id="tservico"><legend>Tipo de Serviço</legend>
			<input type="checkbox" name="crsite" id="crsite" /><label for="crsite">Criação de Website</label>
			<input type="checkbox" name="rdominio" id="rdominio" /><label for="rdominio">Registro de Dominio</label><br>
			<input type="checkbox" name="mnsite" id="mnsite" /><label for="mnsite">Manutenção de Website</label>
			<input type="checkbox" name="admrede" id="admrede" /><label for="admrede">Adm.de Redes Sociais</label><br>
			<input type="checkbox" name="hpsite" id="hpsite" /><label for="hpsite">Hospedagem de Site</label>
			<input type="checkbox" name="emkt" id="emkt" /><label for="emkt">E-mail Marketing</label><br>
			<input type="checkbox" name="idvisual" id="idvisual" /><label for="idvisual">Identidade Visual</label>
			<input type="checkbox" name="camon" id="camon" /><label for="camon">Campanha On-line</label><br>
			<input type="checkbox" name="outros" id="outros" /><label for="outros">Outros <input type="text" name="ot" id="ot" /></label><br>
			</fieldset>


			<fieldset id="fpg"><legend>Forma de Pagamento</legend>
			<input type="checkbox" name="din" id="din" /><label for="din">Dinheiro</label>
			<input type="checkbox" name="car" id="car" /><label for="car">Cartão</label>
			<input type="checkbox" name="bol" id="bol" /><label for="bol">Boleto</label>
			<input type="checkbox" name="deb" id="deb" /><label for="deb">Débito Autom.</label><br>
			</fieldset>


			<fieldset id="vpc"><legend>Valor e Parcelamento</legend>
			<label for="vt">Valor Total: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; R$:</label>
			<input type="text" name="vt" id="vt" /><br>
			<input type="checkbox" name="parc" id="parc" /><label for="parc">Parcelado</label>
			<label for="qparc">Qt.De Parcelas: </label>
			<input type="number" name="qparc" id="qparc" />
			</fieldset>

			</fieldset>
			

    		<fieldset id="oservacao"><legend>Observações</legend>
			  <p><textarea name="obs" id="obs" cols="35" rows="5" placeholder=""> </textarea> </p>

			  </fieldset>


		<input type="submit"  />
	 </form>


<footer id="rodape">
<p>Rio de Janeiro,<br>
____ de ____________ de 20 __ </p>
<p></p>
</footer>
</div>
</body>
</html>