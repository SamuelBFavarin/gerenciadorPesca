<?php
  $id = $_GET["id"];
  $id_cap = 0;

  echo'
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>Captura</h3>
                <div class="form-group col-md-6">
                  <label for="pesp">Peso:</label>
                  <input type="number" class="form-control" id="peso" name="pesp'.$id.'">
                </div>
                 <div class="form-group col-md-6">
                  <label for="portoFinal">Espécie:</label>
                  <select class="form-control" id="portoFinal" name="id_especie'.$id.'">
  ';                   
                          require_once "backend/conexao.php";
                          $sql = "SELECT id , nome FROM especie";
                          $query = pg_query($conexao,$sql);
                          for($i=0; $i<pg_num_rows($query); $i++){
                              $arr = pg_fetch_array($query, $i, PGSQL_ASSOC); 
                              echo'<option value="'.$arr["id"].'">'.$arr["nome"].'</option>';
                          }
   echo '                
                  </select>
                </div>
            </div>
        </div>

  ';

?>

