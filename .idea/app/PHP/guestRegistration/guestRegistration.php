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
        <a href="../guestRegistration/showRegistrations.php">Alle Gastregistrierungen anzeigen</a>
    <p><i>
  Bitte geben Sie die folgenden Daten ein:
    </i></p>
    <!-- TODO Pflichtfelder, php-Verarbeitung, css-Styling -->
    <form name="eingabe" action="guestRegister.php" method="get">
        <table style="width:45%,">
            <tr>
                <td>Sozialversicherungsnummer: </td>
                <td><input type="text" name="svnr"></td>
            </tr>
            <tr>
                <td>Vorname: </td>
                <td><input type="text" name="firstname"></td>
            </tr>
            <tr>
                <td>Familienname: </td>
                <td><input type="text" name="lastname"></td>
            </tr>
            <tr>
                <td>Geburtsdatum: </td>
                <td><input type="date" name="birthdate"></td>
            </tr>
            <tr>
                <td>Adresse: </td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Postleitzahl: </td>
                <td><input type="text" name="postalcode"></td>
            </tr>
            <tr>
                <td>Stadt: </td>
                <td><input type="text" name="city"></td>
            </tr>
            <tr>
                <td>Land: </td>
                <td><input type="text" name="country"></td>
            </tr>
            <tr>
                <td>Telefonnummer: </td>
                <td><input type="text" name="telephone"></td>
            </tr>
            <tr>
                <td>E-Mail-Adresse: </td>
                <td><input type="email" name="emailaddress"></td>
            </tr>
        </table>
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
