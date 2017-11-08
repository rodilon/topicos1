<?php include("conecta.php");
include("banco-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

if($usuario == null){
  header("Location: index-new.php?login=0");
}else{
  header("Location: index-new.php?login=1");
  setcookie("usuario_logado", $usuario["email"], time() + 60);
}
die();
