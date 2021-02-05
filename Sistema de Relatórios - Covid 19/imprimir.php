<?php 
 session_start();
 require_once './conexao/conexao.php';
 include_once "./incluir/seguranca.php";
?>
    <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection,print"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
<?php include_once "./incluir/leituraimpressao.php"; ?>
<div class="row container">
<fieldset class="formulario">
<form>
<?php include_once "./incluir/impressaoform.php"; ?>
</form>
</fieldset>
</div>
</body>
<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
window.onload = function() { window.print(); }

</script>
</html>