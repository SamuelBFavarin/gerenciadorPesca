<?php 
    require_once "backend/conexao.php"; 

?>
<html>
    <head>
        <title>Gerenciador Pesca</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
        <!--================
            Main Menu
        ===================-->
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Gerador Pesca</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="#">Nova viagem</a></li>  
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gerenciar
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="embarcacao.php">Embarcações</a></li>
                      <li><a href="especie.php">Espécies</a></li>
                      <li><a href="porto.php">Porto</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Relatórios
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Resumo de atividade mensal</a></li>
                      <li><a href="#">Resumo de atividade mensal por embarcação</a></li>
                      <li><a href="#">Resumo de atividade por espécie</a></li>
                    </ul>
                </li>
            </ul>
          </div>
        </nav>

        <!--===================
            Formulário Viagem
        =====================-->
        <div class="container">
            <h3>Nova Viagem</h3>
            <form action="enviar.php" method="post">
                <li style="float: right; list-style-type: none; ">
                   <button class="btn btn-success" > Finalizar Cadastro</button>
                </li> 
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                          <label for="embarcacao">Escolha uma embarcação:</label>
                          <select class="form-control" id="embarcacao" name="inicial">
                            <?php 
                                $sql = "SELECT id , nome FROM embarcacao";
                                $query = pg_query($conexao,$sql);
                                for($i=0; $i<pg_num_rows($query); $i++){
                                    $arr = pg_fetch_array($query, $i, PGSQL_ASSOC); 
                                    echo'<option value="'.$arr["id"].'">'.$arr["nome"].'</option>';
                                }?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="portoInicial">Escolha o porto inicial:</label>
                          <select class="form-control" id="portoInicial" name="portInicial">
                            <?php 
                                $sql = "SELECT id , nome FROM porto";
                                $query = pg_query($conexao,$sql);
                                for($i=0; $i<pg_num_rows($query); $i++){
                                    $arr = pg_fetch_array($query, $i, PGSQL_ASSOC); 
                                    echo'<option value="'.$arr["id"].'">'.$arr["nome"].'</option>';
                                }?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="portoFinal">Escolha o porto final:</label>
                          <select class="form-control" id="portoFinal" name="portFinal">
                            <?php 
                                $sql = "SELECT id , nome FROM porto";
                                $query = pg_query($conexao,$sql);
                                for($i=0; $i<pg_num_rows($query); $i++){
                                    $arr = pg_fetch_array($query, $i, PGSQL_ASSOC); 
                                    echo'<option value="'.$arr["id"].'">'.$arr["nome"].'</option>';
                                }?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="dataInicio">Defina a data inicial:</label>
                          <input type="date" class="form-control" id="dataInicio" name="dataInicio">
                        </div>
                        <div class="form-group">
                          <label for="dataFim">Defina a data inicial:</label>
                          <input type="date" class="form-control" id="dataFim" name="dataFim">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ul class="nav nav-tabs" id="lances_adicionados" style="cursor:pointer;">
                        <li> <a data-toggle="tab" style="color: white; background-color: green;" id="addLance"onclick="addLance()"> + Adicionar Lance </a></li>
                        <li class="active"><a data-toggle="tab" href="#lance1">Lance 1</a></li>
                    </ul>
                    <div class="tab-content" id="pagLances"> </div>
                </div>
            </form>


        <script>
            var cont = 0;

            function varrerValores(){
                $("#exemplo1 > div").each( function(index, value) {
                    console.log( 'div: ' + $(this).attr('id') );
                });
            }

            function addLance(){
                // FUNÇÃO PARA ADICIONAR NOVOS LANCES 

                //RECEBE POR GET O ARQUIVO lance.php 
                $.get("./lance.php", function (lancePHP){

                    //ADICIONA ABA DA LISTA
                    $("#lances_adicionados").append(
                        "<li>"+
                            "<a data-toggle='tab' href='#lance"+cont+"'>Lance "+ cont +"</a>"+
                        "</li>"
                    );

                    //DESATIVA AS LANCES ANTERIORES
                    $("#pagLances > div.active").removeClass("active");

                    //CRIA O TÍTULO DA LISTA
                    $("#pagLances").append(
                        "<div id='lance"+cont+"' class='tab-pane fade active in '>"+
                            "<h3> Lance "+ cont +"</h3> "+
                        "</div>"
                    );

                    //CRIA VARIÁVEL COM O ID DO LANCE ATUAL
                    var lance = $( "#lance"+cont );

                    //ADICIONA O HTML DO ARQUIVO lance.php PARA DENTRO DA LISTA
                    lance.append(lancePHP);

                    //CRIA UMA DIVISÃO PARA INSERIR AS CAPTURAS
                    lance.append(
                        "<div id=\"captura"+cont+"\" class=\"col-md-12\"></div>"
                    );

                    //CRIA O BOTÃO PARA INSERIR AS CAPTURAS USANDO A FUNÇÃO add Captura
                    lance.append(
                        "<div>"+
                         "<center>"+
                            "<label  value='"+cont+"'' id='"+cont+"' class='btn btn-default mainButton' onclick='addCaptura("+ cont+ ");'>"+
                                "+ Captura"+
                            "</label>"+
                         "</center>"+
                        "</div>"
                    );
                });
                cont++;
            }


            window.onload = function addLanceOnLoad(){
                // FUNÇÃO ADD LANCE 1 AO CARREGAR A PÁGINA


                //RECEBE POR GET O ARQUIVO lance.php
                $.get("./lance.php",  function (lancePHP){

                    //CRIA TÍTULO PARA O LANCE 1
                    $("#pagLances").append(
                        "<div id='lance1' class='tab-pane fade active in '>"+
                            "<h3> Lance "+ cont +"</h3>"+
                        "</div>"
                    );

                    //CRIA VARIÁVEL COM O ID DO LANCE1
                    var lance = $( "#lance"+cont );

                    //ADICIONA O HTML DO ARQUIVO lance.php PARA DENTRO DA LISTA1
                    lance.append(lancePHP);
                    
                    //CRIA UMA DIVISÃO PARA INSERIR AS CAPTURAS
                    lance.append(
                        "<div id='captura"+cont+"' class='col-md-12'></div>"
                    );

                    //CRIA O BOTÃO PARA INSERIR AS CAPTURAS COM A FUNÇÃO addCaptura
                    lance.append(
                        "<div>"+
                            "<center>"+
                                "<label  value='"+cont+"'' id='"+cont+"' class='btn btn-default mainButton' onclick='addCaptura("+ cont+ ");'>"+
                                    "+ Captura"+
                                "</label>"+
                            "</center>"+
                        "</div>"
                    );
                });
                cont++;
            }

            
            function addCaptura(val){
                //FUNÇÃO QUE ADICIONA CAPTURA NO LANCE ESPECÍFICO
                //RECEBE O ID DO LANCE

                //RECEBE POR GET O ARQUIVO captura.php
                $.get("./captura.php", function (lance){

                    //ADD CAPTURA NA DIVISÃO DEFINIDA POR LANCE
                   $("#captura"+val).append(lance);
                });  
            }
        </script>
        
    </body>  
</html>