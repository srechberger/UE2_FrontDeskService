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
    <a href="../checkIn/checkIn.php">CheckIns durchführen</a>
    <p><i>
            Alle gespeicherten CheckIns:
        </i></p>
    <!-- TODO Pflichtfelder, php-Verarbeitung, css-Styling -->
    <table style="width:45%;
           font-family: Verdana, Arial;
	       font-size: 9px;
	       color: #C5C6C7;">
        <tr>
            <th>SVNR</th>
            <th>Raumnummer</th>
            <th>Ankunftsdatum</th>
            <th>Check-Out Datum</th>
            <th>Offene Summe</th>
            <th>Zahlungen</th>
            <th>Ausgegebene Zimmerschlüssel</th>
            <th>Zurückgegebene Zimmerschlüssel</th>
            <th>Ausgechecked?</th>
        </tr>
        <?php
        try{
            $connection = new PDO(
                'mysql:host=localhost;dbname=hotelfrontdesk',
                'hoteladmin',
                'fABtYll48NiRt8Jb'
            );
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM stay";
            foreach($connection->query($sql) as $row) {
                echo "<tr>";
                echo(
                    "<td>" . $row['guestsvnr']. "</td>" .
                    "<td>" . $row['roomnumber']. "</td>" .
                    "<td>" . $row['arrivaldate']. "</td>" .
                    "<td>" . $row['checkoutdate']. "</td>" .
                    "<td>" . $row['openpositions']. "</td>" .
                    "<td>" . $row['payments']. "</td>" .
                    "<td>" . $row['distributedkeys']. "</td>" .
                    "<td>" . $row['returnedkeys']. "</td>" .
                    "<td>" . $row['checkedout']. "</td>"
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
