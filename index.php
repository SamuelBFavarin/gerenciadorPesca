<html>
    <head>
        <title>Gerenciador Pesca</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
        <!--=========
            Main Menu
        ================-->
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Gerador Pesca</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Nova viagem</a></li>  
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
        
        <!--===============
            Content Home
        ===================-->
        <div class="container">
            <div class="col-md-4 mainButton">
                <h3>Nova viagem</h3>
                <button class="btn btn-success"> Nova Viagem</button>
            </div>
            <div class="col-md-4 mainButton">
                <h3>Gerenciar</h3>
                <button class="btn btn-primary"> Embarcação</button><br>
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