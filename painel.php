<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
<meta charset="UTF-8">
<title></title>
</head>

<body>
<header>
<img src="img/logo-anamnese_login.png" />
</header>
	
<main>
<?php
session_start();
include('verifica_login.php');
?>
<form action="logout.php">
<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<button>Sair</button>
</form>
</main>
	
<footer class="rodape-login">
<img src="img/logo-medilab.png" />	
</footer>	
	
</body>
</html>