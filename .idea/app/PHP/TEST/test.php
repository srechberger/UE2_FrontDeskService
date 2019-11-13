<html>
<head>
	<title>Hotel Frontdesk App</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../../settings.css" type="text/css">
</head>
<body>
	<div id="header">
		<h1>Hotel Frontdesk</h1>
		<p>
	Funktionalitäten im Rahmen des Hotel Frontdesks
		</p>
	</div>
	<div id="navigation">
		<h2>Navigation</h2>
    <p><a href="../hotelApp.php">&gt; Home</a></p>
		<p><a href="../guestRegistration/guestRegistration.php">&gt; Registrierung</a></p>
		<p><a href="#">&gt; Check In</a></p>
		<p><a href="#">&gt; Support</a></p>
		<p><a href="#">&gt; Bezahlung</a></p>
    <p><a href="#">&gt; Check Out</a></p>
		<p><a href="test.php">TEST</a></p>
		<p>
	Über diese Menüpunkte können die diversen PHP-Skripte angesteuert werden.</p>
	</div>
	<div id="info">
		<h2>Info</h2>
		<p>
	Die gesamte Website wurde erstellt unter Berücksichtung, dass nur möglichst normales HTML, PHP und CSS verwendet
  wird.
    </p>
	</div>
	<div id="content">
    <h2>Registrierung</h2>
    <p>
  Nachfolgend finden Sie das Formular zur Registrierung von Gästen.
    </p>
    <form name="eingabe" action="formular_verarbeiten.php" method="get">
		    <p><strong>Wie geht es dir?</strong></p>
		    <input type="radio" name="zustand" value="1" /> Super <br />
		    <input type="radio" name="zustand" value="2" /> Gut <br />
		    <input type="radio" name="zustand" value="3" /> Wie immer <br />
		    <input type="radio" name="zustand" value="4" /> Geht so <br />
		    <input type="radio" name="zustand" value="5" /> Schlecht <br />

		    <br />
		    <input type="submit" value="absenden" />
		</form>
		<h2>test.php</h2>
		<p>vom Google Drive</p>
		<p><b>
			<?php
			    try{
			        $connection = new PDO(
			            'mysql:host=localhost;dbname=php_hotelapp',
			            'root',
			           '9+PDzp=;E9s9r&mv'
			        );
			        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			        $sql = "SELECT * FROM guest";
			        foreach($connection->query($sql) as $row) {
			            echo($row['svnr']. " ". $row['firstname']);
			        }
			    } catch (PDOException $ex) {
			        echo("An error occurred: ".$ex);
			    }
			?>
		</b></p>
	</div>
	<div id="footer">
		<p>
	KV Service Engineering, ...Namen..., WS 19/20, erstellt 2019
		</p>
	</div>
</body>
</html>
