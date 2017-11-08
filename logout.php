<?php include("logica-usuario.php");

logout();
header("Location: index-new.php?logout=true");
