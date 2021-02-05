<?php
include_once './includes/head.php';
include_once './read/lerinfo.php';
include_once './includes/informacoes.php';

?>
<html>
<body><br>
<div class="row container">
<center><img src="./img/qca.jpg" alt="qca" width="400px" height="300px"></center>
<form action="cadastrar.php" method="POST">
<fieldset class="formulario">
<h3 class="center">Contato do Judiciário</h3>


    <div class="input-field col s2">
    <i class="material-icons prefix">location_on</i>
    <input type="text" name="uf" value="<?php echo $dados['uf'] ;?>" readOnly>
    <label for="uf">Nome da UF</label> 
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">business</i>
    <input type="text" name="comarca" value="<?php echo $dados['comarca'] ;?>" readOnly>
    <label for="uf">Comarca</label> 
    </div>

    <div class="input-field col s3">
    <i class="material-icons prefix">call_split</i>
    <input type="text" name="orgao"  value="<?php echo $dados['norgao'] ;?>" readOnly>
    <label for="uf">Numero do Orgão</label> 
    </div>

    <div class="input-field col s3">
    <i class="material-icons prefix">dehaze</i>
    <input type="text" name="orgao"  value="<?php echo $dados['orgao'] ;?>" readOnly>
    <label for="uf">Orgão</label> 
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">group_add</i>
    <input type="text" name="chefe" value="<?php echo $dados['chefe'] ;?>" readOnly>
    <label for="uf">Nome do Chefe de Secretaria</label> 
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">phone</i>
    <input type="text" name="contatochefe" value="<?php echo $dados['contatochefe'] ;?>" readOnly>
    <label for="uf">Contato do Chefe de Secretaria</label> 
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">email</i>
    <input type="text" name="emailchefe" value="<?php echo $dados['emailchefe'] ;?>" readOnly>
    <label for="uf">E-mail do Chefe de Secretaria</label> 
    </div>

    <div class="input-field col s4">
    <i class="material-icons prefix">group_add</i>
    <input type="text" name="assessor" value="<?php echo $dados['assessor'] ;?>" readOnly>
    <label for="uf">Nome do Assessor</label> 
    </div>

    
    <div class="input-field col s4">
    <i class="material-icons prefix">phone</i>
    <input type="text" name="contatoassessor" value="<?php echo $dados['contatoassessor'] ;?>" readOnly>
    <label for="uf">Contato do Assessor</label> 
    </div>

    
    <div class="input-field col s4">
    <i class="material-icons prefix">email</i>
    <input type="text" name="emailassessor" value="<?php echo $dados['emailassessor'] ;?>" readOnly>
    <label for="uf">Email do Assessor</label> 
    </div>

    


    
        <center>
       <!-- <a href="https://api.whatsapp.com/send/?phone=55<?php echo $dados['contatochefe'] ?>" target="_blank" class="btn-small green">Enviar mensagem WhatsApp Chefe</a> -->
        <a href="mailto:<?php echo $dados['emailchefe'] ?>" target="_blank" class="btn-small red">enviar E-mail Chefe</a></br></br>
      <!--   <a href="https://api.whatsapp.com/send/?phone=55<?php echo $dados['contatoassessor'] ?>" target="_blank" class="btn-small green">Enviar mensagem WhatsApp Assessor</a> -->
        <a href="mailto:<?php echo $dados['emailassessor'] ?>" target="_blank" class="btn-small red">enviar E-mail Assessor</a></br></br>
        </center>
        <center><a href="consulta.php" class="btn-small brown">Voltar</a></center> 

    
    
    
    
    
 </fieldset><br> 
 </div>
 <br><br><br><br><br><br><?php include_once './includes/rodape.php' ;?>
</body>
</html>