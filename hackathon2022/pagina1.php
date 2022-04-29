<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<script>
</script>
<?php
	session_start();
	if($_POST){
		$_SESSION['nome'] = $_POST['nome'];
		$name = $_SESSION['nome'];
		header('location: pagina2.php');
	}
?>
<div class="container-fluid">
	<div class="row">
		<div class="form">
			<br>
			<form method="post">
				Digite seu nome: <input type="text" name="nome">
				<br><br>
				<button class="btn btn-danger" style="background-color: #6f42c1; border: #6f42c1;">Entrar</button>
			</form>
		</div>
	</div>
</div>