<?php
    session_start();
   include('conexion.php');
   include('user_data.php');
   
   
   
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
         
         $varconsulta = $_POST['pregunta'];
         $dateConsulta = date("Y-m-d H:i:s");
        
         
         $sql = "INSERT INTO tng_turnos (trn_usr_id, trn_texto, trn_date, trn_status_id, trn_formador_id) VALUES ($id_user, '$varconsulta', '$dateConsulta', '1', '1')";

         if ($db->query($sql) === TRUE){
           
             header("location:../lista.php");
         }
         
   
       
    
      }
      ?>