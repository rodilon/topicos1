<?php include("conecta.php");
include("banco-usuario.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$senhaMd5 = md5($senha);

if (insereUsuario($conexao, $email, $senhaMd5)) { ?>

  <?php header("Location: index-new.php?cadastroComSucesso=1") ?>
<?php
}else{
  $msg = mysqli_error($conexao);
?>
<?php header("Location: index-new.php?cadastroComSucesso=0") ?>
<?php
}
  mysqli_close($conexao);
?>
