<?php
function verificaUsuario(){
  if(!isset($_COOKIE["usuario_logado"])){
    header("Location: index-new.php?falhaDeSeguranca=true");
    die();
  }
}
