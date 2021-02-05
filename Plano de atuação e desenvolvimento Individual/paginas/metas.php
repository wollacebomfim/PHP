<?php
session_start();
include_once '../conexao/conexao.php';
include_once "../incluir/seguranca.php";
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
    <?php 
if(isset($_SESSION['msg'])):
    echo $_SESSION['msg'];
    session_unset();
endif;
?>

<fieldset class="formulario">
<form>
<h5 class="light center">Cadastramento de Metas</h5>
<br>
<h5 class="light center">Quais são as suas aspirações para o próximo ano dentro da Queiroz Cavalcanti?</h5>
<br>
<div class="input-field col s3">
<i class="material-icons prefix">group</i>
    <input type="text" name="nome"  placeholder="NOME PARA META"  autofocus>
    <label for="nome">Nome para meta</label>
    </div>
<div class="input-field col s5">
    <i class="material-icons prefix">playlist_add</i>
    <select name="tipo" id="tipo">
    <option value="" disabled selected>Qual a meta ?</option>
      <option value="Metas de Engajamento / Relacionamento">Metas de Engajamento / Relacionamento</option>
      <option value="Metas Profissionais (negócios/atuação próprios)">Metas Profissionais (negócios/atuação próprios)</option>
      <option value="Meta Pessoais">Meta Pessoais</option>
      </select>
    <label for="tipo">Selecione a meta</label>
    </div>
    <div class="input-field col s3">
    <input type="text" name="ano"  placeholder="ANO DA META" maxlength="4" size="4"  autofocus>
    <label for="ano">Ano da meta</label>
    </div>
        <div class="input-field col s12">
        <i class="material-icons prefix">textsms</i>
        <textarea name="meta" id="meta" class="materialize-textarea"></textarea>
        <label for="meta">Detalhe sua meta</label>
        </div>
    <center>
<div class="input-field col s12">
<input type="submit" value="cadastrar" class="btn blue">
<input type="reset" value="limpar" class="btn red">
</div>
</center>

   
</fieldset>
</form>

<br>

      <center>  <h5 class="light">Listagem de Metas</h5><hr></center>

  
        <table class="striped">
            <thead>
                <tr>
                
                   
                    <th>Nome da meta </th>
                    <th>Tipo</th>
                    <th>Ano</th>
                    <th>Visualizar</th>
                    <th>Alterar</th>
                    <th>Deletar</th>
 

</tr>
</thead>
<tbody><?php include_once '../leitura/lermetas.php';?></tbody>
</table>
</form>   
</div>
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


