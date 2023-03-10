<!DOCTYPE html>
<html lang="es">

<head>

    <div id="header">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <title>Formulario Alumnos de `Programacion Web</title>
        <h1 id="titulo0">Datos Capturados</h1>
    </div>
</head>

   <body>
   <div id="body2">
   <a href="index.html"> Regresar a la captura</a>
       
        <br><br>
        <h4>Datos con caso GET</h4>
        <?php
        foreach ($_GET as $llave=>$valor){
            
            if($valor=='Enviar'){
           

            } else{
                echo $valor."<br>";
            }
        }
        ?>
        <br><br>
       
              
   </div>
   </body>
   <footer>
   <div id="pie">

<h3>Derechos reservados</h3>
</footer>
   </html>
