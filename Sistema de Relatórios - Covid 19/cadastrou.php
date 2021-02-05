<?php
session_start();

?>
        <html>
        <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        </head>

<body>
<form action="./funcao/cadastrarusuario.php" method="POST">
<center>
<?php include_once "./incluir/background2.php"; ?>
<div class="row">
<div class="col s12 m4 offset-m4">
<div class="card">
<div class="card-action white lighten-1 black-text">

<h3>
        <?php if(isset($_SESSION['status_cadastro'])): ?>
        <div class="notification is-sucess">
        <center><h3 class='center green-text'>Cadastro efetuado</h3></center>
        </div>
        <?php endif; unset($_SESSION['status_cadastro']); ?>
        
        </h3>
</div>
<div class="card-content">
<div class="form-field">
    
        
        </div><br>

    
                    
<br>                                
<center>
<a href="login.php"class="btn-large brown">Ir ao login</button></a>
</center>
</div>
</div>
</div>
</div>
</div>
</form>
</body>
</html>