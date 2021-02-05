<?php
include_once './includes/head.php';
include_once './includes/informacoes.php';
?>
<html>
<body><br>
<center>
<div class="row container">
<center><img src="./img/qca.jpg" alt="qca" width="400px" height="300px"></center>
<h5 class="center">Consulte aqui as informações do Judiciário.</h5><br>
<fieldset class="formulario" style="width: 25%">





<select name="select" onChange="getStates(this);">
<option value="" disbled selected>Selecione a UF</option>
<?php include_once './read/lerestados.php'; ?>
</select>

</fieldset></div>
</center>

 


 <script>
  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>
<Script Language="JavaScript">
function getStates(what) {
   if (what.selectedIndex != '') {
      var estado = what.value;
      document.location=('complemento.php?id=' + estado);
   }
}
</Script>
 </div>
 <br><br><br><br><br><br><br><br><br><?php include_once './includes/rodape.php' ;?>
</body>
</html>