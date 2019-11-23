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
    <h2>Registrierung</h2>
    <a href="guestRegistration.php">Registrierung durchführen</a>
    <p><i>
            Alle gespeicherten Gastregistrierungen:
        </i></p>
    <table style="width:45%;
           font-family: Verdana, Arial;
	       font-size: 9px;
	       color: #C5C6C7;">
        <tr>
            <th>SVNR</th>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Geburtsdatum</th>
            <th>Adresse</th>
            <th>Postzahl</th>
            <th>Stadt</th>
            <th>Land</th>
            <th>Telefonnummer</th>
            <th>E-Mailadresse</th>
        </tr>
        <?php
        try{
            $connection = new PDO(
                'mysql:host=localhost;dbname=hotelfrontdesk',
                'hoteladmin',
                'fABtYll48NiRt8Jb'
            );
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM guest";
            foreach($connection->query($sql) as $row) {
                echo "<tr>";
                echo(
                    "<td>" . $row['svnr']. "</td>" .
                    "<td>" . $row['firstname']. "</td>" .
                    "<td>" . $row['lastname']. "</td>" .
                    "<td>" . $row['birthdate']. "</td>" .
                    "<td>" . $row['address']. "</td>" .
                    "<td>" . $row['postalcode']. "</td>" .
                    "<td>" . $row['city']. "</td>" .
                    "<td>" . $row['country']. "</td>" .
                    "<td>" . $row['telephone']. "</td>" .
                    "<td>" . $row['emailaddress']. "</td>"
                );
                echo ("</tr>");
            }
        } catch (PDOException $ex) {
            echo("Es gab einen Fahler bei der Bearbeitung: ".$ex);
        }
        ?>
    </table>

</div>
<div id="footer">
    <p>
        KV Service Engineering WS 19/20 | Stefan Rechberger, Marie Heng, Carina Hofstadler, Samuel Jaburek, Thomas Jost
        | erstellt 2019
    </p>
</div>
</body>
</html>
