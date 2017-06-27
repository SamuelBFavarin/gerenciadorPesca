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
        <!--------------
            Main Menu
        --------------->
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Gerador Pesca</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Nova viagem</a></li>  
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gerenciar
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Embarcações</a></li>
                      <li><a href="#">Espécies</a></li>
                      <li><a href="#">Porto</a></li>
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
        <!--------------------
            Formulário Viagem
        --------------------->
        <div class="container">
            <h3>Nova Viagem</h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                      <label for="embarcacao">Escolha uma embarcação:</label>
                      <select class="form-control" id="embarcacao">
                        <option>Pérola Negra</option>
                        <option>Diamante de Sangue</option>
                        <option>Bote </option>
                        <option>Barquinho</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="portoInicial">Escolha o porto inicial:</label>
                      <select class="form-control" id="portoInicial">
                        <option>Itajaí</option>
                        <option>Santos</option>
                        <option>Garopaba </option>
                        <option>Navegantes</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="portoFinal">Escolha o porto final:</label>
                      <select class="form-control" id="portoFinal">
                        <option>Itajaí</option>
                        <option>Santos</option>
                        <option>Garopaba </option>
                        <option>Navegantes</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="dataInicio">Defina a data inicial:</label>
                      <input type="date" class="form-control" id="dataInicio">
                    </div>
                    <div class="form-group">
                      <label for="dataFim">Defina a data inicial:</label>
                      <input type="date" class="form-control" id="dataFim">
                    </div>
                </div>
            </div>
            <div class="container">
                <ul class="nav nav-tabs" id="lances_adicionados" style="cursor:pointer;">
                    <li> <a  style="color: white; background-color: green;" id="addLance"onclick="addLance()"> + Adicionar Lance </a></li>
                    <li class="active"><a data-toggle="tab" href="#lance1">Lance 1</a></li>
                </ul>
                <div class="tab-content" id="pagLances"> </div>
            </div>

        <script>
            var cont = 0;

            function addLance(){
                // Adiciona arquivo lance.php
                $.get("./lance.php", {"id":cont}, function (lance){
                    $("#lances_adicionados").append("<li><a data-toggle='tab' href='#lance"+cont+"'> Lance "+ cont +"</a></li>");
                    $("#pagLances").append("<div id='lance"+cont+"' class='tab-pane fade active in '> <h3> Lance "+ cont +"</h3> </div>");
                    $( "#lance"+cont ).append(lance);
                });
                cont++;
            }
            window.onload = function addLanceOnLoad(){
                // Adiciona arquivo lance.php on load
                $.get("./lance.php", {"id":cont}, function (lance){
                    $("#pagLances").append("<div id='lance1' class='tab-pane fade active in '> <h3> Lance "+ cont +"</h3> </div>");
                    $( "#lance"+cont ).append(lance);
                });
                cont++;
            }
        </script>
        
    </body>  
</html>