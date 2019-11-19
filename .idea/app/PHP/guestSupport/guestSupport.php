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
    <p><span class="currentLink">&gt;&gt Support</span></p>
    <p><a href="../payment/payment.php">&gt; Bezahlung</a></p>
    <p><a href="../checkOut/checkOut.php">&gt; CheckIn</a></p>
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
    <h2>Support-Tickets erstellen</h2>
    <a href="../guestSupport/showSupportTickets.php">Alle Support-Tickets anzeigen</a>
    <form name="eingabe" action="guestSupportConfirmation.php" method="get">
        <table style="width:45%,">
            <tr>
                <td>Ticket-ID: </td>
                <td><input type="text" name="issueid"></td>
            </tr>
            <tr>
                <td>Status: </td>
                <td><input type="text" name="status"></td>
            </tr>
            <tr>
                <td>Kategorie: </td>
                <td><input type="text" name="category"></td>
            </tr>
            <tr>
                <td>Ersteller: </td>
                <td><input type="text" name="creator"></td>
            </tr>
            <tr>
                <td>Gast: </td>
                <td><input type="text" name="guest"></td>
            </tr>
            <tr>
                <td>SVNR: </td>
                <td><input type="text" name="svnr"></td>
            </tr>
            <tr>
                <td>Verantwortlicher Mitarbeiter: </td>
                <td><input type="text" name="responsible"></td>
            </tr>
            <tr>
                <td>Beschreibung des Anliegens: </td>
                <td><input type="text" name="issueDescription"></td>
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
