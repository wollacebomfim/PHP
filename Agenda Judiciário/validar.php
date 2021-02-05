<?php 
      include_once './includes/head.php';
      include_once './conexao/conexao.php';
      include_once './includes/cabecalho.php';
      include_once './read/getinfo.php';
     
?>
  <html>
    <body>
    <form action="./insert/cadastrar.php" method="POST">
    <center>
    <img src="./img/qca.jpg" alt="qca" width="400px" height="300px">
    </center>


    
    <div class="row container">
    <fieldset class="formulario">
    <center><h5>Preencha as Informações do Jurídico</h5></center>


    <div class="input-field col s2">
    <i class="material-icons prefix">verified_user</i>
    <input type="text" name="id_estado" value=" <?php echo $id_estado ;?>" readOnly>
    <label for="uf">idUF</label> 
    </div>


    <div class="input-field col s4">
    <i class="material-icons prefix">location_on</i>
    <input type="text" name="uf" value=" <?php echo $uf ;?>" readOnly>
    <label for="uf">UF</label> 
    </div>

    <div class="input-field col s2">
    <i class="material-icons prefix">verified_user</i>
    <input type="text" name="id_cidade" value=" <?php echo $id_cidade ;?>" readOnly>
    <label for="uf">idComarca</label> 
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">location_on</i>
    <input type="text" name="comarca" value=" <?php echo $comarca ;?>" readOnly>
    <label for="comarca">Comarca</label> 
    </div>



    <div class="input-field col s6">
    <i class="material-icons prefix">compare</i>
    <select name="orgao" required>
    <option value="<?php echo $orgao ;?>"  selected><?php echo $orgao ;?></option>
    <?php include_once './read/lerorgao.php'; ?>
    </select>
    <label>Órgão</label>
    </div>

    <div class="input-field col s6">
    <i class="material-icons prefix">call_split</i>
    <select name="norgao" required>
    <option value="<?php echo $norgao ;?>" selected><?php echo $norgao ;?></option>
    <?php include_once './read/lernorgao.php';?>
    </select>
    <label>Numero do Órgão</label>
    </div>
    
   
    <div class="input-field col s4">
    <i class="material-icons prefix">group_add</i>
    <input type="text" name="assessor" oninput="this.value = this.value.toUpperCase()" value=" <?php echo $assessor ;?>">
    <label for="assessor">Nome do Assessor</label> 
    </div>

    
    <div class="input-field col s4">
    <i class="material-icons prefix">phone</i>
    <input type="text" name="contatoassessor" placeholder="Exemplo 11.9xxxx.xxxx"  onkeypress="return onlynumber();"  value=" <?php echo $contatoassessor ;?>">
    <label for="contatoassessor">Contato do Assessor</label> 
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">email</i>
    <input type="email" name="emailassessor" placeholder="exemplo@exemplo.com.br" value=" <?php echo $emailassessor;?>">
    <label for="emailassessor">Email do Assessor</label> 
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">group_add</i>
    <input type="text" name="chefe" oninput="this.value = this.value.toUpperCase()"  value=" <?php echo $chefe ;?>">
    <label for="chefe">Nome do Chefe de Secretaria</label> 
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">phone</i>
    <input type="text" name="contatochefe" placeholder="Exemplo 21.9xxxx.xxxx"   onkeypress="return onlynumber();" value=" <?php echo $contatochefe;?>">
    <label for="contatochefe">Contato do Chefe de Secretaria</label> 
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">email</i>
    <input type="email" name="emailchefe" placeholder="exemplo@exemplo.com.br" value=" <?php echo $emailchefe ;?>">
    <label for="emailchefe">E-mail do Chefe de Secretaria</label> 
    </div>
    
    
    <div class="input-field col s1">
    <input type="hidden" name="id" value=" <?php echo $id;?>" readOnly>
    </div>
    



    </fieldset>
    </div>
  
    <center>
        <a class="waves-effect red btn-small" href="../dashboard.php"><i class="material-icons left">chevron_left</i>Voltar</a>
    <button class="btn-small waves-effect waves-light" type="submit" name="action">Solicitar<i class="material-icons left">chevron_right</i></button>

    
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