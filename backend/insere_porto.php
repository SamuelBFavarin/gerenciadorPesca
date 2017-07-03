<?php
	//CHAMA A CONEXÃO E RECEBE $conexão
	require_once "conexao.php";

	//RECEBE OS DADOS VIA POST
	$nome = $_POST['nome'];
	$adm = $_POST['adm'];
	$ano = intval($_POST['ano']);

	//VALIDAÇÃO
	if(empty($nome) or empty($adm) or empty($ano) or !is_numeric($ano) or ($ano < 0) or ($ano > 9999)){
		echo '<script>		
				location.href="../porto.php";		
		 		alert("Preenchimento indevido de fomulário :(");
		 	</script>';
		die();
	}

	
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