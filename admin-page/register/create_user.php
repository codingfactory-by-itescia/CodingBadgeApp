<?php
 include('../../functions.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mobile Factory - Gestion</title>
	<link rel="stylesheet" type="text/css" href="register.css">
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
                <h4 id="qrcode"><a href="../QRcode_a/QRcode_a.php" class="middle">QR Code</a></h4>
                <h4 id="emploitps"><a href="../emploi-tps-a/Emploitps_a.php" class="middle">Emploi du temps</a></h4>
                <h4 id="actus"><a href="../actualite_a/actu.html" class="middle">Actualités</a></h4>
                <h4 id="profil"><a href="../profil_a/profil_a.php" class="middle">Profil</a></h4>
                <h4 id="contacts"><a href="../contact_a/contact_admin.php" class="middle">Contacts</a></h4>
        	</div>
        </div>
		<div class="frame">
			<div class="formulaire">
			<form method="post" action="create_user.php" id="form">	
				<?php echo display_error(); ?>
				<div class="input-group">
					<label>Username</label>
					<input type="text" name="username" value="<?php echo $username; ?>">
				</div>
				<div class="input-group">
					<label>Email</label>
					<input type="email" name="email" value="<?php echo $email; ?>">
				</div>
				<div class="input-group">
					<label>User type</label>
					<select name="user_type" id="user_type">
						<option value="user">Eleve</option>
						<option value="admin">Admin</option>
					</select>
				</div>
				<div class="input-group">
					<label>Password</label>
					<input type="password" name="password_1">
				</div>
				<div class="input-group">
					<label>Confirm password</label>
					<input type="password" name="password_2">
				</div>
				<div class="input-group">
					<button type="submit" class="btn" name="register_btn">Créer Utilisateur</button>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="register.js"></script>
</body>
</html>