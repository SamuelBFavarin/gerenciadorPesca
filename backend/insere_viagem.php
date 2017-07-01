<?php
	//CHAMA A CONEXÃO E RECEBE $conexão
	require_once "conexao.php";

	//RECEBE OS DADOS VIAGEM
	$emb_id = $_POST['emb_id'];
	$p_inicio_id = $_POST['p_inicio_id'];
	$p_fim_id = $_POST['p_fim_id'];
	$d_inicio = $_POST['d_inicio'];
	$d_fim = $_POST['d_fim'];

	$arryLista = 

	
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

	/*
	--VIAGEM(barco, portoi, portof, datai, datafim)
		--- LANCE (...)[0]
			---- CAPTURA (...)[0]
			---- CAPTURA (...)[1]
			---- CAPTURA (...)[2]
		--- LANCE (...) [1]
			---- CAPTURA(...) [0]
			---- CAPTURA(...) [1]
		--- LANCE (...)[2]
			---- CAPTURA (...) [0]
	*/