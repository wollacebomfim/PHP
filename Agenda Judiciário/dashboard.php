<?php
include_once './includes/head.php';
include_once './includes/menu.php';
include_once './includes/seguranca.php';
?>
<body>


<center>  <h5 class="light">Solicitações para cadastro na agenda do Judiciário</h5><hr></center>


<table class="striped responsive-table">
    <thead>
        <tr>
        
            <th>id</th>
            <th>idEstado</th>
            <th>idCidade</th>
            <th>UF</th>
            <th>Comarca</th>
            <th>Órgão</th>
            <th>Nº Órgão</th>
            <th>Assessor</th>
            <th>Contato Assessor</th>
            <th>E-mail Assessor</th>
            <th>Chefe</th>
            <th>Contato Chefe</th>
            <th>E-mail Chefe</th>
            <th>Validar</th>
            <th>Deletar</th>


        </tr>
    </td>;

</thead>
<tbody><?php include_once './read/read.php';?></tbody>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include_once './includes/rodape.php'; ?>
</body>
<script type="text/javascript">
    $(document).ready(function(){
    $('select').formSelect();
  });
</script>
</html>

