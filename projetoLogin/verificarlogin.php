<?php
session_start();
// 1º Passo: Pegar dados da tela

$login = $_POST["login"];
$senha = md5($_POST["senha"]);

// 2º Passo: Verificar se existe login e senha

$sql = "select * from usuario where login = '".$login."' and senha = '".$senha."'";

// 3º Passo: Conectar com o banco de dados

$con = mysqli_connect("localhost", "root", "", "loginphp");

// 4º Passo: Executar consulta no banco

$resultado = mysqli_query($con, $sql);

if(mysqli_num_rows($resultado) == 1) {
      $row = mysqli_fetch_array($resultado);

       $_SESSION["nome"] = $row["nome"];
       $_SESSION["perfil"] = $row["perfil"];
       $_SESSION["tempo"] = time();//guarda o momento//exato em que o usuario entra no//sistema


	header("location:painel.php");
} else {
	//echo "Não Encontrei...";
	$msg ="Login/Senha inválidos";
	header("location:index.php?msg=".$msg);
	//redirecionar 
}

?>