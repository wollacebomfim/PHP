<?php
session_start();
include_once '../conexao/conexao.php';
include_once "../incluir/seguranca.php";
include_once "../leitura/filtrarrealizacoes.php";
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
<fieldset class="formulario">
<form>
<center><h5 class="light center">Visualizando Realizações Pessoais / Profissionais  </h5></center>


<div class="input-field col s3">
    <i class="material-icons prefix">recent_actors</i>
    <input type="text" name="nome" value="<?php echo $nome ?>" placeholder="NOME DA REALIZAÇÃO"  autofocus readonly>
    <label for="nome">Nome da Realização</label>
    </div>
    


    <div class="input-field col s3">
    <i class="material-icons prefix">today</i>
    <input type="text" name="ano"  value="<?php echo $ano ?>" placeholder="ANO DA REALIZAÇÃO"  autofocus readonly>
    <label for="ano">Ano da Realização</label>
    </div>
    

    
        <div class="input-field col s12">
        <i class="material-icons prefix">textsms</i>
        <textarea name="texto" id="texto"  class="materialize-textarea" readonly><?php echo $texto ?></textarea >
        <label for="texto">Escreva suas relizações</label>
        </div>

</fieldset>
</form>


<center>
<div class="input-field col s12"><a href="../paginas/realizacoes.php">
<input type="button"  value="Voltar" width="100" height="100" class="btn blue">
</a>
</div>
</center>
</div>
<br><br><br><br><br><br><br><br><br>
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


