<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
	session_start();
		$name = $_SESSION['nome'];
	if (!isset($name)) {
		header('location: pagina1.php');
	}

	echo '<div class="container-fluid">
	<div class="row">
		<div class="col-4 offset-4">
			<br>
			<form method="POST">
			<fieldset>
				<legend>Pergunta 1 para '.$name.'</legend>
				Com qual destas opções você se encaixa mais ?
				<select name="p1">
						<option value="program">Programação</option>
						<option value="games">Games e design</option>
						<option value="gestao">Capacidade de gestão</option>
					</select>
					<br>
				<br>
				<button class="btn btn-danger" style="background-color: #6f42c1; border: #6f42c1;">Próxima</button>
			</fieldset>
			</form>
		</div>
	</div>
</div>';

	if($_POST){
		$_SESSION['p1'] = $_POST['p1'];
		if(!isset($_SESSION['p1'])){
			header('location: pagina1.php');
		} else{
			header('location: pagina3.php');
		}
	}
?>