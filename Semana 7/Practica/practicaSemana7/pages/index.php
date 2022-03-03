<?php
INCLUDE "../nav.php";
    //comentario de una linea
    /*
    comentario de vairas lineas
    */
    #comentario
    //variabless
    $string = "Variable de tipo string";
    $int = 10;
    $double = 5.2;

    // echo "<h1>Programacion Computacional IV</h1>" . $string;
    //verifica existencia de variable
    if(isset($_POST["enviar"])){
        // echo "<script>alert('Clic')</script>";
        //obtiene la variable idioma, ya sea en o es
        $idioma = $_POST["idioma"];
        // echo  $idioma;
        //incluye el archivo
        INCLUDE $idioma . ".php"; //el nombre del archivo y su extensión
    }else{
        INCLUDE "es.php";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Programación Computacional IV</h1>
   <h2><?php echo TITLE; ?></h2>
   <h2><?php echo HEADING_TITLE; ?></h2>
   <h3><?php echo OVERVIEW_TITLE; ?></h3>

    <form action="" method="POST">
        <select name="idioma" id="">
            <option value="en">English</option>
            <option value="es">Spanish</option>
        </select>
        <input type="submit" name="enviar" value="Seleccionar" />
    </form>
</body>
</html>

