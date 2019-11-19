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
    <p><a href="../guestRegistration/guestRegistration.php">> Registrierung</a></p>
    <p><span class="currentLink">&gt; CheckIn</span></p>
    <p><a href="../guestSupport/guestSupport.php">&gt;&gt Support</a></p>
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
    <h2>Support-Ticket-Übersicht</h2>
    <a href="../guestSupport/guestSupport.php">Support-Ticket erstellen</a>
    <p><i>
            Alle gespeicherten Support-Tickets:
        </i></p>
    <!-- TODO Pflichtfelder, php-Verarbeitung, css-Styling -->
    <table style="width:45%;
           font-family: Verdana, Arial;
	       font-size: 9px;
	       color: #C5C6C7;">
        <tr>
            <th>Ticket-ID</th>
            <th>Status</th>
            <th>Kategorie</th>
            <th>Ersteller</th>
            <th>Gast</th>
            <th>SVNR</th>
            <th>Verantwortlicher Mitarbeiter</th>
            <th>Beschreibung des Anliegens</th>
        </tr>
        <?php
        try{
            $connection = new PDO(
                'mysql:host=localhost;dbname=hotelfrontdesk',
                'hoteladmin',
                'fABtYll48NiRt8Jb'
            );
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM issue";
            foreach($connection->query($sql) as $row) {
                echo "<tr>";
                echo "<form name=\"eingabe\" action=\"ticketChanged.php\" method=\"get\">";
                echo(
                    "<td><input type=\"text\" name=\"issueID\" value =\"" . $row['issueID'] . "\" readonly style=\"width: 50px\"></td>" .
                    "<td><input type=\"text\" name=\"issueStatus\" value =\"" . $row['issueStatus'] . "\" style=\"width: 75px\"></td>" .
                    "<td><input type=\"text\" name=\"issueCategory\" value =\"" . $row['issueCategory'] . "\" style=\"width: 100px\"></td>" .
                    "<td>" . $row['issueCreator']. "</td>" .
                    "<td>" . $row['guestName']. "</td>" .
                    "<td>" . $row['guestsvnr']. "</td>" .
                    "<td><input type=\"text\" name=\"responsibleEmployee\" value =\"" . $row['responsibleEmployee'] . "\" style=\"width: 100px\"></td>" .
                    "<td>" . $row['request']. "</td>" .
                    "<td><input type=\"submit\" value=\"Änderung Speichern\" /></td>" .
                    "</form>"
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
        KV Service Engineering, ...Namen..., WS 19/20, erstellt 2019
    </p>
</div>
</body>
</html>
