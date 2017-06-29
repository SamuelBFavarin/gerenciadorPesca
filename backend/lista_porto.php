<?php
	//CHAMA A CONEXÃO E RECEBE $conexão
	require_once "conexao.php";
	
	//SQL PARA INSERIR DADOS
	$sql = "SELECT * FROM porto;";
	
	//ENVIAR QUERY AO BANCO: $conexao 
	$query = pg_query($conexao,$sql);
	
	//PERCORRER TODAS AS LINHAS DA TABELA
	for($i=0; $i<pg_num_rows($query); $i++){

		//PEGA O CONTEUDO DE CADA COLUNA DA LINHA 
		$arr = pg_fetch_array($query, $i, PGSQL_ASSOC);		

		//JOGA VALORES PARA VARIÁVEIS
		$id = $arr["id"];
		$nome = $arr["nome"];
		$ano = $arr["ano"];
		$adm;
		if($arr["administracao"] === "pr") $adm = "Privado";
		else if ($arr["administracao"] === "pu") $adm = "Público";

		//ESCREVE O HTML COM OS DADOS 
		//Obs.: TAMBÉM CHAMA FUNCAO DE EXCLUIR PORTO.
		echo 
		   '<div class="panel panel-default" style="margin-top: 60px;">
	            <div class="panel-body">
                    <div class="col-md-6">
                       <h5>Nome: '.$nome.' </h5>
                       <h5>Administracao: '.$adm.'</h5>
                       <h5>Ano fundação:'.$ano.'</h5>
                    </div>
                    <div class="col-md-6"> 
                    	<form action="backend/exclui_porto.php" method="post">
                    		<input type="hidden" name="id" value="'.$id.'">
                        	<input type="submit" name="btnExclui" value ="Deletar" class="btn btn-danger" style="float: right; margin-top: 20px;">
                        </form>
                    </div>
               </div>
            </div>';				
    }


?>