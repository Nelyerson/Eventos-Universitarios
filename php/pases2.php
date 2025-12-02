<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<?php

?>


<div class="modal fade" id="pases<?php echo $row ['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pase QR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="text-align: center;">


                    <?php
                    require "vendor/autoload.php";
                    use Endroid\QrCode\QrCode;
                    use Endroid\QrCode\Writer\PngWriter;

                    require 'conexion.php';

                    // Assuming $row2 is defined and contains 'dni'
                    // You might need to adjust how $row2 is fetched based on your logic
                    // For demonstration purposes, let's assume $row2 is accessible here.
                    // Example: $row2 = $someQueryResult->fetch_assoc();

                    // Assuming $row is defined and contains 'ide'
                    $dni = $row2['dni'];
                    $idventodos = $row ['ide'];
                    $query = "SELECT * FROM asistencia WHERE dni= '$dni' and ide='$idventodos'";
                    $resultado=$conexion->query($query);
                    $row12 = $resultado->fetch_assoc();


                    $id = $row12 ['id'];



                    $url = 'http://localhost/ProEvento%20V.1.2/php/qr.php?id=';
                    $fullurl = $url . $id;

                    $qr_code = QrCode::create($fullurl);
                    $writer = new PngWriter();
                    $result = $writer->write($qr_code);

                    // Convertir a base64 para mostrar en HTML
                    $qrBase64 = base64_encode($result->getString());

                    // Guardar el contenido de la imagen para la descarga
                    $qrDataUri = 'data:image/png;base64,' . $qrBase64;

                    ?>

                    <body>

                        <img src="<?php echo $qrDataUri; ?>" alt="Código QR">

                        <a href="<?php echo $qrDataUri; ?>" download="pase_qr.png" class="btn btn-primary btn-block"><i class="zmdi zmdi-floppy"></i> Descargar QR</a>
                    </body>
                    </html>

                    </tr>

                </div>
            </div>
        </div>
        </div>
</div>
</body>

</html>