<?php
	require_once "conexao.php";

	//VARIAVEIS PARA TABELA especie
	$nome = $_POST['nome'];
	$prMax = $_POST['prMax'];
	$prMin = $_POST['prMin'];

	//VALIDAÇÃO INPUT VAZIO NUMÉRIOCO
	if(empty($nome) or empty($prMax) or empty($prMin) or (!is_numeric($prMax)) or (!is_numeric($prMin)) or ($prMax < 0) or ($prMin < 0) or ($prMin > $prMax)){
		echo '<script>		
				location.href="../especie.php";		
		 		alert("Preenchimento indevido de fomulário :(");
		 	</script>';
		die();
	}


	$SQL_ESPECIE = "INSERT INTO especie (nome, profundidade_max, profundidade_min) VALUES ('".$nome."',".$prMax.",".$prMin.") RETURNING id";
	
	$query = pg_query($conexao,$SQL_ESPECIE);
	//PEGANDO VALOR DO ID DA ÚLTIMA LINHA
	$row = pg_fetch_row($query);
	$id =  $row[0];
	
	//INCLUI IMAGENS NO SERVIDOR
	//DEFINE VARIÁVEL DE ERRO, E AS EXTENSÕES PERMITIDAS
    $error=array();
    $extension=array("jpeg","jpg","png","gif");

    //PERCORRE TODOS ARQUIVOS ENVIADOS
    foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
	    $file_name=$_FILES["files"]["name"][$key];
	    $file_tmp=$_FILES["files"]["tmp_name"][$key];
	    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
	    if(in_array($ext,$extension))
	    {
	    	//FAZ O UPLOAD CASO NÃO TENHA NENHUM ARQUIVO COM MESMO NOME
	        if(!file_exists("localhost/gerenciadorPesca/assets/upload/".$file_name))
	        {
	        	//DIRETÓRIO
	        	$dir = "localhost/gerenciadorPesca/assets/upload/".$file_name;
	            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],$dir);
	        }
	        //FAZ O UPLOAD CASO TENHA OUTRO ARQUIVO COM MESMO NOME
	        //SOLUÇÃO ACRECENTAR O NOME COM O HORÁRIO ATUAL
	        else
	        {
	            $filename=basename($file_name,$ext);
	            $newFileName=$filename.time().$ext;
	            //DIRETÓRIO
	            $dir = "localhost/gerenciadorPesca/assets/upload/".$newFileName;
	            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],$dir);      
	        }

				//QUERY PARA INSERIR DIRETÓRIO DA FOTO NO BANCO DE DADOS
	        $SQL_FOTO = "INSERT INTO fotografia (especie_id,dir) VALUES (".$id.",'".$dir."')";
	        $query = pg_query($conexao,$SQL_FOTO);
	    }
	    else
	    {
	    	//VALIDAÇÃO FORMATO NO PHP
	        array_push($error,"$file_name, ");
	        $SQL_ERROR_FOTO = "DELETE FROM especie WHERE (id = ".$id.")";
	        pg_query($conexao,$SQL_ERROR_FOTO);
	        echo 
				'<script>					
					alert("Erro no envio da foto");
					location.href="../especie.php";	
			 	</script>'
			;
			die();
	    }
    }

    //QUERY PARA INSERIR DADOS PARA especie 
	//Obs.: Restorna id para ser utilizado depois



	//RETORNA A PÁGINA ANTERIOR
	echo "<script>
			location.href='../especie.php';
		 </script>"; 

?>