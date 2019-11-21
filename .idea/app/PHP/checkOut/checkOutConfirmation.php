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
    <p><a href="../payment/payment.php">&gt; Bezahlung</a></p>
    <p><a href="../returnKeys/returnKeys.php">&gt; Key-Rückgabe</a></p>
    <p><span class="currentLink">&gt;&gt CheckOut</span></p>
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
    <h2>CheckOut</h2>

<?php
try {
    $id = $_GET['id'];

    $connection = new PDO(
        'mysql:host=localhost;dbname=hotelfrontdesk',
        'hoteladmin',
        'fABtYll48NiRt8Jb'
    );

    // SQL SELECT BY guestsvnr
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM stay WHERE stay.guestsvnr=$id";

    foreach ($connection->query($sql) as $row) {
        // GET openpositions
        $openpositions = $row['openpositions'];
        // GET payments
        $payments = $row['payments'];
        // GET distributedkeys
        $distributedkeys = $row['distributedkeys'];
        // GET returnedkeys
        $returnedkeys = $row['returnedkeys'];
    }

    if ($openpositions > $payments) {
        echo "Es existieren noch offene Zahlungen";

    } elseif ($distributedkeys > $returnedkeys) {
        echo "Es wurden noch nicht alle Schlüssel zurückgegeben";

    } else { // SQL-Query UPDATE checkout = TRUE
        $sql = "UPDATE stay SET checkedout=1 WHERE stay.guestsvnr=$id";
    $connection->exec($sql);
    echo("Check-Out des Gastes war erfolgreich!");
    }
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


