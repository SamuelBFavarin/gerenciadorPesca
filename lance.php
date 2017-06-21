<html>
    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
               
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>Lance</h3>
                <div class="form-group">
                  <label for="horaInicio">Defina a hora inicial:</label>
                  <input type="time" class="form-control" id="horaInicio">
                </div>
                <div class="form-group">
                  <label for="horaFim">Defina a hora final:</label>
                  <input type="time" class="form-control" id="horaFim">
                </div>
                <div class="form-group">
                  <label for="comprimentoRede">Comprimento Rede:</label>
                  <input type="text" class="form-control" id="comprimentoRede">
                </div>
                <div class="form-group">
                  <label for="areaRede">Área total Rede:</label>
                  <input type="text" class="form-control" id="areaRede">
                </div>
                <div class="form-group">
                  <label for="malha">Tamanho da malha:</label>
                  <input type="text" class="form-control" id="malha">
                </div>
                <div class="form-group">
                  <label for="profundidade">Profundidade:</label>
                  <input type="text" class="form-control" id="profundidade">
                </div>
                <div class="form-group">
                  <label for="lat">Latitude:</label>
                  <input type="text" class="form-control" id="lat">
                </div>
                <div class="form-group">
                  <label for="lon">Longitude:</label>
                  <input type="text" class="form-control" id="lon">
                </div>
                <div id="captura">
                </div>
            </div>
            <div>
                <center>
                    <button class="btn btn-default mainButton" onclick="addCaptura()">+ Captura</button>
                </center>
            </div>
        </div>
        <script>
            function addCaptura(){
                // Adiciona arquivo captura.php 
                $.get("./captura.php", function (lance){
                    $( "#captura" ).append(lance);
                });
            }
        </script>
    </body>
</html>