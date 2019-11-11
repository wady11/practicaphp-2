<?php
if(isset($_POST['calcular'])){
    
   
    //$dollar = 52.68; $euro = 58.81; $libra = 68.07; $monedachina =  479892.88;

    function calculardivisa(){
        $pesoD = $_POST['pesodominicano'];
        $moneda = $_POST['moneda'];

        if($moneda == 'usa'){
          $precio = 52.68;
          $tipo = 'dollar';
         }
         else if($moneda == 'euro'){
            $precio = 58.81;
         }
         else if($moneda == 'libra'){
             $precio = 68.07;
         }
         elseif($moneda == 'monedachina'){
            $precio = 30;
         }

          $total = $pesoD / $precio;

         return $total;
    }

    $resultado =  calculardivisa();

}
/*este programa se encarga de calcular el equivalente a pesos de lo que se ha introducido
mediante la informacion del input
*/

?>

<?php 
    //llama el desde del template con un include 
    include_once("template/header.php");
?>
<body class="body-resultado">
    <h1> Total del cambio de la moneda</h1>



    <div class="resultado">
    <?php 
       $pesoD = $_POST['pesodominicano'];
       $moneda = $_POST['moneda'];

        if($pesoD == ""){
            echo "Debe ingresar Un valor";
        }
        else
        {
            echo  trim($pesoD) ." Pesos Dominicanos "." son equivalente a : " . round($resultado,2)."  $". $moneda;
        }
        
        //obtener url actual
        $url = $_SERVER['REQUEST_URI'];

        //obtener ip del servidor
        $ip_servidor = $_SERVER['REMOTE_ADDR'];
       
        //obtner ip del cliente
      $ip_cliente= gethostbyname ($server_NAME);
        

    ?>

    </div> <!--fin del contenedor resultado-->

    <span style="text-align:center">
        <label > url de la pagina actual</label>
        <br>
        <?php
            //monstrar url
         echo $url . "<br/>";  ?>
     </span>
        <br>
     <span>
        <label> ip del Servidor</label>
        <br>
        <?php
        //mostrar ip del servidor
         echo $ip_servidor ?>
     </span>
     <br>
     <span>
        <label> ip del Cliente</label>
        <br>
        <?php
            //mostrar ip del cliente
        
        echo $ip_cliente ?>
     </span>

    

        <div class=volver-inicio>
            <a href="conversor.php"> volver a inicio </a>

        </div>

</body>
</html>
