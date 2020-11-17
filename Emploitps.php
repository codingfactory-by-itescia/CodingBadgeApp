<!DOCTYPE html>
<html>
<head>
	<title>Mobile Factory/emploi du temps</title>
	<link rel="stylesheet" type="text/css" href="Emploitps.css">
	<meta charset="utf-8" />
</head>
<body>

	<div id="mainflex">
		<button onclick=neweventDisplay() id="newevent">Ajouter un évenement</button>
		<div id="divNewEvent">
			<p id="erreur"></p>
			<p>inserez la date de l'evenement:</p>
			<input type="date" name="date" id="eventDate">
			<input type="time" name="time" id="eventTime">
			<input type="text" name="event" id="eventText">
			<button onclick=newevent()>ok</button>
		</div>
		<div id="date"></div>
		<div id="demo"></div>
		<canvas id="test"></canvas>
	</div>
	

	<?php echo "Ceci est du texte"; ?>

	<script type="text/javascript" src="Emploitps.js"></script>
</body>
</html>