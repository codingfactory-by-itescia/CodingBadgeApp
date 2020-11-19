<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mobile Factory - QRCode</title>
	    <link rel="stylesheet" href="QRcode_a.css">
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
                    <a href="../admin.php"><h1>Mobile Factory</h1><a>
                </div>
                <div class="media color">
                    <h4 id="qrcode"><a href="" class="middle">QR Code</a></h4>
                    <h4 id="emploitps"><a href="../emploi-tps-a/Emploitps_a.php" class="middle">Emploi du temps</a></h4>
                    <h4 id="actus"><a href="../actualite_a/actu.html" class="middle">Actualités</a></h4>
                    <h4 id="profil"><a href="../profil_a/profil_a.php" class="middle">Profil</a></h4>
                    <h4 id="contacts"><a href="../contact_a/contact_admin.php" class="middle">Contacts</a></h4>
                </div>
            </div>
            <div class="frame">
                <div class="center">
                    <canvas id="qr-code"></canvas>
                    <h1 id="qr-result"></h1>
                </div>
            </div>
		</div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js">
        </script>
        <script type="text/javascript" src="QRcode_a.js"></script>
    </body>
</html>