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
    <p><a href="../payment/payment.php">&gt; Payment</a></p>
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
    <h2>Support-Tickets erstellen</h2>
    <a href="../guestSupport/showSupportTickets.php">Alle Support-Tickets anzeigen</a>
    <form name="eingabe" action="guestSupportConfirmation.php" method="get">
        <table style="width:45%,">
            <tr>
                <td>Status: </td>
                <td><select name="status">
                    <option value="Offen">Offen</option>
                    <option value="In Arbeit">In Arbeit</option>
                    <option value="Erledigt">Erledigt</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Kategorie: </td>
                <td><select name="category">
                        <option value="Front-Desk">Front-Desk</option>
                        <option value="Restaurant">Restaurant</option>
                        <option value="Cleaning">Cleaning</option>
                        <option value="Maintenance">Maintenance</option>
                        <option value="Manager">Manager</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Ersteller: </td>
                <td><input type="text" name="creator" required></td>
            </tr>
            <tr>
                <td>Gast: </td>
                <td><input type="text" name="guest" required></td>
            </tr>
            <tr>
                <td>SVNR: </td>
                <td><input type="number" name="svnr" required></td>
            </tr>
            <tr>
                <td>Verantwortlicher Mitarbeiter: </td>
                <td><input type="text" name="responsible" required></td>
            </tr>
            <tr>
                <td>Beschreibung des Anliegens: </td>
                <td><input type="text" name="issueDescription" required></td>
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
