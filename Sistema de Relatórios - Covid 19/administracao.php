<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
</head>
</div> 
<?php include_once "./incluir/background2.php"; ?>
<body>
<form action="logandoadm.php" method="POST">
<div class="row">
<div class="col s12 m4 offset-m4">
<div class="card">
<div class="card-action white lighten-1 black-text">
<p>Administração</p>
<div>
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
<input name="senha"  type="password"  placeholder="INSIRA SEU CPF" required>
</div><br>
<center>
<button type="submit" class="btn-large brown">Entrar</button>
<a href="cadastro.php"class="btn-large blue"> Cadastre-se</button></a></br>
</br>
<a href="administracao.php"class="btn-large red"> Administrador</button></a>
</center>
<br>
</div>
</div>
</form>
</center>
</body>
</html>


