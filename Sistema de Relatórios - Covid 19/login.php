<?php
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
</head>
<?php include_once "./incluir/background2.php"; ?>
<body>
    
  

    
   
    
<form action="./funcao/logando.php" method="POST">
    
 
<div class="row"> <!-- 1 -->
<div class="col s12 m4 offset-m4"> <!-- 2 -->
<div class="card"> <!-- 3-->
<div class="card-action white lighten-1 black-text"> <!-- 4 -->
<div>

<?php if(isset($_SESSION['nao_autenticado'])): ?>
<div class="notification is-danger">
<center><p class='center red-text'> Usuário ou senha inválidos</p></center>
</div>
<?php endif; unset($_SESSION['nao_autenticado']); ?>
<center>


<div class="card-content"> <!-- 5 -->
    
<div class="form-field">
<label for="usuario">E-mail</label>
<input name="usuario" type="email"   placeholder="INSIRA SEU E-MAIL"  autofocus required>
</div><br>

<div class="form-field">
<label for="senha">Senha (somente numeros)</label>
<input name="senha"  type="password"   minlength="11" maxlength="11" size="11" placeholder="INSIRA SUA SENHA" required onkeypress="return onlynumber();" required > 
</div><br>

<center>
<button type="submit" class="btn-large brown" autofocus>Entrar</button>
</br>
</br>
<a href="administracao.php"class="btn-large red"> Administrador</button></a>
</center>
<br>
</div><!-- 5 -->
</div><!-- 4 -->
</div><!-- 3 -->
</div><!-- 2 -->
</div><!-- 1 -->
</form>
</center>



<div id="modal" class="modal">
<div class="modal-content">
<h4><b>Sejam bem-vindo(a)</b></h4><hr>
<p>Esta plataforma desenvolvida por Queiroz Cavalcanti Advocacia. Nela, preenchendo alguns dados básicos, será possível ter acesso a um relatório preliminar sobre o cabimento (ou não) da revisão ou rescisão de contratos em razão da pandemia da Covid-19, de acordo com o posicionamento histórico do STJ e das recentes decisões proferidas pelos Tribunais de Justiça sobre o tema. Faça seu cadastro, preencha e receba o relatório em tempo real.</p>
<br><br
</div>
<center>
<a class="close btn-large red"  data-dismiss="modal"> Já tenho cadastro</a>
&nbsp;&nbsp;&nbsp;
Ou
&nbsp;&nbsp;&nbsp;
<a href="cadastro.php" class="btn-large blue">Cadastre-se</a>
<br>
</center>
</div>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('#modal');
    var instances = M.Modal.init(elems, options);
  });
$(document).ready(function(){
$('#modal').modal('show');
});
</script>
  
  
<script type="text/javascript">
function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   //var regex = /^[0-9.,]+$/;
   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}
</script>


</body>
</html>


