<?php
//recuperar los valores de los input 
$nombre =$_POST["name"];
$edad =$_POST["edad"];
echo "Hola" .$nombre . " Su edad es " .$edad;
echo "<br>";


if($edad>=18)
    echo "<P>Puede votar<p>";
else
    echo "No puede votar";

?>