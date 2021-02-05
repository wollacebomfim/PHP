<?php 
include_once './conexao/conexao.php';
    
    
    
    
    
    $querySelect = $conexao->query("SELECT * FROM validacao WHERE id ORDER BY id ASC");
    while($registros = $querySelect->fetch_assoc()):
        


        $id = $registros['id'];
        $id_estado = $registros['id_estado'];
        $id_cidade = $registros['id_cidade'];
        $uf = $registros['uf'];
        $comarca = $registros['comarca'];
        $orgao = $registros['orgao'];
        $norgao = $registros['norgao'];
        $assessor = $registros['assessor'];
        $contatoassessor = $registros['contatoassessor'];
        $emailassessor = $registros['emailassessor'];
        $chefe = $registros['chefe'];
        $contatochefe = $registros['contatochefe'];
        $emailchefe = $registros['emailchefe'];
        

        

//Começa a linha
echo "<tr>";
echo "<form action='./insert/cadastrar.php' method='POST'>
    <td><input type='text' name='id' 			value='$id' 	style=''	readOnly></td> 
    <td><input type='text' name='id_estado' 		value='$id_estado' 	readOnly></td> 
    <td><input type='text' name='id_cidade' 		value='$id_cidade' 	readOnly></td>
    <td><input type='text' name='uf' 			value='$uf' 		readOnly></td>
    <td><input type='text' name='comarca' 		value='$comarca' 	readOnly></td>
    <td><input type='text' name='orgao' 		value='$orgao' 		></th>
    <td><input type='text' name='norgao' 		value='$norgao' 	></th>
    <td><input type='text' name='assessor' 		value='$assessor' 	></td>
    <td><input type='text' name='contatoassessor' 	value='$contatoassessor' ></td>
    <td><input type='text' name='emailassessor' 	value='$emailassessor' 	></td>
    <td><input type='text' name='chefe' 		value='$chefe' 		></td>
    <td><input type='text' name='contatochefe' 		value='$contatochefe' 	></td>
    <td><input type='text' name='emailchefe' 		value='$emailchefe' 	></td>
    
    <!-- <td><button class='btn-small red' type='submit' name='action'>Ok<i class='material-icons left'>done</i>button</a></td> -->
    <td><a href='./validar.php?id=$id'=><i class='material-icons'>search</td>
    <td><a href='./delete/deletar.php?id=$id'=><i class='material-icons'>delete</td>
</form>";
echo "</tr>";
endwhile;
  
?>