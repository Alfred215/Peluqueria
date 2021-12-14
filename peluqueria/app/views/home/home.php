<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>App MVC</title>
  <link type="text/css" rel="stylesheet" href="home.css"/>
</head>

<body>
  <h1>Aqua By Rocio</h1>
  <?php require "app/views/parts/header.php" ?>
  <img src="<?php echo $home->urls;?>" alt="imagen">

  <section>
    <article>
      <h2>TÉCNICA</h2>
      <p id="parrafo1">La salud de tu piel y tu cabello es nuestra máxima prioridad a la hora de realizar un diagnóstico de estilo, sobre todo en los servicios de color. En cuanto a la forma y el acabado, nuestros amplios conocimientos de visagismo nos permiten obtener un resultado con la mayor armonía, siempre respetando tus preferencias. Nuestro objetivo es conseguir el estilo que buscas, manteniendo y cuidando tu piel y tu cabello con la menor agresión.
      </p>
    </article>
    <img src="fotos/tecnica.jpeg" alt="imagen">
    <article>
      <h2>SERVICIOS</h2>
      <div class="servicio">
      <h3>FORMA + ESTRUCTURA DE CORTE</h3>
      <hr>
        <p>Cada persona es única, al igual que su estilo y su cabello. El diagnóstico de estilo inicial nos proporciona toda la información necesaria para obtener el mejor resultado. A través del estudio de visagismo, en el que analizamos las líneas de tu rostro, volúmenes, asimetrías y tono de la piel, podemos determinar las técnicas de forma y estructura de corte, volumen y color más adecuadas.
        </p>
        <br>
        <p>Adaptamos la técnica de corte según el resultado que quieras obtener, siempre teniendo en cuenta una serie de factores como los contornos frontales, el flequillo, la largura del cabello, su textura y volumen. Trabajamos las últimas tendencias en cabello, tanto para los estilos más atrevidos como para los más conservadores, desde el bob clásico y renovado, al shaggy, el pixie y el carré.
        </p>      
        <img class="servicios" src="fotos/forma.jpg" alt="imagen">
      </div>
      <div class="servicio">
        <h3>COLOR</h3>
        <hr>
        <p>Ajustar el color a la forma y estructura de corte es esencial, por ello utilizamos las técnicas adecuadas en cada caso. Los colores claros aportan volumen y los oscuros lo reducen y dan más profundidad. Así mismo, los reflejos cálidos aportan luminosidad y los fríos dan oscuridad. Todos estos aspectos son fundamentales para crear un resultado lleno de armonía.</p>
        <br>
        <p>Antes de realizar un servicio de color, aplicamos un tratamiento de porosidad con oxígeno activo, tanto para proteger la piel como para igualar la porosidad del cabello. La cultura de color de Secretos del Agua nos da la posibilidad de trabajar todas las técnicas en sinergia con Barros, que aportan pigmento y tratamiento al cabello, NEO, un óleo gel, y el Difuminador Solar, muy recomendable en bases claras.</p>
        <img class="servicios" style="margin-top: 48px;" src="fotos/color.jpg" alt="imagen">
      </div>
      <div id="servicio1">
        <h3>TRATAMIENTOS CAPILARES</h3>
        <hr>
        <p>El cabello es una fibra natural y se ve afectado por los cambios estacionales, hormonales, estado anímico y emocional, además de los tratamientos anteriores con químicos como las aclaraciones y los moldeadores.  Tu cabello es único y nuestros profesionales determinarán, a través del diagnóstico adecuado, sus necesidades específicas en cuanto a hidratación, nutrición, volumen, densidad y reparación. </p>
        <br>
        
        <p>La Línea Capilar de Secretos del Agua cubre todas las necesidades de tu cabello. La Línea de Fuerza aporta densidad y volumen en cabellos finos; la Línea Sensitiva corrige las alteraciones del cuero cabelludo, como el picor o la descamación; y la Línea Restauradora recupera cabellos secos o dañados.  El mantenimiento de tu cabello es fundamental para conseguir unos resultados duraderos. Si deseas realizar el mantenimiento en casa, te proporcionaremos los consejos y seguimiento profesional adecuado. Si por el contrario prefieres cuidar tu cabello en el salón, realizaremos el mantenimiento mediante los Ciclos Lunares.  La luna maneja e influye en todos los elementos que contienen agua, y está unida a la Tierra y a su respiración. El ciclo lunar tiene una duración de 28 días, que es el movimiento que realiza la luna alrededor de nuestro planeta. De acuerdo con este ciclo, nuestros tratamientos consisten en 6 sesiones repartidas en 28 días, obteniendo unos resultados inmejorables para tu cabello.</p>
        <img id="servicios" src="fotos/tratamientos-capilares.jpg" alt="imagen">
        <br>
      </div>
      <div class="servicio">
        <h3>PIEL</h3>
        <hr>
        <p>Las Bioterapias faciales y corporales de Secretos del Agua mantienen tu piel hidratada y oxigenada, dándole un aspecto natural y sin saturación. Los principales componentes son el Agua Biopolar y extractos botánicos, lo que marca la diferencia frente a la cosmética natural, sobre todo en los resultados a largo plazo. Todos los tratamientos se realizan de forma natural y con ayuda de piedras energéticas como el cuarzo y los hematites, convirtiéndolos en toda una experiencia sensorial.  </p>
        <br>
        <p>En los tratamientos faciales y corporales también realizamos Ciclos Lunares de 28 días en 6 sesiones, utilizando el mismo calendario que en la agricultura biodinámica.</p>
        <img class="servicios" src="fotos/piel.jpg" alt="imagen">
      </div>
      <div class="servicio">
        <h3>BODAS</h3>
        <hr>
        <p>Sabemos la importancia que tiene para los novios e invitados un día tan especial, por ello cuidamos hasta el último detalle para estar a la altura de tus expectativas. La preparación de tu piel y tu cabello en los días previos al acontecimiento es fundamental para obtener los mejores resultados. Te recomendamos realizar una prueba de peinado y maquillaje un mes antes de la ceremonia, y complementarla con una Bioterapia facial y corporal.</p>
        <img class="servicios" style="margin-top: 123px;" src="fotos/bodas.jpg" alt="imagen">
      </div>
    </article>
    <article>
      <h2><?php echo $home->titulo ?></h2>
      <p><?php echo $home->descripcion ?></p>
      <img id="subida"src="<?php echo $home->urls;?>" alt="imagen">
    </article>
  </section>





  
        
        
</body>

</html>