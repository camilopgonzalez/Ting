<?php
   $login_global_session = $_SESSION["id_user_global"];
   $user_data_sql = "SELECT * FROM tng_users WHERE usr_id = $login_global_session";
   $result = mysqli_query($db,$user_data_sql);
   $row_user = mysqli_fetch_array($result,MYSQLI_ASSOC);

   $id_user = $row_user['usr_id'];
   $name_user = $row_user['usr_name'];
   $email_user = $row_user['usr_email'];
   $punts_user = $row_user['usr_punts'];
   $rol_user = $row_user['usr_rol'];

  
      
 
?>