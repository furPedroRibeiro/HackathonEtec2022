<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<?php 
	session_start();
	$p1 = $_SESSION['p1'];
	$name = $_SESSION['nome'];
	if (!isset($name)) {
		header('location: pagina1.php');
	}
	else if(!isset($p1)){
		header('location: pagina1.php');
	}
?>

<div class="container-fluid">
	<div class="row">
		<div class="form">
			<br>
			<form method="post">
				<fieldset>
				<legend>Pergunta 2 para <?php echo $name; ?></legend>
					 Qual destas opções você escolheria?
					<br><br>
					<select name="p2">
						<option value="exatasDes">Exatas + lógica</option>
						<option value="humanasMad">Humanas + organização</option>
						<option value="humanasJodi">Humanas + design</option>
						<option value="exatasJodi">Exatas + design</option>
					</select>
					<br><br>
					<button class="btn btn-danger" style="background-color: #6f42c1; border: #6f42c1;">Próxima</button>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<?php

	if(!isset($_POST['p2'])){
		echo '';
	} else{
		$_SESSION['p2'] = $_POST['p2'];
		header('location: pagina4.php');
	}
?>