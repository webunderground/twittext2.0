<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
 <link rel="stylesheet" href="styles.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
</head>
<body>
<div class='widgets__widgetContainer'>
<?php 
// Llamamos al archivo de conexión a la base de datos
require("conexion.php");
 
//Creamos las variables con los nombres de los campos del formulario
$usuario = $_POST["usuario"];
$name = $_POST["name"];
$email = $_POST["email"];
$web = $_POST["web"];
$text = $_POST["text"];
$insertdate= $_POST["insertdate"];

// Codigo de insercion a la base de datos
$insertar = mysqli_query($conexion,"INSERT INTO profile (usuario,name,email,web,text,insertdate) VALUES ('$usuario','$name','$email','$web','$text','$insertdate')");

if (!$insertar) {
 echo "Error al guardar";
} else {
   header("Location: settings.php");
}

mysqli_close($conexion);
?></div>
<br/>
<a href="index.php">muro</a>
</body>

</html>