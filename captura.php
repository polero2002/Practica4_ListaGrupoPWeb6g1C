<?php
/*
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
*/
?>    
<!DOCTYPE html>
<html>
    <head>
        <title>Captura de controles HTML 5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         <a href="index.html"> Regresar a la captura</a>
         <br>
         <h4>Datos transmitidos ($_REQUEST)</h4>
        <?php
            echo"<br>";
            foreach ($_REQUEST as $llave=>$valor){
                echo $llave." ".$valor."<br>";
            }
        ?>
        <br><br>
        <h4>Datos con caso GET</h4>
        <?php
        foreach ($_GET as $llave=>$valor){
            echo $llave." ".$valor."<br>";
        }
        ?>
        <br><br>
        <h4>Datos con caso POST</h4>
        <?php
        foreach ($_POST as $llave=>$valor){
            echo $llave." ".$valor."<br>";
        }
        ?>
              
    </body>
</html>
