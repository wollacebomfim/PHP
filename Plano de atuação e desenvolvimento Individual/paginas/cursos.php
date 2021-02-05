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
    <form action="../processar/cadcurso.php" method="POST" >


    <?php 
if(isset($_SESSION['msg'])):
    echo $_SESSION['msg'];
    session_unset();
endif;
?>

<fieldset class="formulario">
<form>

<center><h5 class="light center">Cadastro de Formação Acadêmica </h5></center>



    <div class="input-field col s3">
    <i class="material-icons prefix">account_circle</i>
    <input type="text" name="nome"  placeholder="NOME DO CURSO"  autofocus>
    <label for="nome">Nome do Curso</label>
    </div>

    <div class="input-field col s3">
    <i class="material-icons prefix">domain</i>
    <input type="text" name="faculdade"   placeholder="INSTITUIÇÃO"  autofocus>
    <label for="faculdade">Instituição</label>
    </div>
    

    <div class="input-field col s3">
    <i class="material-icons prefix">playlist_add</i>
    <select name="tipo" id="tipo">
    <option value="" disabled selected>Selecione o tipo</option>
      <option value="Graduação">Graduação</option>
      <option value="Mestreado">Mestrado</option>
      <option value="Doutorado">Doutorado</option>
      <option value="MBA">MBA</option>
      <option value="Pós-Graduação">Pós Graduação</option>
      <option value="Técnico">Técnico</option>
      <option value="Certificação">Certificação</option>
      <option value="Outros">Outros</option>
      </select>
    <label for="curso">Tipo do curso</label>
    </div>
    
    <div class="input-field col s3">
    <input type="date" name="conclusao"  placeholder="CONCLUSÃO "  autofocus>
    <label for="conclusao">Conclusão</label>
    </div>




    <center>
   
   <input type="submit" value="cadastrar" class="btn blue">
   <input type="reset" value="limpar" class="btn red">
   
 </center>



   
</fieldset>
</form>


<br>

      <center>  <h5 class="light">Listagem de Cursos</h5><hr></center>

  
        <table class="striped">
            <thead>
                <tr>
                
                    
                    <th>Nome </th>
                    <th>Tipo</th>
                    <th>Instituição</th>
                    <th>Conclusão</th>
                    <th>Deletar</th>
 

</tr>
</thead>
<tbody>
    <?php 
    include_once '../leitura/read.php';
    ?>
    </tbody>
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

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>

</body>
<?php include_once "../incluir/rodape.php"; ?>
</html>


