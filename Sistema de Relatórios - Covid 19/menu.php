<?php
  session_start();
  require_once './conexao/conexao.php';
  include_once "./incluir/seguranca.php";
  include_once "./incluir/lerusuario.php";
?>
    <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
<?php include_once "./incluir/topo.php"; ?>
<center><h5>Bem vindo, <?php echo $dados['nome'];?>.</h5></center>
<?php include_once "./incluir/background.php"; ?>
</body>
<?php include_once "./incluir/rodape.php"; ?>
</html>