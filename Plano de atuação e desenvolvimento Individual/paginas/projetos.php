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
    <form action="../processar/cadprojetos.php" method="POST" >

<fieldset class="formulario">

<center><h5 class="light center">Cadastro de Projetos</h5></center>
<?php
if(isset($_SESSION['status_cadastro'])):
?>
<div class="notification is-sucess">
<center>
<p class='center green-text'>Cadastro de projeto efetuado!</p>
</center>
</div>
    <?php
endif;
unset($_SESSION['status_cadastro']);

    ?>
<?php
if(isset($_SESSION['usuario_existe'])):
?>
<div class="notification is-info">
    <center>
<p class='center red-text'>Já existe um projeto com esse nome, informe outro.</p>
</center>
</div>
<?php
endif;
unset($_SESSION['usuario_existe']);
?>





<div class="input-field col s3">
<i class="material-icons prefix">group</i>
    <input type="text" name="nome"  placeholder="NOME DO PROJETO"  autofocus>
    <label for="nome">Nome do Projeto</label>
    </div>

    <div class="input-field col s3">
    <input type="text" name="ano"  placeholder="ANO DO PROJETO"  maxlength="4" size="4"  autofocus>
    <label for="ano">Ano do Projeto</label>
    </div>
        <div class="input-field col s12">
        <i class="material-icons prefix">textsms</i>
        <textarea name="projeto" id="projeto"  rows="10" cols="40" class="materialize-textarea"></textarea>
        <label for="projeto">Detalhe seu projeto</label>
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
      <center>  
      <h5 class="light">Listagem de Projetos</h5><hr></center>
        <table class="striped">
            <thead>
                <tr>                  
                    <th>Nome do Projeto</th>
                    <th>Ano</th>
                    <th>Visualizar</th>
                    <th>Alterar</th>
                    <th>Deletar</th>
</tr>
</thead>
<tbody><?php include_once '../leitura/lerprojetos.php'; ?></tbody>
</table>

</div>
<script type="text/javascript" src="../js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
<?php include_once "../incluir/rodape.php"; ?>
</html>


