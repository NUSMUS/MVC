<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Personas</title>
  </head>
  <body>
    <?php
    foreach ($datos as $dato) {
      echo $dato["nombre"]."<br/>";
    }
     ?>
  </body>
</html>
