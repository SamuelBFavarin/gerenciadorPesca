<?php
	//CHAMA A CONEXÃO E RECEBE $conexão
	require_once "conexao.php";

	//RECEBE OS DADOS VIA POST
	$nome = $_POST['nome'];
	$tam = $_POST['tam'];



	//VALIDAÇÃO INPUT VAZIO NUMÉRIOCO
	if(empty($nome) or empty($tam) or !is_numeric($tam) or $tam < 0){
		echo 
			'<script>
				location.href="../embarcacao.php";
				alert("Preenchimento indevido de fomulário");
		 	</script>'
		;

		die();
	}

	//QUERY PARA INSERIR DADOS
	$query = "INSERT INTO embarcacao (nome,tamanho) VALUES('".$nome."',".$tam.");";
	
	//ENVIAR QUERY AO BANCO: $conexao 
	pg_query($conexao,$query);
	
	//RETORNA A PÁGINA ANTERIOR
	echo "<script>
			location.href='../embarcacao.php';
		 </script>"; 

		 
