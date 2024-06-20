<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Datos </title>
</head>
<body>
    <form action="welcome.php" method="POST">
        Nombre:<input type="text" name="name" pattern="[A-Z]a-z|ñ|Ñ|Ü|Ü|á|Á|é|É|í|Í|ó|Ó|ú|Ú |]"><br>
        Edad:<input type="text" name="edad" pattern=[0-9]{1,99}><br>
        <input type="submit">
    
</body>
</html>