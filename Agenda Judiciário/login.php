<?php 
session_start();
include_once './includes/head.php';
?>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
</head>



<body>
<form action="./process/logando.php" method="POST">
<div class="row">
<div class="col s12 m4 offset-m4">
<div class="card">
<div class="card-action white lighten-1 black-text">
<center><h3> Validações Jurdiciário </h3></center>
</div>

<?php if(isset($_SESSION['nao_autenticado'])): ?>
<div class="notification is-danger">
<center><p class='center red-text'> Usuário ou senha inválidos</p></center>
</div>
<?php endif; unset($_SESSION['nao_autenticado']); ?>
<center>


<div class="card-content">
<div class="form-field">
<label for="usuario">Usuário</label>
<input name="usuario" type="text"   placeholder="INSIRA SEU USUÁRIO" autofocus required>
</div><br>


<div class="form-field">
<label for="senha">CPF</label>
<input name="senha" type="password"   placeholder="INSIRA SUA SENHA" required>
</div><br>


<center><button type="submit" class="btn brown">Entrar</button></center>
<br>

</div>
</div>
</form>

</center>

<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>


