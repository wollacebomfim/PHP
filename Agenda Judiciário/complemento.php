<?php
include_once './includes/head.php';
include_once './includes/informacoes.php';

?>
<html>
<body>
<div class="row container">
<center><img src="./img/qca.jpg" alt="qca" width="400px" height="300px"></center>
<h5 class="center">Para ver as informações do Judiciário.</h5><br>
<center>

<fieldset class="formulario" style="width: 30%">
<div class="input-field col s12">
<select name="select"  onChange="getStates(this);">
<option value="" disabled selected>Selecione a comarca</option>
<?php include_once './read/getcidades.php'; ?>
</select>
<div>
</fieldset>

</center>
<script>
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>
<Script Language="JavaScript">
function getStates(what) {
   if (what.selectedIndex != '') {
      var id = what.value;
      document.location=('info.php?id=' + id );
   }
}
</Script>
 </div>
 <br><br><br><br><br><br><br><br><br><?php include_once './includes/rodape.php' ;?>
</body>
</html>