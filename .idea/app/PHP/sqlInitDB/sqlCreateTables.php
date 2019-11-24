<?php
try {
    $connection = new PDO(
        'mysql:host=localhost;dbname=hotelfrontdesk',
        'hoteladmin',
        'fABtYll48NiRt8Jb'
    );

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL CREATE TABLE GUEST
    $sql = "CREATE TABLE guest (
        svnr DECIMAL(10,0), 
        firstname VARCHAR(100) NOT NULL,
        lastname VARCHAR(100) NOT NULL, 
        birthdate DATE NOT NULL, 
        address VARCHAR(100) NOT NULL,
        postalcode INT NOT NULL, 
        city VARCHAR(100) NOT NULL, 
        country VARCHAR(100) NOT NULL,
        telephone VARCHAR(100) NOT NULL, 
        emailaddress VARCHAR(100) NOT NULL, 
        PRIMARY KEY(svnr)
    ) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;";

    $connection->exec($sql);

    // SQL CREATE TABLE STAY
    $sql = "CREATE TABLE stay (
        guestsvnr DECIMAL(10,0) REFERENCES Guest(svnr),
        roomnumber VARCHAR(10) NOT NULL, 
        arrivaldate DATE, 
        checkoutdate DATE NOT NULL,
        openpositions DECIMAL(9,2) NOT NULL, 
        payments DECIMAL(9,2) NOT NULL,
        distributedkeys INT NOT NULL, 
        returnedkeys INT NOT NULL,
        checkedout BOOLEAN NOT NULL, 
        PRIMARY KEY(guestsvnr,arrivaldate)
    ) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;";

    $connection->exec($sql);

    // SQL CREATE TABLE ISSUE
    $sql = "CREATE TABLE issue (
        issueID INT, 
        issueStatus VARCHAR(100) NOT NULL,
        issueCategory VARCHAR(100) NOT NULL, 
        issueCreator VARCHAR(100),
        guestName VARCHAR(100) REFERENCES Guest(lastname),
        guestsvnr DECIMAL(10,0) NOT NULL REFERENCES Guest(svnr),
        responsibleEmployee VARCHAR(100),
        request VARCHAR(200) NOT NULL,
        PRIMARY KEY(issueID)
    ) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;";

    $connection->exec($sql);

    echo("Die CREATE TABLE Statements wurden erfolgreich ausgeführt");

} catch (PDOException $ex) {
    echo("Es gab einen Fehler bei CREATE TABLES ".$ex);
}
?>