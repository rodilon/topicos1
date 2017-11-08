<?php include("logica-usuario.php");
verificaUsuario();
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Educa-mais</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col1">
  <div id="banner"><img src="http://ub.universidadedabiblia.com.br/files/sites/507/2015/09/icone_videoaula.png" width="100" height="100" align="right"></div>
  <div id="header">
    <div id="logo">
      <h1><a href="index.php">Educa-mais</a></h1>
      <p>Video-aula gratuitos</p>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2">
  <div id="topbar">
    <div id="search">
      <ul>
        <li>Qual curso voce esta procurando?</li>
      </ul>
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search the site&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="GO" />
        </fieldset>
      </form>
    </div>
    <div id="topnav">
      <ul>
        <li><a class="active" href="index.html">Inicio</a>
          <ul>
            <li><a class="active" href="index.html">Inicio</a>
              <ul>
                <?php if(usuarioEstaLogado())  {?>
                    <li><a>Você esta logado como <?= $_COOKIE["usuario_logado"] ?>.</a></li>
                <?php } ?>
              </ul>
            </li>
          </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
  <div id="gallery">
    <h1> Programacao de Games</h1>
      <iframe width="500" height="360" src="https://www.youtube.com/embed/UI_wLC1W49M" frameborder="0" allowfullscreen></iframe>
      <p></p>
      <div style="background-color:#E6E6E6;">
      <h2> Por que fazer esse curso? </h2>
          Nas ultimas decadas, o desenvolvimento e a comercializacao de jogos eletronicos e de produtos, fisicos ou virtuais, relacionados a esses
          jogos tem se tornado uma atividade economica de grande importancia no cenario mundial, tendo ha anos ultrapassado, por exemplo, o
          faturamento de indústrias há muito consolidadas, como a indústria de cinema de Hollywood. O Brasil ainda responde por uma parcela
          relativamente pequena desse faturamento mas esse mercado tem crescido muito no país, acima do crescimento da economia como um todo, e mostra potencial de
          crescimento ainda maior, tendo atraido investimentos cada vez maiores tanto do governo como de investidores e empreendedores privados. Além disso, jogos
          eletronicos têm se afirmado cada vez mais como uma forma de expressao artistica e cultural e tem aplicação em diversas areas, nao so para entretenimento,
           como também, por exemplo, para educação e treinamento, propaganda, entre outras. Nesse contexto, a programacao de jogos mostra-se nao so como uma excelente
           forma para aperfeicoar o conhecimento de programacao como permite a entrada nesse grande e crescente mercado e os conhecimentos adquiridos no curso devem ser
           aplicaveis a jogos desenvolvidos em uma grande variedade de dispositivos (computadores, tablets, smartphones, consoles...) e com diversas finalidades possiveis,
           como as ja mencionadas areas de entretenimento, educacao, treinamento, propaganda etc.
       <h2>O que eu preciso saber? </h2>
       <p></p>
      Este curso e voltado para alunos ou profissionais das areas de tecnologia da informacao ou design com conhecimentos previos de programacao e que se
       interessa pelo desenvolvimento de jogos eletronicos. O conhecimento previo de programacao e da linguagem JavaScript, alem de noções de orientaçao a objetos,
       são pre-requisitos imprescindiveis para o acompanhamento desse curso, na forma como está estruturado.

<p></p>
Nível de dificuldade: Intermediario.
</div>

  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <h2>Temas</h2>
      <p style="margin-bottom:2px; margin-top:2px;">Programacao </p>
      <p style="margin-bottom:2px; margin-top:2px;">Games</p>
      <p style="margin-bottom:2px; margin-top:2px;">Estatistica </p>
      <p style="margin-bottom:2px; margin-top:2px;">Administracao</p>
      <p style="margin-bottom:2px; margin-top:2px;">Banco de Dados</p>
    </div>
    <div id="column">
      <div class="flickrbox">
        <h2 class="title">Colaboradores</h2>
        <ul>
          <li><a href="#"><img src="http://portaleliomar.opovo.com.br/wp-content/uploads/2016/06/caixa.png"  width="50" height="50"  alt="" /></a></li>
          <li><a href="#"><img src="http://www.z3consulting.com.br/wp-content/uploads/2013/11/logo-abril.png"  width="50" height="50" alt="" /></a></li>
          <li class="last"><img src="http://cdn6.shoppingvilaolimpia.com.br/sites/svo/files/saraiva_0.png" width="50" height="50" alt="" /></a></li>
        </ul>
        <br class="clear" />
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col5">

</div>
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
