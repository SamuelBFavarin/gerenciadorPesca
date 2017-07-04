<?php
	//CHAMA A CONEXÃO E RECEBE $conexão
	require_once "conexao.php";

	//RECEBE OS DADOS VIAGEM
	$cont = $_POST['cont'];
	$inputs = json_decode($_POST['inputsJson']);
	$selects = json_decode($_POST['selectsJson']);
	
	//QUERY PARA INSERIR DADOS 	DA VIAGEM
	$queryViagem = "INSERT INTO porto (nome,administracao,ano) VALUES('teste','pr',2006);";
	
	$queryLance = "INSERT INTO lance (hora_inicio, hora_fim, comprimento_rede, area_total_rede, tamanho_malha, profundidade, latitude, longitude, viagem_id) values (TIMESTAMP '2017-07-03 15:59:00',TIMESTAMP '2017-07-03 16:40:00',1,1,1,1,1,1,3);";

	$queryCaptura = "INSERT INTO captura_especie (peso, especie_id, lance_id) VALUES (50,48,2);"

	
	//ENVIAR QUERY AO BANCO: $conexao 
	/*pg_query($conexao,$queryViagem);
	pg_query($conexao,$queryLance);
	pg_query($conexao,$queryCaptura);*/

	echo $cont;
	echo "<h1>AQUI</h1>";

	