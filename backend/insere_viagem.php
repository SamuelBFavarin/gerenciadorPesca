<?php
	//CHAMA A CONEXÃO E RECEBE $conexão
	require_once "conexao.php";

	//RECEBE OS DADOS VIAGEM
	$cont = $_POST['cont'];
	$inputs = json_decode($_POST['inputsJson']);
	$selects = json_decode($_POST['selectsJson']);
	
	//QUERY PARA INSERIR DADOS
	$query = "INSERT INTO porto (nome,administracao,ano) VALUES('teste','pr',2006);";
	
	//ENVIAR QUERY AO BANCO: $conexao 
	pg_query($conexao,$query);


	echo $cont;
	echo "<h1>AQUI</h1>";

	