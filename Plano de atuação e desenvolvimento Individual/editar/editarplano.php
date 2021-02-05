<?php
session_start();
include_once '../conexao/conexao.php';
include_once "../incluir/seguranca.php";
include_once "../leitura/filtrarplanos.php";
?>
<html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <?php include_once "../incluir/menu.php"; ?>
    <body> <br>
    <div class="row container">
    <form action="../processar/upplano.php" method="POST" >
  


    <?php 
if(isset($_SESSION['msg'])):
    echo $_SESSION['msg'];
    session_unset();
endif;
?>
<h5 class="light center">Cadastramento de Plano de Açãoaaaa</h5>
<fieldset class="formulario">
<form>
<br>


<div class="input-field col s8">
    <i class="material-icons prefix">more</i>
  <input type="text" name="nome"  value="<?php echo $nome?>" readonly>
  <label>Nome do Plano</label>
  </div>

<div class="input-field col s8">
    <i class="material-icons prefix">gavel</i>
  <input type="text" name="tipo"  value="<?php echo $tipo?>" readonly >
  <label>Tipo do Plano</label>
    </div>

    <div class="input-field col s10">
    <i class="material-icons prefix">timeline</i>
    <input type="text" name="meta"  value="<?php echo $meta ?> "  readonly>
    <label for="meta">Nome da Meta</label>
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">date_range</i>
    <input type="date" name="previsto" value="<?php echo $data_formatada1->format('Y-m-d'); ?>"   readonly>
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">date_range</i>
    <input type="date" name="realizado" value="<?php echo $data_formatada2->format('Y-m-d'); ?>"  >
    </div>




        <div class="input-field col s12">
        <i class="material-icons prefix">comment</i>
        <textarea name="acao" id="acao" value="<?php echo $acao?>" class="materialize-textarea" readonly><?php echo $acao?></textarea>
        <label for="acao">Ação</label>
        </div>

<center>
    
    
<div class="input-field col s12">
<input type="submit" value="atualizar" class="btn blue">
<a href="../ver/listarplano.php"><input type="button" value="voltar" class="btn blue"></a>
</div>
</center> 
</fieldset>
</form> 
</div>
<script type="text/javascript" src="../js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">

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


