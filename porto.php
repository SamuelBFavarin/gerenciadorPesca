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
                <li><a href="index.php">Home</a></li>
                <li><a href="viagem.php">Nova viagem</a></li>  
                <li class="dropdown active">
                    <a class="dropdown-toggle" data-toggle="dropdown">Gerenciar
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="embarcacao.php">Embarcações</a></li>
                      <li><a href="especie.phps">Espécies</a></li>
                      <li><a href="">Porto</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Relatórios
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
            <h3 class="col-md-6">Portos:</h3>
            
            <button class="btn btn-success col-md-6" type="button" data-toggle="modal" data-target="#portoModal" style="max-width: 200px; float: right;"> Adicionar Porto</button> 
            
            <?php 
              require_once "backend/lista_embarcacao.php"
            ?>
        </div>

        <!--===============
            MODAL 
        =================-->  
        <div class="modal fade" id="portoModal" role="dialog">
          <div class="modal-dialog">

            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cadastrar Porto</h4>
              </div>

              <form action="backend/insere_embarcacao.php" method="post">
                <div class="modal-body"> 
                  <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                  </div> 
                  <div class="form-group">
                      <label for="adm">Escolha o tipo de Administração</label>
                      <select class="form-control" id="adm" name="adm">
                        <option value="pu">Pública</option>
                        <option value="pr">Privada</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="ano">Ano de fundação:</label>
                    <input type="number" class="form-control" id="ano" name="ano">
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="submit" value="Cadastrar" class="btn btn-success">
                </div>
              </form>

            </div>  
          </div>
        </div> 

    </body>  
</html>