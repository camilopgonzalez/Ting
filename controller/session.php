<?php
   include('controller/conexion.php');
   session_start();
   
   $user_email = $_SESSION['login_user'];
   $ses_sql = "SELECT usr_id, usr_rol FROM tng_users WHERE usr_email = '$user_email'";
   $result = mysqli_query($db,$ses_sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

   $_SESSION["id_user_global"] = $row['usr_id'];
   $login_rol = $row['usr_rol'];

   
      
   if(!isset($_SESSION['login_user'])){
      header("location:../index.php");
      die();
   }
?>