<?php
session_start();
require_once '../conexao/conexao.php';
include_once "../incluir/seguranca.php";
include_once "../leitura/filtrarhistorico.php";
?>
<html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <?php  include_once "../incluir/menu.php"; ?>
    <body>


    <br>
    <div class="row container">
    <form action="../processar/uphistorico.php" method="POST" >
<fieldset class="formulario">
<form>

<center><h5 class="light center">Atualizando Cadastro de Historico Profissional </h5></center>



    <div class="input-field col s4">
    <i class="material-icons prefix">domain</i>
    <input type="text" name="empresa" value="<?php echo $empresa ?>" placeholder="EMPRESA"  autofocus>
    <label for="empresa">Empresa</label>
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">group_add</i>
    <input type="text" name="departamento"  value="<?php echo $departamento ?>" placeholder="ÁREA / DEPARTAMENTO"  autofocus>
    <label for="departamento">Área / Departamento</label>
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">account_circle</i>
    <input type="text" name="funcao" value="<?php echo $funcao ?>"  placeholder="FUNÇÃO"  autofocus>
    <label for="funcao">Função</label>
    </div>
    

    <div class="input-field col s5">
    <i class="material-icons prefix">date_range</i>
    <input type="text" name="data_inicio" value="<?php echo $data_inicio ?>" maxLength="10" minLength="10"  placeholder="INICIO "  autofocus>
    <label for="data_inicio">Inicio</label>
    </div>

    <div class="input-field col s5">
    <i class="material-icons prefix">date_range</i>
    <input type="text" name="data_fim" value="<?php echo $data_fim ?>" maxLength="10" minLength="10" placeholder="FIM "  autofocus>
    <label for="data_fim">Fim</label>
    </div>

    <div class="input-field col s12">
    <i class="material-icons prefix">account_circle</i>
    <input type="text" name="atividades" value="<?php echo $atividades ?>" placeholder="ATIVIDADES"  autofocus>
    <label for="atividades">Atividades</label>
    </div>



    <center>
<div class="input-field col s12">
<input type="submit" value="atualizar histórico" class="btn blue">
<a href="../paginas/historicoprofissional.php"><input type="button" value="voltar" class="btn red"></a>
</div>
</center>
</fieldset></form></div> 
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
<?php include_once "../incluir/rodape.php" ;?>
</html>


