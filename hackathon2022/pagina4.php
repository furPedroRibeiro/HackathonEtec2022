<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<?php 
	session_start();
	$p1 = $_SESSION['p1'];
  $p2 = $_SESSION['p2'];
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
?>

<div class="container-fluid">
	<div class="row">
		<div class="form">
			<br>
			<form method="post">
				<fieldset>
				<legend>Pergunta 3 para <?php echo $name; ?></legend>
					 Qual destas opções você escolheria?
					<br><br>
					<select name="p3">
						<option value="p3DesOuMad">Período integral</option>
						<option value="p3Jodi">Período normal</option>
						<option value="p3Tanto">Tanto faz</option>
					</select>
					<br><br>
					<button class="btn btn-danger">Próxima</button>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<?php

	if(!isset($_POST['p3'])){
		echo '';
	} else{
		$_SESSION['p3'] = $_POST['p3'];
		header('location: pagina5.php');
	}
?>