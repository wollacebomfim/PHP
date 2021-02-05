<?php
session_start();
require_once '../conexao/conexao.php';
include_once "../incluir/seguranca.php";
include_once "../leitura/filtrarmetas.php";
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
<form action="../processar/cadmetas.php" method="POST" >
<fieldset class="formulario">

<h5 class="light center">Visualizano de Metas</h5>
<div class="input-field col s3">
<i class="material-icons prefix">group</i>
    <input type="text" name="nome" value="<?php echo $nome ?>" placeholder="NOME PARA META"  autofocus readonly>
    <label for="nome">Nome para meta</label>
    </div>

<div class="input-field col s5">
    <i class="material-icons prefix">playlist_add</i>
    <select name="tipo" id="tipo">
    <option value="<?php echo $tipo ?>" readonly><?php echo $tipo ?> </option>
      </select>
    <label for="tipo">Selecione a meta</label>
    </div>

    <div class="input-field col s3">
    <input type="text" name="ano" value="<?php echo $ano ?>" placeholder="ANO DA META" maxlength="4" size="4"  autofocus readonly>
    <label for="ano">Ano da meta</label>
    </div>

        <div class="input-field col s12">
        <i class="material-icons prefix">textsms</i>
        <textarea name="meta" id="meta"  class="materialize-textarea" readonly><?php echo $meta ?></textarea>
        <label for="meta">Escreva sua meta</label>
        </div>

<center>
<div class="input-field col s12">
<a href="../paginas/metas.php">
<input type="button"  value="Voltar" width="100" height="100" class="btn blue">
</a>
</div>
</center>
</fieldset>
</form>
</div>
<br>  
<script type="text/javascript" src="../js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>
</body>
<?php include_once "../incluir/rodape.php"; ?>
</html>


