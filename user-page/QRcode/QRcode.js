let name = localStorage.getItem("name");
let user = document.getElementById("qr-result");


var qr;
(function () {
    qr = new QRious({
        element: document.getElementById('qr-code'),
        size: 200,
        value: 'https://studytonight.com'
    });
})();

function generateQRCode() {
    let qrtext = name;
    qr.set({
        foreground: 'black',
        size: 200,
        value: qrtext
    });
}
generateQRCode();