<?php include("cabecalho-index.php"); ?>

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
  <form action="login.php" method="post">
    <table class="table">
      <tr>
        <td>Email</td>
        <td><input class="form-control" type="email" name="email"></input></td>
      </tr>
      <tr>
        <td>Senha</td>
        <td><input class="form-control" type="password" name="senha"></input></td>
      </tr>
      <tr>
        <td><button type="submit" class="btn btn-primary">Login</button</td>
      </tr>
      <tr>
        <td>
          <a href="cadastro.php" class="btn btn-danger">Cadastrar</a>
        </td>
      </tr>



<?php include("rodape-index.php"); ?>
