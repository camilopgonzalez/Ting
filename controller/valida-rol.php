<?php
session_start();

 if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $username = mysqli_real_escape_string($db,$_POST['uname']);
      $password = mysqli_real_escape_string($db,$_POST['psw']); 
      
      $sql = "SELECT usr_email, usr_rol FROM tng_users WHERE usr_email = '$username' and usr_pass = '$password'";
      $result = mysqli_query($db,$sql);
      $conteo = mysqli_num_rows($result);
      
      $rowlog = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $login_rol = $rowlog['usr_rol'];


		
      if($conteo == 1 and $login_rol == 2) {        
         $_SESSION['login_user'] = $username;
         header("location: lista_formador.php");
      }

      if($conteo == 1 and $login_rol == 1) {        
         $_SESSION['login_user'] = $username;
         header("location: lista.php");
      }

   }
   ?>