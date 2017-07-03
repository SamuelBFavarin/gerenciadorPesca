<?php
	//CHAMA A CONEXÃO E RECEBE $conexão
	require_once "conexao.php";
	
	//SQL PARA INSERIR DADOS
	$sql = "SELECT * FROM especie;";
	
	//ENVIAR QUERY AO BANCO: $conexao 
	$query = pg_query($conexao,$sql);
	
	//PERCORRER TODAS AS LINHAS DA TABELA
	for($i=0; $i<pg_num_rows($query); $i++){

		//PEGA O CONTEUDO DE CADA COLUNA DA LINHA 
		$arr = pg_fetch_array($query, $i, PGSQL_ASSOC);		

		//JOGA VALORES PARA VARIÁVEIS
		$id = $arr["id"];
		$nome = $arr["nome"];
		$max = $arr["profundidade_max"];
		$min = $arr["profundidade_min"];

		//QUERY PARA PEGAR AS FOTOS
		$sql_foto = "SELECT * FROM fotografia WHERE (especie_id= ".$id.")";
		$query_foto = pg_query($conexao,$sql_foto);



		//ESCREVE O HTML COM OS DADOS 
		//Obs.: TAMBÉM CHAMA FUNCAO DE EXCLUIR EMBARCACAO.

		echo '<div class="panel panel-default" style="margin-top: 60px;">
               <div class="panel-body">
                    <div class="col-md-6">
                       <h5>Nome:'.$nome.'</h5>
                       <h5>Profundidade máxima:'.$max.' metros </h5>
                       <h5>Profundidade minima: '.$min.' metros</h5>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-danger" style="float: right;"> Excluir</button>
                    </div>
                    <div class="col-md-12">';
                    
                    for($j=0; $j<pg_num_rows($query_foto); $j++){
						$arr2 = pg_fetch_array($query_foto, $j, PGSQL_ASSOC);				
						$dir = $arr2["dir"];						
						echo '<img class="col-md-4 galeria" src="'.$dir.'"/>';
					}

        echo'       </div>
               </div>
            </div>';
		
    }
?>