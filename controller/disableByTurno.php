<?php
           
      $sqlDisable = "SELECT tng_turnos.trn_status_id FROM tng_turnos WHERE trn_usr_id = $id_user AND trn_status_id = 2";
      $resultDisable = mysqli_query($db,$sqlDisable);
      $conteoDisable = mysqli_num_rows($resultDisable);
      		
      if($conteoDisable > 0) {           
   ?>

<script>
function disableByTurno() {
  document.getElementById("buttonadd").style.display = "none";
  
  <?php
      }
  ?>

}