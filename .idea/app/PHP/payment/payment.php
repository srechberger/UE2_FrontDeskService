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
    <p><a href="../checkIn/checkIn.php">&gt; CheckIn</a></p>
    <p><a href="../guestSupport/guestSupport.php">&gt; Support</a></p>
    <p><span class="currentLink">&gt;&gt Payment</span></p>
    <p><a href="../returnKeys/returnKeys.php">&gt; Key-Rückgabe</a></p>
    <p><a href="../checkOut/checkOut.php">&gt; CheckOut</a></p>
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
    <h2>Payment</h2>
    <p><i>
            Bitte geben Sie die folgenden Daten ein:
        </i></p>
    <!-- TODO Pflichtfelder, php-Verarbeitung, css-Styling -->
    <form name="eingabe" action="paymentConfirmation.php" method="get">
        <table style="width:45%">
            <tr>
                <td>Sozialversicherungsnummer: </td>
                <td><input type="text" name="svnr"></td>
            </tr>
            <tr>
                <td>Zahlungseingang: </td>
                <td><input type="text" name="payment"></td>
            </tr>
        </table>
        <br />
        <input type="submit" value="absenden" />
    </form>
</div>
<div id="footer">
    <p>
        KV Service Engineering WS 19/20 | Stefan Rechberger, Marie Heng, Carina Hofstadler, Samuel Jaburek, Thomas Jost
        | erstellt 2019
    </p>
</div>
</body>
</html>
