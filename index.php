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
        <!--=========
            Main Menu
        ================-->
         <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand">Gerador Pesca</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a>Home</a></li>
                <li><a href="viagem.php">Nova viagem</a></li>  
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Gerenciar
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="embarcacao.php">Embarcações</a></li>
                      <li><a href="#">Espécies</a></li>
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
            <div class="col-md-4 mainButton">
                <h3>Nova viagem</h3>
                <a href="viagem.php" ><button class="btn btn-success"> Nova Viagem</button></a>
            </div>
            <div class="col-md-4 mainButton">
                <h3>Gerenciar</h3>
                <a href="embarcacao.php"><button class="btn btn-primary"> Embarcação</button></a><br>
                <button class="btn btn-primary"> Espécies</button><br>
                <button class="btn btn-primary"> Porto</button>
            </div>
            <div class="col-md-4 mainButton">
                <h3>Relatórios</h3>
                <button class="btn btn-alert"> Atividade mensal</button><br>
                <button class="btn btn-alert"> Atividade mensal por embarcação</button><br>
                <button class="btn btn-alert"> Atividade por espécie</button>
            </div>
        </div>   
    </body>  
</html>