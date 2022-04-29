<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<style type="text/css">
 .footer{
    margin-top: 52.9vh;
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
	$name = $_SESSION['nome'];
  $p2 = $_SESSION['p2'];
  $p3 = $_SESSION['p3'];
  $p4 = $_SESSION['p4'];
  echo '';
?>

		<div class="row">
			<div class="col-4 offset-4">
				<br>
				<form method="post">
					<fieldset>
          <?php echo $name;?>, seu resultado:
             <br><br>
						 <?php 
						 	if($p1=='program' and $p2=='exatasDes' and $p3=='p3DesOuMad' and $p4=='p4Des'){
								 echo 'Seu curso ideal é Desenvolvimento de Sistemas <br><br>';
							 }else if($p1=='program' and $p2=='exatasJodi' and $p3=='p3DesOuMad' and $p4=='p4Jodi'){
								echo 'Seu curso ideal é Desenvolvimento de Sistemas <br><br>';
							 } else if($p1=='program' and $p2=='exatasJodi' and $p3=='p3Tanto' and $p4=='p4Jodi'){
								echo 'Seu curso ideal é Desenvolvimento de Sistemas <br><br>';
							 } else if($p1=='program' and $p2=='exatasDes' and $p3=='p3Tanto' and $p4=='p4Des'){
								echo 'Seu curso ideal é Desenvolvimento de Sistemas <br><br>';
							 } else if($p1=='games' and $p2=='exatasJodi' and $p3=='p3Jodi' and $p4=='p4Jodi'){
								echo 'Seu curso ideal é Jogos Digitais <br><br>';
							 }else if($p1=='games' and $p2=='exatasDes' and $p3=='p3Jodi' and $p4=='p4Des'){
								echo 'Seu curso ideal é Jogos Digitais <br><br>';
							 }else if ($p1=='games' and $p2=='exatasJodi' and $p3=='p3Tanto' and $p4=='p4Jodi'){
								echo 'Seu curso ideal é Jogos Digitais <br><br>';
							 }else if ($p1=='games' and $p2=='exatasDes' and $p3=='p3Tanto' and $p4=='p4Des'){
								echo 'Seu curso ideal é Jogos Digitais <br><br>';
							} else if($p1=='gestao' and $p2=='humanasMad' and $p3=='p3DesOuMad' and $p4=='p4Mad'){
								echo 'Seu curso ideal é Administração <br><br>';
							}else if( $p1=='gestao' and $p2=='humanasJodi' and $p3=='p3DesOuMad' and $p4=='p4Jodi'){
								echo 'Seu curso ideal é Administração <br><br>';
							}else if($p1=='gestao' and $p2=='humanasMad' and $p3=='p3Tanto' and $p4=='p4Mad'){
								echo 'Seu curso ideal é Administração <br><br>';
							}else if ($p1=='gestao' and $p2=='humanasJodi' and $p3=='p3Tanto' and $p4=='p4Jodi'){
								echo 'Seu curso ideal é Administração <br><br>';
							} else {
								echo 'Você é apto para fazer qualquer um dos cursos, fique mais a vontade na escolha :p <br><br>';
							}
						 ?>
						 
						<button  class="btn btn-danger" style="background-color: #6f42c1; border: #6f42c1;">
						<a href="index.html" style="text-decoration: none; color: white;">Sair</a>
						</button>	
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
