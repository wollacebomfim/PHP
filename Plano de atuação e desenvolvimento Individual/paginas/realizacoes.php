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
    <form action="../processar/cadrealizacoes.php" method="POST" >
    <?php 
if(isset($_SESSION['msg'])):
    echo $_SESSION['msg'];
    session_unset();
endif;
?>



<fieldset class="formulario">
<form>
<center><h5 class="light center">Cadastrar Realizações Pessoais / Profissionais  </h5></center>


<div class="input-field col s3">
    <i class="material-icons prefix">recent_actors</i>
    <input type="text" name="nome"  placeholder="NOME DA REALIZAÇÃO"  autofocus>
    <label for="nome">Nome da Realização</label>
    </div>
    


    <div class="input-field col s3">
    <i class="material-icons prefix">today</i>
    <input type="text" name="ano"  placeholder="ANO DA REALIZAÇÃO"  autofocus>
    <label for="ano">Ano da Realização</label>
    </div>
    


        <div class="input-field col s12">
        <i class="material-icons prefix">textsms</i>
        <textarea name="texto" id="texto" class="materialize-textarea"></textarea>
        <label for="texto">Detalhe suas relizações</label>
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

      <center>  <h5 class="light">Listagem de Realizações Profissionais</h5><hr></center>

  
        <table class="striped">
            <thead>
                <tr>
                
                 
                    <th>Nome</th>
                    <th>Ano</th>
                    <th>Visualizar</th>
                    <th>Editar</th>
                    <th>Deletar</th>
 

</tr>
</thead>
<tbody>
    <?php 
    include_once '../leitura/lerrealizacoes.php';
    ?>
    </tbody>
</table>
</div>




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


