<?php
//composer require khanamiryan/qrcode-detector-decoder
require __DIR__ . "/vendor/autoload.php";

use Zxing\QrReader;

$qrcode = new QrReader('files/qr-code.png');

$text = $qrcode->text(); //return decoded text from QR Code
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>QR Code Scanner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">QR Code Scanner</h2>
            <div class="card border-0">
                <div class="card-body">
                    <img src="files/qr-code.png" class="img-fluid mx-auto d-block mb-4" alt="QR Code">

                    <h5 class="text-center mb-3">Scanned Result:</h5>
                    <p class="text-center"><?php echo $text; ?></p>
                    
                    <div class="text-center">
                        <button class="btn btn-outline-primary" onclick="location.reload();">Refresh</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>