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
    <p><span class="currentLink">> CheckIn</span></p>
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
    <h2>Support-Ticket-Erstellung</h2>
    <br />
    <?php
    try{
        $issueID = $_GET['issueid'];
        $issueStatus = $_GET['status'];
        $issueCategory = $_GET['category'];
        $issueCreator = $_GET['creator'];
        $guestName = $_GET['guest'];
        $guestsvnr = $_GET['svnr'];
        $responsibleEmployee = $_GET['responsible'];
        $request = $_GET['issueDescription'];

        $connection = new PDO(
            'mysql:host=localhost;dbname=hotelfrontdesk',
            'hoteladmin',
            'fABtYll48NiRt8Jb'
        );
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO issue 
                (issueID, issueStatus, issueCategory, issueCreator, guestName, 
                guestsvnr, responsibleEmployee, request) 
                VALUES (\"$issueID\", \"$issueStatus\", \"$issueCategory\", \"$issueCreator\", \"$guestName\",
                \"$guestsvnr\", \"$responsibleEmployee\", \"$request\")";
        // echo $sql;
        $connection->exec($sql);
        echo("Anfrage erfolgreich ausgeführt! Ticket wurde erstellt!");
    } catch (PDOException $ex) {
        echo("Es gab einen Fahler bei der Bearbeitung: ".$ex);
    }
    ?>
</div>
<div id="footer">
    <p>
        KV Service Engineering, ...Namen..., WS 19/20, erstellt 2019
    </p>
</div>
</body>
</html>