<?php
try {
    $connection = new PDO(
        'mysql:host=localhost;dbname=hotelfrontdesk',
        'hoteladmin',
        'fABtYll48NiRt8Jb'
    );

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // INSERT guests
    $sql =
        "INSERT INTO guest 
                (svnr, firstname, lastname, birthdate, address, 
                postalcode, city, country, telephone, emailaddress) 
          VALUES (\"1234567890\", \"Max\", \"Mustermann\", \"1990-01-01\", \"Mustergasse 5\",
                \"1234\", \"Wien\", \"Österreich\", \"0664123456789\", \"test@gmail.com\");
          INSERT INTO guest 
                (svnr, firstname, lastname, birthdate, address, 
                postalcode, city, country, telephone, emailaddress) 
          VALUES (\"1234\", \"Manuela\", \"Musterfrau\", \"1960-05-05\", \"Musterstraße 10\",
                \"4020\", \"Linz\", \"Österreich\", \"06640000000\", \"abc@gmx.at\")";

    $connection->exec($sql);

    // INSERT stays
    $sql =
        "INSERT INTO stay 
                (guestsvnr, roomnumber, arrivaldate, checkoutdate, openpositions, 
                payments, distributedkeys, returnedkeys, checkedout) 
          VALUES (\"123457890\", \"101\", \"2019-11-24\", \"2019-11-27\", \"500\",
                \"0\", \"3\", \"0\", \"0\");
          INSERT INTO stay
                (guestsvnr, roomnumber, arrivaldate, checkoutdate, openpositions,
                payments, distributedkeys, returnedkeys, checkedout) 
          VALUES (\"1234\", \"201\", \"2019-11-20\", \"2019-11-22\", \"600\",
                \"600\", \"2\", \"2\", \"1\");
          INSERT INTO stay
                (guestsvnr, roomnumber, arrivaldate, checkoutdate, openpositions,
                payments, distributedkeys, returnedkeys, checkedout) 
          VALUES (\"1234\", \"621\", \"2019-11-24\", \"2019-11-25\", \"700\",
                \"0\", \"1\", \"0\", \"0\")";

    $connection->exec($sql);

    // INSERT issues
    $sql = "INSERT INTO issue 
                (issueID, issueStatus, issueCategory, issueCreator, guestName, 
                guestsvnr, responsibleEmployee, request) 
            VALUES (\"1\", \"Offen\", \"Manager\", \"ABC\", \"Mustermann\",
                \"123457890\", \"Schlierenzauer\", \"Rabatt angefordert\");
            INSERT INTO issue 
                (issueID, issueStatus, issueCategory, issueCreator, guestName, 
                guestsvnr, responsibleEmployee, request) 
            VALUES (\"2\", \"In Arbeit\", \"Maintenance\", \"XYZ\", \"Musterfrau\",
                \"1234\", \"Kraft\", \"Kaputte Glühbirne\");";

    $connection->exec($sql);

    echo("Die Testdaten wurden erfolgreich eingefügt");

} catch (PDOException $ex) {
    echo("Es gab einen Fehler beim INSERT der Testdaten ".$ex);
}
?>