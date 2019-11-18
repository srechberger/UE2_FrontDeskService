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
    <p><span class="currentLink">&gt;&gt CheckIn</span></p>
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
    <h2>CheckIn</h2>
    <a href="../checkIn/showCheckIns.php">Alle CheckIns anzeigen</a>
    <p><i>
            Bitte geben Sie die folgenden Daten ein:
        </i></p>
    <!-- TODO Pflichtfelder, php-Verarbeitung, css-Styling -->
    <form name="eingabe" action="checkInConfirmation.php" method="get">
        <table style="width:45%">
            <tr>
                <td>Sozialversicherungsnummer: </td>
                <td><input type="text" name="svnr"></td>
            </tr>
            <tr>
                <td>ZimmerNr: </td>
                <td><input type="text" name="roomNo"></td>
            </tr>
            <tr>
                <td>Datum von: </td>
                <td><input type="date" name="dateFrom"></td>
            </tr>
            <tr>
                <td>Datum bis: </td>
                <td><input type="date" name="dateTo"></td>
            </tr>
            <tr>
                <td>Gesamtpreis: </td>
                <td><input type="text" name="openPayments"></td>
            </tr>
            <tr>
                <td>Anzahl Zimmerschlüssel: </td>
                <td><input type="number" name="roomKeys" value="2"></td>
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
