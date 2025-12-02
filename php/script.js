const QRCode = require('qrcode');

function generarQR(texto) {
    QRCode.toDataURL(texto, function (err, url) {
        if (err) console.error(err);
        console.log(url);
        document.getElementById('codigoQR').src = url;
    });
}
