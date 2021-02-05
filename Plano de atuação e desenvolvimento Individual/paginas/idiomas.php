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
    <form action="../processar/cadastraridiomas.php" method="POST" >


    <?php 
if(isset($_SESSION['msg'])):
    echo $_SESSION['msg'];
    session_unset();
endif;
?>

<fieldset class="formulario">
<form>

<center><h5 class="light center">Cadastro de Idiomas </h5></center>
    <div class="input-field col s5">
    <i class="material-icons prefix">account_circle</i>
    <input type="text" name="idioma"  placeholder="IDIOMA"  autofocus required> 
    <label for="idioma">Idioma</label>
    </div>

    <div class="input-field col s3">
    <i class="material-icons prefix">domain</i>
    <select name="nivel" id="nivel" required >
    <option value="" disabled selected >Seleciona o Nível</option>
      <option value="Iniciante">Iniciante</option>
      <option value="Básico">Básico</option>
      <option value="Intermediário">Intermediário</option>
      <option value="Avançado">Avançado</option>
      <option value="Fluente">Fluente</option>
      </select>
        <label for="nivel">Nível do Idioma</label>
    </div>
    </br>
    <center>
<div class="input-field col s12">
<input type="submit" value="cadastrar" class="btn blue">
<input type="reset" value="limpar" class="btn red">
</div>
</center>
</fieldset>
</form>

<br>
      <center>  <h5 class="light">Listagem do Historico Profissional</h5><hr></center>
        <table class="striped">
            <thead>
                <tr>
                    <th>Idiomas</th>
                    <th>Níveis</th>
                    <th>Deletar</th>
 

</tr>
</thead>
<tbody><?php include_once '../leitura/leridiomas.php';?></tbody>
</table>
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


