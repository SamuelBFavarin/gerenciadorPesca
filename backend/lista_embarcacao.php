<?php
	//CHAMA A CONEXÃO E RECEBE $conexão
	require_once "conexao.php";
	
	//SQL PARA INSERIR DADOS
	$sql = "SELECT * FROM embarcacao;";
	
	//ENVIAR QUERY AO BANCO: $conexao 
	$query = pg_query($conexao,$sql);
	
	//PERCORRER TODAS AS LINHAS DA TABELA
	for($i=0; $i<pg_num_rows($query); $i++){

		//PEGA O CONTEUDO DE CADA COLUNA DA LINHA 
		$arr = pg_fetch_array($query, $i, PGSQL_ASSOC);		

		//JOGA VALORES PARA VARIÁVEIS
		$id = $arr["id"];
		$nome = $arr["nome"];
		$tam = $arr["tamanho"];

		//ESCREVE O HTML COM OS DADOS 
		//Obs.: TAMBÉM CHAMA FUNCAO DE EXCLUIR EMBARCACAO.
		echo '<div class="panel panel-default" style="margin-top: 60px;">
               <div class="panel-body">
                    <div class="col-md-6">
                       <h5>Nome: '.$nome.'</h5>
                       <h5>Tamanho (m³): '.$tam.'</h5>
                    </div>
                    <form action="backend/exclui_embarcacao.php" method="post">
                    	<input type="hidden" name="id" value="'.$id.'">
                    	<input type="submit" class="btn btn-danger" value="Excluir" name="btnExcluir" style="float: right; margin-top: 20px;">
                    </form>
               </div>
            </div>';
    }
?>