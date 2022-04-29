<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<?php 
	session_start();
	$p1 = $_SESSION['p1'];
  $p2 = $_SESSION['p2'];
  $p3 = $_SESSION['p3'];
	$name = $_SESSION['nome'];
	if (!isset($name)) {
		header('location: pagina1.php');
	}
	else if(!isset($p1)){
		header('location: pagina2.php');
	}
  else if(!isset($p2)){
		header('location: pagina3.php');
	}
  else if(!isset($p3)){
		header('location: pagina4.php');
	}
?>

<div class="container-fluid">
	<div class="row">
		<div class="form">
			<br>
			<form method="post">
				<fieldset>
				<legend>Pergunta 4 para <?php echo $name; ?></legend>
					 Onde você se encaixa dentre esses 3?
					<br><br>
					<select name="p4">
						<option value="p4Des">Pensamento racional, lógico e frio</option>
						<option value="p4Mad">Visão ampla, sempre um passo a frente buscando o melhor</option>
						<option value="p4Jodi">Criatividade e genialidade, sabe agradar a maioria</option>
					</select>
					<br><br>
					<button class="btn btn-danger">Próxima</button>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<?php

	if(!isset($_POST['p4'])){
		echo '';
	} else{
		$_SESSION['p4'] = $_POST['p4'];
		header('location: pagina6.php');
	}
?>