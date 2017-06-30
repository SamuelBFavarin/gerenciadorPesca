<?php
	//CHAMA A CONEXÃO E RECEBE $conexão
	require_once "conexao.php";

	//RECEBE ID DA LINHA PARA
	$id = $_POST['id'];
	
	//SQL PARA DELETAR FOTOS E ESPECIE
	//Obs, as imagens ainda devem ficar no servidor, por
	$sql1 = "DELETE FROM fotografia WHERE (especie_id = ".$id.")";
	$sel2 = "DELETE FROM especie WHERE (id = ".$id.")";
	
	//ENVIAR QUERY AO BANCO: $conexao 
	pg_query($conexao,$sql1);
	pg_query($conexao,$sql2);

	//RETORNA A PÁGINA ANTERIOR
	echo "<script>
			location.href='../especie.php';
		 </script>"; 

	//MORRE	 
	die();

?>