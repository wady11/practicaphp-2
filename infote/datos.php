<?php
if(isset($_POST['submit'])){
    $arreglo = array(
            //capturar valor enviado por el submit
        'nombre' => $_POST['nombre'],
        'apellido' => $_POST['apellido'],
        'edad' => $_POST['edad']
    );
   
}

?>


<?php 
    //llama el desde del template con un include 
    include_once("template/header.php");
?>

 <main>
    <div class="container-datos">
    <header>
            <div class="img-container">
                 <i class="fa fa-user"></i>
            </div>
     </header><!--fin del header-->


    <form action="" class="form" method="post">
        <div class="convertor-container">
            <div class="first-value">
             
                <input type="text" name="nombre"  placeholder="Ingrese su nombre">
            </div>
            <div class="first-value">
                
                <input type="text" name="apellido"  placeholder="Ingrese su Apellido">
            </div>
            <div class="first-value">
                
                <input type="number" min="1" name="edad"  placeholder="Ingrese su Edad">
            </div>
            
               
                
                <div class="convert-button">
                    <input type="submit" value="Enviar" id="convertir" name="submit">
                </div>            
        </div>
    </form><!--final del form-->

    <div class="datos-array">
        <?php

            /*este programa utiliza un formalario cuya informacion es introducida por el usuario
            y lo muestra debajo
            */
                
            echo "Nombre : ". $arreglo['nombre'] . "<br/> ";//mostrar nombre
            echo "Apellido : " . $arreglo['apellido'] . "<br/>";//mostrar apellido
            echo "Edad : ".$arreglo['edad']."<br/>" ;//mostrar edad


                echo "la version de php es : " . phpversion();//mostrar version
            
        
    
        ?>

    </div><!--fin del datos-array-->

    </div><!--Fin del contenedor-->      
    
  
 
    
 </main>   

 

</body>
</html>