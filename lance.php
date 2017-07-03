<?php 
  $id = $_GET["id"];
  echo '
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="form-group col-md-4">
              <label for="horaInicio">Defina a hora inicial:</label>
              <input type="time" class="form-control" id="horaInicio" name="horaInicio_'.$id.'">
            </div>
            <div class="form-group col-md-4">
              <label for="horaFim">Defina a hora final:</label>
              <input type="time" class="form-control" id="horaFim" name="horaFim_'.$id.'">
            </div>
            <div class="form-group col-md-4">
              <label for="comprimentoRede">Comprimento Rede:</label>
              <input type="text" class="form-control" id="comprimentoRede" name="comprimentoRede_'.$id.'">
            </div>
            <div class="form-group col-md-4">
              <label for="areaRede">Área total Rede:</label>
              <input type="text" class="form-control" id="areaRede" name="areaRede_'.$id.'">
            </div>
            <div class="form-group col-md-4">
              <label for="malha">Tamanho da malha:</label>
              <input type="text" class="form-control" id="malha" name="malha_'.$id.'">
            </div>
            <div class="form-group col-md-4">
              <label for="profundidade">Profundidade:</label>
              <input type="text" class="form-control" id="profundidade" name="profundidade_'.$id.'">
            </div>
            <div class="form-group col-md-4">
              <label for="lat">Latitude:</label>
              <input type="text" class="form-control" id="lat" name="lat_'.$id.'">
            </div>
            <div class="form-group col-md-4">
              <label for="lon">Longitude:</label>
              <input type="text" class="form-control" id="lon" name="lon_'.$id.'">
            </div>  
        </div>
    </div>
    ';

?>

<script>

    var id_cap = 0;
    function addCaptura(val){
        //FUNÇÃO QUE ADICIONA CAPTURA NO LANCE ESPECÍFICO
        //RECEBE O ID DO LANCE

        //RECEBE POR GET O ARQUIVO captura.php
        $.get("./captura.php", {"id":id_cap} , function (lance){

            //ADD CAPTURA NA DIVISÃO DEFINIDA POR LANCE
           $("#captura"+val).append(lance);
        });  
        id_cap++;
    }
</script>

