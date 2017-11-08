<?php
function usuarioEstaLogado(){
  return isset($_COOKIE["usuario_logado"]);
}

function verificaUsuario(){
  if(!usuarioEstaLogado()){
    header("Location: index-new.php?falhaDeSeguranca=true");
    die();
  }
}
