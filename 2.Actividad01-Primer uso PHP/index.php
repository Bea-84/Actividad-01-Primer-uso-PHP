<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento php</title>
</head>
<body>
    <?php
    date_default_timezone_set('America/Buenos_Aires'); // Establecer la zona horaria a Buenos Aires

    $hora = date('H'); // Obtener la hora actual en formato de 24 horas

    if ($hora >= 5 && $hora < 12) {
        $saludo = "Buenos días";
    } elseif ($hora >= 12 && $hora < 18) {
        $saludo = "Buenas tardes";
    } else {
        $saludo = "Buenas noches";
    }
    ?>

    <h1><?php echo $saludo; ?></h1>
</body>
</html>