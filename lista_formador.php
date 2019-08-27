<?php
   include('controller/session.php');
   include('controller/user_data.php');
?>   

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="images/icon.png" type="image/pmg" alt="icon ting bell" sizes="16x16">
    <title>APP Ting - Lista Formador</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    

      <header>
          <p class="left">Bienvenido <?php echo $name_user; ?></p>
          <p class="right"><a href = "controller/logout.php">Cerrar sesión</a></p>
         <div id="logotipo"><img src="images/logotipo.jpg" alt="logotipo ting campana amarilla"> </div>
      </header>

      <div id="main">   
      
     <!-- LISTADO TURNOS -->
     <?php   
          $user_data_sql = "SELECT trn_usr_id, trn_texto, usr_name FROM tng_turnos, tng_users WHERE tng_turnos.trn_usr_id = tng_users.usr_id and trn_status_id = 1 ORDER BY trn_date ASC";
          $turnosql = mysqli_query($db,$user_data_sql);
          if (mysqli_num_rows($turnosql) > 0) {
          while($turnorow = mysqli_fetch_assoc($turnosql)) {
        ?>

        <div class="turnoCoder">
        <div class="fotoCoder"><img src="fotos/<?php echo $turnorow["trn_usr_id"];?>.png" alt="Foto coder nombre" /></div>
          <div class="nombreCoder"><p> <?php echo $turnorow["usr_name"]; ?>:<br> <?php echo $turnorow["trn_texto"]; ?></p></div>
          
        </div>


          <?php
            }
            } else {
                echo "0 results";
            }
            
          ?>      
      <!-- LISTADO TURNOS END-->

      </div>

    <div class="cajaBotonNueva"><button class="botonNueva" onclick="location.href='controller/CheckTurno.php';" >Check</button></div>


    <div class= "botonesFooter">
            <div class="botonHistorial"><button class ="botonFooter"><i class="fas fa-history"></i> CAMBIAR ESTADO</button></div>
            <div class="botonAli"><button class ="botonFooter"><i class="far fa-user"></i>PERFIL</button></div>
        </div>


  </body>
</html>
