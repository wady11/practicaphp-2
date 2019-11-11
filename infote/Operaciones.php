<?php 
    //llama el desde del template con un include 
    include_once("template/header.php");
?>
<body>


<?php  

#variables
$x = 144; 
$y = 999;
//funciones  aritmeticas 

$suma = $x + $y;
$resta = $y - $x;
$multiplicacion = $x * $y;
  $division = $y / $x;

?>

<h1> Operaciones Aritmeticas </h1>

<div class="operaciones">
<?php  
  #con esta practica se muestra por pantalla las funciones aritmetica 
  #suma, resta, multiplicacion y diviion
    echo "La suma total es igual : " . $suma . "<br>";
    echo "La resta total es igual : " . $resta . "<br>" ;
    echo "La multiplicacion total es igual : " . $multiplicacion . "<br>" ;
    echo "La division total es igual : " . $division . "<br>" ;
         
 ?>


</div>

</body>
</html>