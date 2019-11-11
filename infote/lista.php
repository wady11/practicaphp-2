  
<?php 
    //llama el desde del template con un include 
    include_once("template/header.php");
?>

  <?php

      //agrego los palabras reservadas  en un array
      $lista_reservads = array('break','clone','die()','empty','final','echo');

  ?>

<h1> Palabras reservadas de php</h1>
 <main>
 

    <?PHP 

      foreach ($lista_reservads as $valor) {
         
          //mostramos en un array por medio de un contenedor
          echo "<div class=container-datos-lista>";
          echo '<p>'; 
          echo $valor;
          echo '</p>';

       echo  "</div><!--Fin del contenedor-->";
      }
      
    
    ?>
    
    
         

 </main><!--fin del main-->

</body>
</html>