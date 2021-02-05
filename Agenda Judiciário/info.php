<?php
include_once './includes/head.php';
include_once './includes/informacoes.php';
?>
<body><br>
<div class="row container">
<fieldset><br>

<center><img src="./img/qca.jpg" alt="qca" width="400px" height="300px"></center>
<center><h5 class="light">Contatos do Judiciário</h5><hr><br></center>
<table class="striped responsive-table">
    <thead>
        <tr>
        
            
         
            <th>UF</th>
            <th>Comarca</th>
            <th>Órgão</th>
            <th>Numero do Órgão</th>
            <th>Ver contato</th>
        </tr>
    </thead>


<tbody><?php include_once './read/informacoes.php';?></tbody>
</table>
</fieldset></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include_once './includes/rodape.php'; ?>
</body>
</html>

