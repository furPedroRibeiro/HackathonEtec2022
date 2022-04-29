<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<style type="text/css">
	
      .footer{
    margin-top: 45.7vh;
    width: 100vw;
    height: 15vh;
    background-color: var(--colorHeader);
}
#header{
    width: 100vw;
    height: 16vh;
    background-color: var(--colorHeader);
}
    
</style>
<div class="container-fluid">
<section name="headeer">
        <div class="row" id="header">
          <div class="col-3">
            <img src="img/imagemLogo.png" alt="Logo da equipe" width="150px" />
          </div>
          <div class="col-3 offset-6">
            <a href="http://etecperuibe.com.br/">
              <img src="img/logoEtec.png" width="400px" />
            </a>
          </div>
        </div>
      </section>
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
					<button class="btn btn-danger" style="background-color: #6f42c1; border: #6f42c1;">Próxima</button>
				</fieldset>
			</form>
		</div>
	</div>
	<section name="footer">
        <div class="row footer">
            <div class="col-2 offset-1">
               <h2 style="margin-top: 4vh" class="textFooter">Contato: (13)3453-3584</h2>
            </div>
            <div class="col-2 offset-1">
               <h2 style="margin-top: 4vh" class="textFooter">Email: contato@etecperuibe.com.br</h2>
            </div>
            <div class="col-2 offset-1">
               <h2 style="margin-top: 4vh" class="textFooter">Done by: JDS Project</h2>
            </div>
            <div class="col-2 offset-1">
               <h2 style="margin-top: 4vh" class="textFooter">Suporte: pedrocodejob@gmail.com</h2>
            </div>
        </div>
      </section>
</div>

<?php

	if(!isset($_POST['p3'])){
		echo '';
	} else{
		$_SESSION['p3'] = $_POST['p3'];
		header('location: pagina5.php');
	}
?>