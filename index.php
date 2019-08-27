<?php
   include("controller/conexion.php");
   include("controller/valida-rol.php");  
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/icon.png" type="image/pmg" sizes="16x16">
    <title>APP Ting</title>
</head>
<body>
    <header>
      <div id="logotipo"><img src="images/logotipo.jpg" alt="logotipo ting campana amarilla"> </div>
    </header>

    <main>    
    <form action="index.php" method="post">
          <div class="container">
            <label for="uname" class="labelforms">Usuario</label>
            <input type="text" placeholder="Introduce el Usuario" name="uname" required>
            <label for="psw" class="labelforms">Contraseña</label>
            <input type="password" placeholder="Introduce la Contraseña" name="psw" required>
            <button type="submit" class="login">Entrar</button>
          </div>
    </form>
    </main>

    <footer>
       <p> by Vengacoders </p>
      
    </footer>
</body>
</html>


