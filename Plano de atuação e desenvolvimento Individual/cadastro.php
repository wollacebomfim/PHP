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
<body>
<form action="./processar/cadastrar.php" method="POST">
<center>
<?php include_once "./incluir/background2.php"; ?>
<div class="row">
<div class="col s12 m4 offset-m4">
<div class="card">
<div class="card-action white lighten-1 black-text">

<h3>Cadastro</br> PADI</h3>

</div>

        <?php if(isset($_SESSION['status_cadastro'])): ?>
        <div class="notification is-sucess">
        <center><p class='center green-text'>Cadastro efetuado!</p></center>
        </div>
        <?php endif; unset($_SESSION['status_cadastro']); ?>
      

        <?php if(isset($_SESSION['usuario_existe'])): ?>
        <div class="notification is-info">
        <center><p class='center red-text'>O Email escolhido já existe, informe outro.</p></center>
        </div>
        <?php endif; unset($_SESSION['usuario_existe']); ?>

                           <div class="card-content">
                            <div class="form-field">
                              <label for="nome">Seu nome</label>
                              <input name="nome" type="text"   placeholder="Seu nome" autofocus required>
                            </div><br>
                          
                       
                            <div class="form-field">
                              <label for="usuario">E-mail</label>
                              <input name="usuario" type="email"  placeholder="SEU EMAIL" required>
                            </div><br>
                       
                            <div class="form-field">
                              <label for="senha">CPF (somente numeros)</label>
                              <input name="senha" type="text"  minlength="11" maxlength="11" size="11" placeholder="INSIRA SEU CPF" required onkeypress="return onlynumber();">
                                  </div><br>
                                  
                                 
                            <div class="form-field">
                              <label for="sociogestor">Sócio Gestor</label>
                              <input name="sociogestor"  type="text"  placeholder="SEU GESTOR" required>
                                  </div><br>
                                  
                                
                                 
                             <div class="form-field">
                              <label for="data_nacimento">Data de Nascimento</label>
                              <input name="data_nascimento" class="input is-large" type="date" required>
                                  </div><br>
                              

<br>

<center>
<a href="login.php"class="btn-large red">Voltar ao login</button></a>
<button type="submit" class="btn-large blue">Cadastrar</button>
</center>
<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
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


</div>
</div>
</div>
</div>
</div>
</form>     
</body>
</html>
