<html>
    <head>
        <title>Gerenciador Pesca</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
          .galeria{
            width: 200px;
          }

          img{
            width: 200px;
            margin: 2px;
          }
        </style>
    </head>
    <body>
        <!--=========
            Main Menu
        ================-->
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Gerador Pesca</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="viagem.php">Nova viagem</a></li>  
                <li class="dropdown active">
                    <a class="dropdown-toggle" data-toggle="dropdown">Gerenciar
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="embarcacao.php">Embarcações</a></li>
                      <li><a href="">Espécies</a></li>
                      <li><a href="porto.php">Porto</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" >Relatórios
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
        
        <!--===============
            Content Home
        ===================-->
        <div class="container">
            <h3 class="col-md-6">Gerar relatório Embarcação:</h3>
            
            <div class="form-group">
              <select class="form-control" id="adm" name="adm">
                <option value="1">Janeiro</option>
                <option value="2">Fevereiro</option>
                <option value="3">Março</option>
                <option value="4">Abril</option>
                <option value="5">Maio</option>
                <option value="6">Junho</option>
                <option value="7">Julho</option>
                <option value="8">Agosto</option>
                <option value="9">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>
              </select>
            </div>

            <button class="btn btn-success col-md-6" type="button" data-toggle="modal" data-target="#vagaModal" style="max-width: 180px; float: right;"> Gerar relatório</button> 


            <div class="container">         
            <table class="table">
              <thead>
                <tr>
                  <th>Mes</th>
                  <th>Ano</th>
                  <th>Nome Embarcação</th>
                  <th>Número de viagens</th>
                  <th>Total capturado (kg)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Janeiro</td>
                  <td>2017</td>
                  <td>Teste</td>
                  <td>2</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>Janeiro</td>
                  <td>2017</td>
                  <td>Teste</td>
                  <td>2</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>Janeiro</td>
                  <td>2017</td>
                  <td>Teste</td>
                  <td>2</td>
                  <td>500</td>
                </tr>
              </tbody>
            </table>
          </div>
         
        </div>
     
        <script type="text/javascript">
         
        </script>

    </body>  
</html>