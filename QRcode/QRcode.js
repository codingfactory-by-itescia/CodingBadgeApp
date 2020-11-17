let id = localStorage.getItem("id");
let user = document.getElementById("test");

var qr;
(function () {
    qr = new QRious({
        element: document.getElementById('qr-code'),
        size: 200,
        value: 'https://studytonight.com'
    });
})();

function generateQRCode() {
    var qrtext = id;
    user.innerHTML = id;
    qr.set({
        foreground: 'black',
        size: 200,
        value: qrtext
    });
}
generateQRCode();