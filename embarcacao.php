<html>
    <head>
        <title>Gerenciador Pesca</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="viagem.php">Nova viagem</a></li>  
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Gerenciar
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="">Embarcações</a></li>
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
            <h3 class="col-md-6">Embarações:</h3>
            
            <button class="btn btn-success col-md-6" type="button" data-toggle="modal" data-target="#vagaModal" style="max-width: 200px; float: right;"> Adicionar Embarcação</button> 
            
            <div class="panel panel-default" style="margin-top: 60px;">
               <div class="panel-body">
                    <div class="col-md-6">
                       <h5>Nome: Pérola Negra</h5>
                       <h5>Tamanho: 50</h5>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-danger" style="float: right; margin-top: 20px;"> Excluir</button>
                    </div>
               </div>
            </div>
        </div>

        <!--===============
            MODAL 
        =================-->  
        <div class="modal fade" id="vagaModal" role="dialog">
          <div class="modal-dialog">

            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cadastrar Embarcação</h4>
              </div>
              <form>
                <div class="modal-body"> 
                  <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome">
                  </div> 
                  <div class="form-group">
                    <label for="tam">Tamanho:</label>
                    <input type="text" class="form-control" id="tam">
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-success"> Cadastrar </button>
                </div>
              </form>
            </div>  
          </div>
        </div> 

    </body>  
</html>