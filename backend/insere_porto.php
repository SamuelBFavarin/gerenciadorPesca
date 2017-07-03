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

	// Trying to prevent SQL-Injection (**updated**)
	/*$sql_query = 'SELECT * FROM user WHERE login=$1 and password=md5($2);';
	$result = pg_query_params($dbconn_login, $sql_query, array($_POST["user"], $_POST["password"]));
	if (pg_num_rows($result) < 1) {
  	die('failure');
	}*/
	//QUERY PARA INSERIR DADOS
	/*$query = "INSERT INTO porto (nome,administracao,ano) VALUES(?, ?, ?);";
	//TRANDO SQL INJECTION
	$result = pg_query_params($conexao, $squery, array($nome, $adm, $ano));
		if (pg_num_rows($result) < 1) {
  	die('failure');
	}
	
	//ENVIAR QUERY AO BANCO: $conexao 
	pg_query($conexao,$query);

	//RETORNA A PÁGINA ANTERIOR
	echo "<script>
			location.href='../porto.php';
		 </script>"; 

	//MORRE	 
	die();*/


	$stmt = $conexao->prepare("INSERT INTO porto (nome,administracao,ano) VALUES(?, ?, ?);");
	$rs = pg_query_params($conn, $sql, $a_bind_params);
	if($rs === false) {
	  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . pg_last_error(), E_USER_ERROR);
	} else {
	  $a_data = pg_fetch_all($rs);
	}

	$sql = "INSERT INTO porto (nome,administracao,ano) VALUES($1, $2, $3)";
	$rs = pg_query_params($conn, $sql, $a_bind_params);
	if($rs === false) {
	  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . pg_last_error(), E_USER_ERROR);
	} else {
	  $a_data = pg_fetch_all($rs);
	}
	

	$conexao->close();