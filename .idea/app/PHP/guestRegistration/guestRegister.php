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
    <br />
    <a href="../guestRegistration/guestRegistration.php">Neuen Gast anlegen</a>
    <br />
    <br />
    <a href="../guestRegistration/showRegistrations.php">Registrierungs-Übersicht</a>
    <br />
    <br />
  <?php
  try{
    $svnr = $_GET['svnr'];
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $birthdate = $_GET['birthdate'];
    $address = $_GET['address'];
    $postalcode = $_GET['postalcode'];
    $city = $_GET['city'];
    $country = $_GET['country'];
    $telephone = $_GET['telephone'];
    $emailaddress = $_GET['emailaddress'];

    $connection = new PDO(
        'mysql:host=localhost;dbname=hotelfrontdesk',
        'hoteladmin',
        'fABtYll48NiRt8Jb'
    );
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO guest 
                (svnr, firstname, lastname, birthdate, address, 
                postalcode, city, country, telephone, emailaddress) 
                VALUES (\"$svnr\", \"$firstname\", \"$lastname\", \"$birthdate\", \"$address\",
                \"$postalcode\", \"$city\", \"$country\", \"$telephone\", \"$emailaddress\")";
    // echo $sql;
    $connection->exec($sql);
    echo("Anfrage erfolgreich ausgeführt! Registrierung abgeschlossen!");
  } catch (PDOException $ex) {
    echo("Es gab einen Fahler bei der Bearbeitung: ".$ex);
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