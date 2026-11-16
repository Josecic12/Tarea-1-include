<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarea 1 incluse</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>

  <?php
  include "cabecera.php";
  ?>

  <?php
  include "menu.php";
  ?>

  <div class="cont_fondo ancho margen centrar">
    <h1 class="negritas">Relaxation</h1>
    <br>
    <p>come to us right now</p>
    <br>
    <a href="#" class="btn_azul">book Now</a>
  </div>

  <br>

  <div class="cont_info margen ancho centrar">
    <h2 class="verdecito">Plunge into the world of <br> relaxation with us</h2>
    <br>
    <p class="centrar verdecito2">We invite you to visit the spa paradise and feel the power of relaxation. <br> The unique experts will do their best for you.</p>
    <br>
    <div class="cont_info_uno">
      <img src="imagenes/foto1.jpg" alt="">
      <br>
      <h3 class="azulfuerte">High-quality services</h3>
      <p>The best receptionists will put you through the world of potiteness, professiinalism, deep calmness and high-quility services.</p>
    </div>
    <div class="cont_info_dos">
      <img src="imagenes/foto2.jpg" alt="">
      <br>
      <h3 class="azulfuerte">Paradise atmosphere</h3>
      <br>
      <p>Feel the wonderfull atmosphere of beauty, pleasant colors, tasty aromas and feel free to have a relax</p>
    </div>
    <div class="cont_info_tres">
      <img src="imagenes/foto3.jpg" alt="">
      <br>
      <h3 class="azulfuerte">Massage to any taste</h3>
      <br>
      <p>Get the qualified treatment in a most preferable way. Trust our experts and experience the best massage.</p>
    </div>
  </div>

  <?php
  include "pie.php"
  ?>

</body>
</html>