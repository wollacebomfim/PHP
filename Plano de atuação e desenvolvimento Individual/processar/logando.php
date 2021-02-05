
 <?php
 require_once '../conexao/conexao.php';
 session_start();

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: /padi/login.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT * FROM usuarios WHERE usuario = '{$usuario}' and senha = md5('{$senha}')";

$resultado = mysqli_query($conexao, $query);

		if(mysqli_num_rows($resultado) == 1){
		
		$dados = mysqli_fetch_array($resultado);
	


		$_SESSION['logado'] = true;
		$_SESSION['id_usuario'] = $dados ['id'];
		$id = $_SESSION['id_usuario'];
		$sql = $conexao->query("UPDATE usuarios SET data_atualizacao = NOW() WHERE id = '$id'");
		mysqli_close($conexao);
		header('Location: /padi/paginas/inicio.php');
		exit();

		} else {
			$_SESSION['nao_autenticado'] = true;
			header('Location: /padi/login.php');
			exit();
		}



