<html>
	<head>
		<meta charset="utf-8">
		<title>Orçamento - Vila do Site</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="scripts.js"></script>
	</head>
	<body>
		<header>
			<h1>Orçamento XXX - Assunto do orçamento</h1>
			<address contenteditable>
				<p>Bruno Braga</p>
				<p>101 E. Chapman Ave<br>Orange, CA 92866</p>
				<p>(800) 555-1234</p>
			</address>
			<span><img alt="" src="http://www.viladosite.com.br/images/logo_horiz.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address contenteditable>
				<p>Empresa Contratante<br>A/c Pessoa Responsável</p>
			</address>
			<table class="meta">
				<tr>
					<th><span>Orçamento Nº</span></th>
					<td><span contenteditable>XXXXXX</span></td>
				</tr>
				<tr>
					<th><span>Criado em</span></th>
					<td><span contenteditable>25/03/2019</span></td>
				</tr>
				<tr>
					<th><span>Válido até</span></th>
					<td><span contenteditable>25/04/2019</span></td>
				</tr>
				<tr>
					<th><span>Valor Final</span></th>
					<td>
						<span id="prefix">R$</span>
						<span>1.500,00</span>
					</td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span>Cód</span></th>
						<th><span>Item</span></th>
						<th><span>Descrição</span></th>
						<th><span>Subtotal</span></th>
						<th><span>Qt.</span></th>
						<th><span>Total</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span contenteditable>01</span></td>
						<td><a class="cut">-</a><span contenteditable>Criação de site pessoal</span></td>
						<td><span contenteditable>Criação de site pessoal para profissionais liberais e pessoa física</span></td>
						<td><span data-prefix>R$</span><span contenteditable>1.500,00</span></td>
						<td><span contenteditable>1</span></td>
						<td><span data-prefix>R$</span><span>1.500,00</span></td>
					</tr>
				</tbody>
			</table>
			<a class="add">+</a>
			<table class="balance">
				<tr>
					<th><span>Total</span></th>
					<td><span data-prefix>R$</span><span>1.500,00</span></td>
				</tr>
				<tr>
					<th><span>Créditos e Descontos</span></th>
					<td><span data-prefix>R$</span><span contenteditable>0.00</span></td>
				</tr>
				<tr>
					<th><span>Valor Final</span></th>
					<td><span data-prefix>$</span><span>1.500,00</span></td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span>Notas e Observações</span></h1>
			<div contenteditable>
				<p>Este serviço inclui nosso suporte e manutenção gratuitos por 30 dias.</p>
			</div>
		</aside>
	</body>
</html>