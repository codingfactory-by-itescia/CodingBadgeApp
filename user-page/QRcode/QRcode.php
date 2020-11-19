<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mobile Factory - QRCode</title>
	    <link rel="stylesheet" href="QRcode.css">
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
	</head>
	<body>
		<div class="container animate__animated animate__fadeIn">
            <div class="header">
                <div class="title color">
                    <img src="../../img/codinglogo.png" id="codinglogo" alt="Logo Coding Factory"/>
                    <h1>Mobile Factory</h1>
                </div>
                <div class="media color">
                    <h4 id="qrcode"><a href="QRcode.php" class="middle">QR Code</a></h4>
                    <h4 id="emploitps"><a href="../emploi-tps/Emploitps.php" class="middle">Emploi du temps</a></h4>
                    <h4 id="actus"><a href="../actualite_u/actu.html" class="middle">Actualités</a></h4>
                    <h4 id="profil"><a href="../profil/profil.php" class="middle">Profil</a></h4>
                    <h4 id="contacts"><a href="../contact_user/contact_user.php" class="middle">Contacts</a></h4>
                </div>
            </div>
            <div class="frame">
                <div class="center">
                    <canvas id="qr-code"></canvas>
                    <h1 id="qr-result"></h1>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
        <script type="text/javascript" src="QRcode.js"></script>
    </body>
</html>