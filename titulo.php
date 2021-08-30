<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
<meta charset="UTF-8">
		<script src="js/script.js"></script>
<title></title>
</head>

<body>
	<header>
		<h1>Título</h1>
	</header>
	
	<main>
		<input class="textos" type="date" name="data" />
		<img class="imagem" src="img/icon-calendar.png" />
		<span>
		<input class="textos" list="Modalidade" name="Modalidade" placeholder="Modalidade">
			<datalist id="Modalidade">
				<option value="MR">
				<option value="CT">
				<option value="MR">
				<option value="CR">
			</datalist>
		</span>
		<span>
		<input class="textos" list="Filtro" name="Filtro Geral" placeholder="Filtro Geral">
			<datalist id="Filtro">
				<option value="Filtro Geral">
			</datalist>
		</span>
		
		<span>
		<input class="textos" type="text" placeholder="Pesquisar" />
		<span>
		<button id="a" type="submit" class="none"><img src="img/icon-pesquisa.png" class="imagem2" /></button>
		</span>
		</span>
		<table class="tabela">
		<tr>
			<td>
			ID Paciente
			</td>
			<td>
			Paciente
			</td>
			<td>
			Número
			</td>
			<td>
			Tipo Exame
			</td>
			<td>
			Modalidade
			</td>
			<td>
			Data
			</td>
			<td>
			Visualização
			</td>
			</tr>
		
		
		</table>
		<table id="texto">
		
		
		</table>
	
	</main>
	
	<footer>
	<button class="voltar" onClick="window.location.href=window.location.href">Voltar</button>

	</footer>
		
</body>
</html>