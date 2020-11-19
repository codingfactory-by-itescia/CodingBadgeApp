<?php 
	include('functions.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mobile Factory</title>
    <link rel="stylesheet" href="style_login.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="title color">
                <img src="img/codinglogo.png" id="codinglogo" alt="Logo Coding Factory" onclick="displayPage('home')" />
                <h1 onclick="displayPage('home')">Mobile Factory</h1>
            </div>
            <div class="media color">
                <div class="login">
                    <h4 id="log" onclick="displayPage('signin')">Connectez-vous!</h4>
                </div>

            </div>
        </div>
        <div class="frame">
            <div id="home">
                <div class="imagephone">
                    <img src="img/AppMobile.png" id="mobilewhite" alt="Image Application Mobile">
                </div>
                <div class="txtframe">
                    <h1>La Coding Factory, partout avec vous.</h1>
                    <button id="download">Download Now!</button>
                </div>
            </div>
            <div id="signin">
                <div class="infos">
                    <h3>Connectez vous pour accéder aux informations concernant la Coding !</h3>
                </div>
                <form method="post" action="index.php">
		            <?php echo display_error(); ?>
		            <div class="input-group">
			            <label>Identifiant</label>
			            <input type="text" name="username" >
		            </div>
		            <div class="input-group">
		            	<label>Mot de passe</label>
		            	<input type="password" name="password">
		            </div>
		            <div class="input-group">
			            <button type="submit" class="btn" name="login_btn" onclick="saveName()">Login</button>
		            </div>
	            </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script_login.js"></script>
</body>

</html>