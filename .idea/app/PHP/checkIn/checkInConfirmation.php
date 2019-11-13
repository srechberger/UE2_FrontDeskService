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
    <br />
    DB INSERT STATEMENT <br />
    INSERT INTO tbl_checkIn (svnr, roomNo, dateFrom, dateTo, openPayments, payments, roomKeys, rommKeysReturned, checkOut) <br />
    VALUES (
    <?php echo $_GET['svnr']; ?>,
    <?php echo $_GET['roomNo']; ?>,
    <?php echo $_GET['dateFrom']; ?>,
    <?php echo $_GET['dateTo']; ?>,
    <?php echo $_GET['openPayments']; ?>,
    0,
    <?php echo $_GET['roomKeys']; ?>,
    0,
    false
    ); <br />
    <br />
    CheckIn DONE!
</div>
<div id="footer">
    <p>
        KV Service Engineering, ...Namen..., WS 19/20, erstellt 2019
    </p>
</div>
</body>
</html>