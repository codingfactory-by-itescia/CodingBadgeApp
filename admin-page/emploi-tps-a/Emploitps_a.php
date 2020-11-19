<!DOCTYPE html>
<html>
<head>
	
<?php
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=event', 'root', '');

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
	<title>Mobile Factory - emploi du temps</title>
	<link rel="stylesheet" type="text/css" href="Emploitps_a.css">
	<meta charset="utf-8" />
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
                    <h4 id="emploitps"><a href="" class="middle">Emploi du temps</a></h4>
                    <h4 id="actus"><a href="../actualite_a/actu.html" class="middle">Actualités</a></h4>
                    <h4 id="profil"><a href="../profil_a/profil_a.php" class="middle">Profil</a></h4>
                    <h4 id="contacts"><a href="../contact_a/contact_admin.php" class="middle">Contacts</a></h4>
                </div>
            </div>
	<p id="hide"></p>
	<p id="hide2"></p>
	<button onclick=transmission(testDate,testHeure,testText) >yessai</button>
	<button onclick=verifDate()>verif</button>
	<div id="mainflex">
		<?php
			//recuperation de toute les dates
			$reponse = $bdd->query('SELECT * FROM evenement');
			$board = array();
			$i = 0;
			while ($donnees = $reponse->fetch()) {
			
			$board[] = $donnees['date'];
			
			
			
			$i = $i +1;
			
			}
			?>
			
			<?php
			//recuperation de toute les heures
			$reponse2 = $bdd->query('SELECT * FROM evenement');
			$board2 = array();
			$i = 0;
			while ($donnees2 = $reponse2->fetch()) {
			
			$board2[] = $donnees2['time'];
			
			
			
			$i = $i +1;
			
			}
			?>
			
			<?php
			//recuperation de toute les evenements
			$reponse3 = $bdd->query('SELECT * FROM evenement');
			$board3 = array();
			$i = 0;
			while ($donnees3 = $reponse3->fetch()) {
			
			$board3[] = $donnees3['text'];
			
			
			
			$i = $i +1;
			
			}
			?>
		<button onclick=neweventDisplay() id="newevent">Ajouter un évenement</button>
		<div id="divNewEvent">
			<p id="erreur"></p>
			<p>inserez la date de l'evenement:</p>
			<form>
				<input type="date" name="date" id="eventDate" value="date">
				<input type="time" name="time" id="eventTime" value="heure">
				<input type="text" name="event" id="eventText" value="text">
				<input type="submit" name="bouton1" value="ok">
			</form>
			<?php 

			if (isset($_POST['text'])){
				
            	//$bdd->exec('INSERT INTO evenement VALUES(date, time, text) ($_POST['date'],$_POST['heure'],$_POST['text'])');
            	echo "c'est bon";

			}




			?>
		</div>
		<div id="date"></div>
		<div id="demo"></div>
		<div id="secFlex">
			<img src="../../img/bloc.jpg" id="img">
			<div id="txt"></div>
		</div>
			
	</div>
	

	<script type="text/javascript">
		
		let testDate = <?php echo json_encode(array_values($board), JSON_FORCE_OBJECT); ?>;
		let testHeure = <?php echo json_encode(array_values($board2))?>;
		let testText = <?php echo json_encode(array_values($board3))?>;
	</script>

	<script type="text/javascript" src="Emploitps_a.js">
		
	</script>
</body>
</html>