<!DOCTYPE html>
<html lang="es">

<head>

    <div id="header">
    <img src="img\tec.png" width="100" height="130" class="imgtec">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <title>Formulario Alumnos de `Programacion Web</title>
        <h1 id="titulo0">Datos Capturados</h1>
    </div>
</head>

   <body>
   <div id="body3">
   
       <div id="body4">
        <br><br>
        <h2>Datos Capturados</h2>
        <?php
        
        foreach ($_GET as $llave=>$valor){
            
            if($valor=='Enviar'){
           

            } else{
                echo "".$llave.": &nbsp ".$valor."<br>";
            }
        }
        ?>
        <br><br>
       
        <a href="index.html"> Regresar a la captura</a>
        </div>
   </div>

   </body>
   <footer>
   <div id="pie">

<h3>Derechos reservados</h3>
</footer>
   </html>
