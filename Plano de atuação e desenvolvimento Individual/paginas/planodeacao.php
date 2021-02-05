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
    <form action="../processar/cadplano.php" method="POST" >


    <?php 
if(isset($_SESSION['msg'])):
    echo $_SESSION['msg'];
    session_unset();
endif;
?>
<h5 class="light center">Cadastramento de Plano de Ação</h5>
<fieldset class="formulario">
<form>
<br>

<div class="input-field col s8">
    <i class="material-icons prefix">gavel</i>
    <select name="tipo" id="tipo">
    <option value="" disabled selected>Tipo</option>
      <option value="Atuação">Atuação</option>
      <option value="Desenvolvimento">Desenvolvimento</option>
      <option value="Conhecimento Técnico">Conhecimento Técnico</option>
      </select>
    <label for="tipo">Selecione o tipo</label>
    </div>


    <div class="input-field col s8">
    <i class="material-icons prefix">playlist_add</i>
    <select name="meta" id="meta">
    <option value="" disabled selected>Qual a meta ?</option>
    <?php

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM metas WHERE id_usuario = '$id'";
$resultado = mysqli_query($conexao, $sql);
while($dados = mysqli_fetch_array($resultado)){

  echo   "<option value=\"".$dados["nome"]."\">".$dados["nome"]."</option>";
}

?>
    </select>
    <label for="meta">Selecione a meta</label>
    </div>



    <div class="input-field col s8">
    <i class="material-icons prefix">priority_high</i>
    <input type="text" name="nome"  placeholder="RESUMO DA AÇÃO" maxLength="35"  required >
    <label for="nome">Resumo da Ação</label>
    </div>

    <div class="input-field col s5">
    <i class="material-icons prefix">check</i>
    <input type="date" name="previsto" >
    <label for="previsto">Previsão</label>
    </div>
    
        <div class="input-field col s12">
        <i class="material-icons prefix">textsms</i>
        <textarea name="acao" id="acao" class="materialize-textarea"></textarea>
        <label for="acao">Detalhe a ação</label>
        </div>


<center>
<div class="input-field col s12">
<input type="submit" value="cadastrar" class="btn blue">
<input type="reset" value="limpar" class="btn red">
</div>
</center> 
</fieldset>
</div>
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


