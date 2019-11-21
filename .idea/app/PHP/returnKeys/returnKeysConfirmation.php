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
    <p><a href="../payment/payment.php">&gt; Payment</a></p>
    <p><span class="currentLink">&gt;&gt Key-Rückgabe</span></p>
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
    <h2>Key-Rückgabe</h2>
    <?php
    try {
        $guestsvnr = $_GET['svnr'];
        $keys = $_GET['keys'];

        $connection = new PDO(
            'mysql:host=localhost;dbname=hotelfrontdesk',
            'hoteladmin',
            'fABtYll48NiRt8Jb'
        );

        // GET current returned keys
        $sql = "SELECT * FROM stay WHERE stay.guestsvnr=$guestsvnr AND stay.checkedout=0";

        foreach ($connection->query($sql) as $row) {
            // GET returnedkeys
            $returnedkeys = $row['returnedkeys'];
        }

        // Add current keys to returnedkeys
        $returnedkeys = $returnedkeys + $keys;

        // UPDATE returnedkeys
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE stay SET stay.returnedkeys=$returnedkeys WHERE stay.guestsvnr=$guestsvnr AND stay.checkedout=0";
        $connection->exec($sql);
        echo($keys." Schlüssel wurde(n) erfolgreich zurückgegeben!");
    } catch (PDOException $ex) {
        echo("Es gab einen Fehler bei der Bearbeitung: ".$ex);
    }
    ?>
</div>
<div id="footer">
    <p>
        KV Service Engineering WS 19/20 | Stefan Rechberger, Marie Heng, Carina Hofstadler, Samuel Jaburek, Thomas Jost
        | erstellt 2019
    </p>
</div>
</body>
</html>
