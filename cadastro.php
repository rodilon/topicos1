<?php include("cabecalho-index.php"); ?>

<button onclick="document.getElementById('id01').style.display='block'" name="cadastroUser"  style="width:auto;">Cadastrar Usuário</button>

<div id="id01" class="modal">

    <form class="modal-content animate" action="cadastro_usuario.php" method="post">
      <div class="container_">
        <label><b>Email</label>
        <input type="text" placeholder="Entre com Email" name="email" required>

        <label><b>Senha</label>
        <input type="password" placeholder="Entre com senha" name="senha" required>
        <label><b>Repita a senha</label>
        <input type="password" placeholder="Repita a senha" name="senha-repetida" required>

        <p>Para criar uma conta você deve concordar com nossos <a href="#">Termos & Privacidade</a>.</p>

        <div class="clearfix">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
          <button type="submit" class="signupbtn">Cadastrar</button>
        </div>
      </div>
    </form>
  </div>
  <script>
  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>


<?php include("rodape-index.php")  ?>
