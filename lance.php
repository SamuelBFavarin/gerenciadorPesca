
    <?php 
       $id = $_GET["id"];
    ?>

    <div class="panel panel-default">
        <div class="panel-body">
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
            <div id="captura<?php echo $id; ?>">
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
            //Adiciona arquivo captura.php 
           $.get("./captura.php", function (lance){
                $( "#captura<?php echo $id; ?>" ).append(lance);
          }); 
        }
    </script>

