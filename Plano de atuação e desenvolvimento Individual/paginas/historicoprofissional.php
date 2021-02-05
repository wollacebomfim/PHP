
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
    <form action="../processar/cadhistorico.php" method="POST" >


    <?php 
if(isset($_SESSION['msg'])):
    echo $_SESSION['msg'];
    session_unset();
endif;
?>

<fieldset class="formulario">
<form>

<center><h5 class="light center">Cadastro de Historico Profissional </h5></center>



    <div class="input-field col s4">
    <i class="material-icons prefix">domain</i>
    <input type="text" name="empresa"  placeholder="EMPRESA"  autofocus>
    <label for="empresa">Empresa</label>
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">group_add</i>
    <input type="text" name="departamento"   placeholder="ÁREA / DEPARTAMENTO"  autofocus>
    <label for="departamento">Área / Departamento</label>
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">account_circle</i>
    <input type="text" name="funcao"   placeholder="FUNÇÃO"  autofocus>
    <label for="funcao">Função</label>
    </div>
    

    <div class="input-field col s5">
    <i class="material-icons prefix">date_range</i>
    <input type="text" name="data_inicio" maxLength="10" minLength="10" placeholder="INICIO "  autofocus>
    <label for="data_inicio">Inicio formato 00/00/0000</label>
    </div>

    <div class="input-field col s5">
    <i class="material-icons prefix">date_range</i>
    <input type="text" name="data_fim" maxLength="10" minLength="10" placeholder="FIM "  autofocus>
    <label for="data_fim">Fim formato 00/00/0000</label>
    </div>

    <div class="input-field col s12">
    <i class="material-icons prefix">account_circle</i>
    <input type="text" name="atividades"  placeholder="ATIVIDADES"  autofocus>
    <label for="atividades">Atividades</label>
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
<table class="striped">
            <thead>
                <tr> 
                    <th>Empresa</th>
                    <th>Departamento</th>
                    <th>De</th>
                    <th>Até</th>
                    <th>Visulizar</th>
                    <th>Editar</th>
                    <th>Deletar</th>
</tr>
</thead>
<tbody><?php include_once '../leitura/lerhistorico.php';?></tbody>
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


