<?php
session_start();
include_once '../conexao/conexao.php';
include_once "../incluir/seguranca.php";
include_once "../leitura/filtrarprojetos.php";
?>
<html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <?php include_once "../incluir/menu.php"; ?>
    <body>
    <br>
    <div class="row container">
 
    <form action="../processar/upprojetos.php" method="POST">

    <?php 
if(isset($_SESSION['msg'])):
    echo $_SESSION['msg'];
    session_unset();
endif;
?>

<fieldset class="formulario">
<form>

<center><h5 class="light center">Atualizando Projeto</h5></center>

<div class="input-field col s3">
<i class="material-icons prefix">group</i>
    <input type="text" name="nome" value="<?php echo $nome?>" placeholder="NOME DO PROJETO"  autofocus>
    <label for="nome">Nome do Projeto</label>
    </div>




    <div class="input-field col s3">
    <input type="text" name="ano" value="<?php echo $ano?>" placeholder="ANO DO PROJETO"  maxlength="4" size="4"  autofocus>
    <label for="ano">Ano do Projeto</label>
    </div>


        <div class="input-field col s12">
        <i class="material-icons prefix">textsms</i>
        <textarea name="projeto" id="projeto"  rows="10" cols="40" class="materialize-textarea"><?php echo $projeto ?></textarea>
        <label for="projeto">Escreva seu projeto</label>
        </div>


    
        <center>
<div class="input-field col s12">
<input type="submit" value="ALTERAR PROJETO" class="btn blue">

</div>
</center>


   
</fieldset>
</form>
<br>


<br>

</form>   
<script type="text/javascript" src="../js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>

</body>
<?php include_once "../incluir/rodape.php"; ?>
</html>


