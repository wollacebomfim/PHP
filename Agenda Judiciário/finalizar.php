<?php 
      include_once './includes/head.php';
      include_once './conexao/conexao.php';
      include_once './includes/cabecalho.php';
      $id_estado = $_GET['id_estado'];
      $id_cidade = $_GET['id_cidade'];
?>
  <html>
    <body>
    <form action="./insert/solicitar.php" method="POST">
    <center>
    <img src="./img/qca.jpg" alt="qca" width="400px" height="300px">
    </center>


    
    <div class="row container">
    <fieldset class="formulario">
    <center><h5>Cadastre as informações do Judiciário</h5></center>


    <div class="input-field col s2">
    <i class="material-icons prefix">verified_user</i>
    <input type="text" name="id_estado" value=" <?php echo $id_estado ;?> "required readOnly>
    <label for="uf">idUF</label> 
    </div>

    <?php
    $querySelect = $conexao->query("SELECT * FROM estados WHERE id = {$id_estado}");
    while($registros = $querySelect->fetch_assoc()):
    $sigla = $registros['sigla'];
    endwhile;
    ?>

    <div class="input-field col s4">
    <i class="material-icons prefix">location_on</i>
    <input type="text" name="uf" value="<?php echo $sigla?>" required readOnly>
    <label for="uf">UF</label> 
    </div>

    <div class="input-field col s2">
    <i class="material-icons prefix">verified_user</i>
    <input type="text" name="id_cidade" value=" <?php echo $id_cidade ;?> "required readOnly>
    <label for="uf">idComarca</label> 
    </div>

    <?php
    $querySelect = $conexao->query("SELECT * FROM cidades WHERE id = {$id_cidade}");
    while($registros = $querySelect->fetch_assoc()):
    $cidade = $registros['cidade'];
    endwhile;
    ?>

    <div class="input-field col s4">
    <i class="material-icons prefix">location_on</i>
    <input type="text" name="comarca" value="<?php echo $cidade?>" required readOnly>
    <label for="comarca">Comarca</label> 
    </div>



    <div class="input-field col s6">
    <i class="material-icons prefix">compare</i>
    <select name="orgao" required>
    <option value="" disabled selected>Selecione o Órgão</option>
    <?php include_once './read/lerorgao.php'; ?>
    </select>
    <label>Órgão</label>
    </div>

    <div class="input-field col s6">
    <i class="material-icons prefix">call_split</i>
    <select name="norgao" required>
    <option value="" disabled selected>Nº do Órgão</option>
    <?php include_once './read/lernorgao.php'; ?>
    </select>
    <label>Numero do Órgão</label>
    </div>
    
   
    <div class="input-field col s4">
    <i class="material-icons prefix">group_add</i>
    <input type="text" name="assessor" oninput="this.value = this.value.toUpperCase()" >
    <label for="assessor">Nome do Assessor</label> 
    </div>

    
    <div class="input-field col s4">
    <i class="material-icons prefix">phone</i>
    <input type="text" name="contatoassessor" placeholder="Exemplo 119xxxxxxxx"  onkeypress="return onlynumber();"  >
    <label for="contatoassessor">Contato do Assessor</label> 
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">email</i>
    <input type="email" name="emailassessor" placeholder="exemplo@exemplo.com.br" >
    <label for="emailassessor">Email do Assessor</label> 
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">group_add</i>
    <input type="text" name="chefe" oninput="this.value = this.value.toUpperCase()" >
    <label for="chefe">Nome do Chefe de Secretaria</label> 
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">phone</i>
    <input type="text" name="contatochefe" placeholder="Exemplo 219xxxxxxxx"   onkeypress="return onlynumber();" >
    <label for="contatochefe">Contato do Chefe de Secretaria</label> 
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">email</i>
    <input type="email" name="emailchefe" placeholder="exemplo@exemplo.com.br" >
    <label for="emailchefe">E-mail do Chefe de Secretaria</label> 
    </div>



    </fieldset>
    </div>
  
    <center>
    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar<i class="material-icons left">send</i></button>
    <button class="btn waves-effect red" type="reset" name="action">Limpar<i class="material-icons left">delete</i></button>
    </center>


      <!-- Fim do segundo formulario -->

</form>  
<?php include_once './includes/rodape.php'; ?>
</body>


<script type="text/javascript">
    $(document).ready(function(){
    $('select').formSelect();
  });
</script>
<script>
$("#estados") .on("change",function(){
            var idEstado = $("#estados").val();
           $.ajax({
             url: 'lercidades.php',
             type: 'POST',
             data:{id:idEstado},
             success: function(data) 
              {
               //$("#cidades").css("display":"none");
                $("#cidades").html(data);
              }
            });
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

</html>