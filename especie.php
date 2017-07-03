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
            <h3 class="col-md-6">Espécies:</h3>
            
            <button class="btn btn-success col-md-6" type="button" data-toggle="modal" data-target="#vagaModal" style="max-width: 180px; float: right;"> Adicionar Espécie</button> 
            
                <?php 
                  require_once "backend/lista_especie.php";
                ?>
        </div>

        <!--===============
            MODAL 
        =================-->  
        <div class="modal fade" id="vagaModal" role="dialog">
          <div class="modal-dialog">

            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cadastrar Espécie</h4>
              </div>
              
              <form action="backend/insere_especie.php" method="post" enctype="multipart/form-data">
                <div class="modal-body"> 
                  <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                  </div> 
                  <div class="form-group">
                    <label for="tam">Profundidade Máxima</label>
                    <input type="number" class="form-control" id="tam" name="prMax">
                  </div>
                  <div class="form-group">
                    <label for="tam">Profundidade Mínima</label>
                    <input type="number" class="form-control" id="tam" name="prMin">
                  </div>

                  <input id="fileUpload" type="file" name="files[]" multiple/ />
                  <div id="image-holder"></div>

                </div>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-success" value="Cadastrar"/>
                </div>
              </form>
              
            </div>  
          </div>
        </div> 

        
        <script type="text/javascript">
         $("#fileUpload").on('change', function () {

               var countFiles = $(this)[0].files.length;

               var imgPath = $(this)[0].value;
               var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
               var image_holder = $("#image-holder");
               image_holder.empty();

               //VALIDAÇÃO FORMATO
               if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                   if (typeof (FileReader) != "undefined") {

                       //loop for each file selected for uploaded.
                       for (var i = 0; i < countFiles; i++) {

                           var reader = new FileReader();
                           reader.onload = function (e) {
                               $("<img />", {
                                   "src": e.target.result,
                                       "class": "thumb-image"
                               }).appendTo(image_holder);
                           }

                           image_holder.show();
                           reader.readAsDataURL($(this)[0].files[i]);
                       }

                   } else {
                       alert("ESSE BROWSER NÃO SUPORTA FILE READER");
                   }
               } else {
                   alert("Por favor, selecione um imagem");
               }
           });
        </script>

    </body>  
</html>