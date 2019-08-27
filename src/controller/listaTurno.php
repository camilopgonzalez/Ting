<?php   
          $user_data_sql = "SELECT trn_usr_id, trn_texto, usr_name FROM tng_turnos, tng_users WHERE tng_turnos.trn_usr_id = tng_users.usr_id and trn_status_id = 1 ORDER BY trn_date ASC";
          $turnosql = mysqli_query($db,$user_data_sql);
          if (mysqli_num_rows($turnosql) > 0) {
          while($turnorow = mysqli_fetch_assoc($turnosql)) {
        ?>

<?php 
}
            } 

            ?>