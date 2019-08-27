<?php
    session_start();
   include('conexion.php');
      
         
         $sql_check = "SELECT MIN(trn_date), trn_id FROM tng_turnos WHERE trn_status_id = '1'";
         $result_check = mysqli_query($db,$sql_check);
         $row_check = mysqli_fetch_array($result_check,MYSQLI_ASSOC);
         $lastvalue = $row_check['trn_id'];


         

         $sql_update = "UPDATE tng_turnos SET trn_status_id = '2'  WHERE trn_id = $lastvalue";
         $result_update = mysqli_query($db,$sql_update);


         if ($db->query($sql_update) === TRUE){
           
           
            header("location:../lista_formador.php");
           }
           else {
              echo "pendejo !!!!!!";
           }

   
     
      ?>








  