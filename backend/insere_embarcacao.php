<?php
	//CHAMA A CONEXÃO E RECEBE $conexão
	require_once "conexao.php";

	//RECEBE OS DADOS VIA POST
	$nome = $_POST['nome'];
	$adm = $_POST['adm'];
	$ano = intval($_POST['ano']);

	
	//QUERY PARA INSERIR DADOS
	$query = "INSERT INTO porto (nome,administracao,ano) VALUES('".$nome."','".$adm."',".$ano.");";
	
	//ENVIAR QUERY AO BANCO: $conexao 
	pg_query($conexao,$query);

	//RETORNA A PÁGINA ANTERIOR
	echo "<script>
			location.href='../porto.php';
		 </script>"; 

	//MORRE	 
	die();