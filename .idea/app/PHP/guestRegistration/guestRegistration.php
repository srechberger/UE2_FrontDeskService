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
		<p><span class="currentLink">&gt;&gt Registrierung</span></p>
        <p><a href="../checkIn/checkIn.php">&gt; CheckIn</a></p>
        <p><a href="../guestSupport/guestSupport.php">&gt; Support</a></p>
        <p><a href="../payment/payment.php">&gt; Bezahlung</a></p>
        <p><a href="../checkOut/checkOut.php">&gt; CheckOut</a></p>
        <p><a href="../TEST/test.php">TEST</a></p>
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
    <p><i>
  Bitte geben Sie die folgenden Daten ein:
    </i></p>
    <!-- TODO Pflichtfelder, php-Verarbeitung, css-Styling -->
    <form name="eingabe" action="guestRegister.php" method="get">
    Sozialversicherungsnummer: <input type="text" name="svnr"><br />
    Vorname: <input type="text" name="firstname"><br />
    Familienname: <input type="text" name="lastname"><br />
    Geburtsdatum: <input type="date" name="birthdate"><br />
    Adresse: <input type="text" name="address"><br />
    Postleitzahl: <input type="text" name="postalcode"><br />
    Stadt: <input type="text" name="city"><br />
    Land: <input type="text" name="country"><br />
    Telefonnummer: <input type="text" name="telephone"><br />
    E-Mail-Adresse: <input type="email" name="emailadress"><br />
    <br />
    <input type="submit" value="absenden" />
</form>
	</div>
	<div id="footer">
		<p>
	KV Service Engineering, ...Namen..., WS 19/20, erstellt 2019
		</p>
	</div>
</body>
</html>
