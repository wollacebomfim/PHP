<?php
  session_start();
  
?>


<html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
   

    <nav class="brown">
<div class="nav-wrapper container">
<div class="brand-logo light" height="center" width="center">Sistema de Internos QCA</div>
<ul class="right">


</ul>
</div>
</nav>
</div>
</nav>

<div class="row container">
 

<fieldset class="formulario">

<h5 class="light left">Lista de Sistemas</h5>



<br><br><br><br>

    
    <a class="waves-effect red btn" href="https://www.sistemas.qca.adv.br/agendamentos/index.php" width="300px"><i class="material-icons left">access_time</i>Agendamentos de Sala</a>
    <a class="waves-effect grey btn" href="https://www.sistemas.qca.adv.br/padi/login.php"><i class="material-icons left">assignment_ind</i>PADI</a>
    <a class="waves-effect blue btn" href="https://www.sistemas.qca.adv.br/relatorios/login.php"><i class="material-icons left">assignment</i>Relatórios</a>
   
    
    <br><br><br><br><br><br><br><br>
    
<center>


</fieldset>
</form>
</div>
</center>
<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
  $('.dropdown-trigger').dropdown();
  </script>
  <script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>

</body>
</html>

