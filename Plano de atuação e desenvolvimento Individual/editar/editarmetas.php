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
<form action="../processar/upmetas.php" method="POST" >
<fieldset class="formulario">
<form>
<h5 class="light center">Editando suas metas</h5>

<div class="input-field col s3">
<i class="material-icons prefix">group</i>
<input type="text" name="nome" value="<?php echo $nome ?>" placeholder="NOME PARA META"  autofocus>
<label for="nome">Nome para meta</label>
</div>

<div class="input-field col s5">
    <i class="material-icons prefix">playlist_add</i>
    <select name="tipo" id="tipo">
    <option value="<?php echo $tipo ?>"><?php echo $tipo ?></option>
      <option value="Metas de Engajamento / Relacionamento">Metas de Engajamento / Relacionamento</option>
      <option value="Metas Profissionais (negócios/atuação próprios)">Metas Profissionais (negócios/atuação próprios)</option>
      <option value="Meta Pessoais">Meta Pessoais</option>
      </select>
    <label for="tipo">Selecione a meta</label>
    </div>


    <div class="input-field col s3">
    <input type="text" name="ano" value="<?php echo $ano ?>" placeholder="ANO DA META" maxlength="4" size="4"  autofocus>
    <label for="ano">Ano da meta</label>
    </div>


        <div class="input-field col s12">
        <i class="material-icons prefix">textsms</i>
        <textarea name="meta" id="meta"  class="materialize-textarea"><?php echo $meta ?></textarea>
        <label for="meta">Escreva sua meta</label>
        </div>


<center>
<div class="input-field col s12">
<input type="submit"  value="atualizar metas"  class="btn blue">
</div>
</center>
</fieldset>
</form>
</div>
<br>
<script type="text/javascript" src="../js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
<?php include_once "../incluir/rodape.php"; ?>
</html>


