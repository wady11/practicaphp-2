  
<?php 
    //llama el desde del template con un include 
    include_once("template/header.php");
?>

 <main>
    <div class="container-datos">

        <header>
            <div class="img-container">
                 <img src="img/32841.png" alt="moneda de cambio">
            </div>
        </header>


    <?php //utilizamos el metodo post para mandar la informacion?>
    <form action="paginaresultado.php" method="post">
        <div class="convertor-container">
            <div class="first-value">

                <!--insertarmos los valores en el input-->
                <label><p>Peso Dominicano (a)</p> </label>
                <input type="text" name="pesodominicano" required pattern="[0-9]+" placeholder="Ingrese el valor">
            </div>
            
                <div class="arrow">
                <i class="fa fa-arrow-circle-down"></i>
                </div>
                <!--elegimos uno de los valores registrados-->
                <div class="second-value">
                    <select name="moneda">
                        <option value='usa'>Dollar</option>
                        <option value='euro'>Euro</option>
                        <option value='libra'>Libra</option>
                        <option value='monedachina'>Moneda China</option>
                    </select>
                </div>
                <!--mandamos la informacion con el boton submit-->
                <div class="convert-button">
                    <input type="submit" value="Calcular" id="convertir" name="calcular">
                </div>            
        </div>
    </form><!--final del form-->
    </div><!--Fin del contenedor-->      
    
  
 
    
 </main>   

 

</body>
</html>