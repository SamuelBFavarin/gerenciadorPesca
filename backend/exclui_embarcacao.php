<?php
	//CHAMA A CONEXÃO E RECEBE $conexão
	require_once "conexao.php";

	//RECEBE ID DA LINHA PARA
	$id = $_POST['id'];
	
	//SQL PARA DELETAR DADOS
	$sql = "DELETE FROM embarcacao WHERE (id = ".$id.")";
	
	//ENVIAR QUERY AO BANCO: $conexao 
	$query = pg_query($conexao,$sql);

	//RETORNA A PÁGINA ANTERIOR
	echo "<script>
			location.href='../embarcacao.php';
		 </script>"; 

	//MORRE	 
	die();
?>