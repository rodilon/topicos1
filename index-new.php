<?php include("cabecalho-index.php");
include("logica-usuario.php");
?>
<form action="login.php" method="post">

  <div class="container">
<div class="col-md-4 col-md-offset-4 text-center">

<?php if(isset($_GET["logout"]) && $_GET["logout"]==true) { ?>
  <p class="text-success">Usuário deslogado com sucesso!</p>
<?php } ?>

<?php if(isset($_GET["login"]) && $_GET["login"]==1) { ?>
  <?php header("Location: index.php")  ?>
<?php } ?>

<?php if(isset($_GET["login"]) && $_GET["login"]==0) { ?>
	<p class="alert-danger">Usuário ou senha inválida!</p>
<?php } ?>

<?php if(isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"]==true) { ?>
	<p class="alert-danger">Você não tem acesso ou sua sessão expirou!</p>
<?php } ?>



  <h1>Bem Vindo!</h1>

  <?php if(isset($_GET["cadastroComSucesso"]) && $_GET["cadastroComSucesso"]==1) { ?>
  	<p class="text-success">Usuario adionado com sucesso!</p>

  <?php } ?>

  <?php if(isset($_GET["cadastroComSucesso"]) && $_GET["cadastroComSucesso"]==0) { ?>
  	<p class="text-danger">Usuario não adionado com sucesso</p>

  <?php } ?>

  <h2>Login</h2>


        <div class="col-md-12">
        <input class="form-control" type="email" name="email" placeholder="digite seu email"></input></td>
          <input class="form-control" type="password" name="senha" placeholder="digite sua senha"></input></td>
        </div>
          </br>
        <p>
          <button type="submit" class="btn btn-primary">Login</button>
          <a href="cadastro.php" class="btn btn-danger">Cadastrar</a>
        </p>



      </div>


<?php include("rodape-index.php"); ?>
