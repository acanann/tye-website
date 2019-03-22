#!/usr/local/bin/php
<?php

/*roster of volunteers in database*/

    ob_start();
    session_name('TYE');
	session_start();

include 'privateheader.php';

try{
    
    $mydb = new SQLite3('tyeroster.db');
}
catch(Exception $ex){
    echo $ex->getMessage();
}

/** create database
$statement = 'CREATE TABLE IF NOT EXISTS tyeroster(campName TEXT, status TEXT, email TEXT, phoneNumber INTEGER);';

$run = $mydb->exec($statement);

insert into database

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Shosti', 'HC', 'shostakovichwoodsey@gmail.com', 9497016681);";
$run = $mydb->exec($statement);

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Blubber', 'UniCorps', 'atnguyen0912@gmail.com', 7149899077);";
$run = $mydb->exec($statement);

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Folding Chair', 'CLIMB', 'jonling88@gmail.com', 6262156907);";
$run = $mydb->exec($statement);

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Calypso', 'Volunteer', 'nayellysan82@gmail.com', 3238341576);";
$run = $mydb->exec($statement);

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Pine', 'Volunteer', 'ma.austin.1028@gmail.com', 9095471722);";
$run = $mydb->exec($statement);

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Nyx', 'SPD', 'nyxwoodsey@gmail.com', 3104998243);";
$run = $mydb->exec($statement);

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Toffee', 'HC', 'toffeewoodsey@gmail.com', 5626820669);";
$run = $mydb->exec($statement);

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Strawberry', 'HC', 'strawberry.woodsey@gmail.com', 8315857917);";
$run = $mydb->exec($statement);

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Chipotle', 'UniCorps', '97ksanchez@gmail.com', 3104086990);";
$run = $mydb->exec($statement);

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Melon', 'CLIMB', 'pereirayee.m@gmail.com', 3217473393);";
$run = $mydb->exec($statement);

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Pine', 'Volunteer', 'ma.austin.1028@gmail.com', 9095471722);";
$run = $mydb->exec($statement);

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Bubbles', 'Volunteer', 'jazzgarcia2811@gmail.com', 8185217654);";
$run = $mydb->exec($statement);

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Zuko', 'Volunteer', 'alex.aid.do@gmail.com', 9724008780);";
$run = $mydb->exec($statement);

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Melody', 'Volunteer', 'guadalupestar2929@gmail.com', 8184768142);";
$run = $mydb->exec($statement);

$statement = "INSERT INTO tyeroster (campName, status, email, phoneNumber) VALUES ('Spongey', 'Volunteer', 'amyvandyken@gmail.com', 9493467730);";
$run = $mydb->exec($statement);

*/

?>

    <section>
        <div>
            <h2>TYE 2019 Roster</h2>
                <p class="explainer">
                   MAKE SOME FRIENDSSSSSS!!! 
                </p>
        </div>
    </section>
            
<?php

//select values from database and run it
$statement = 'SELECT campName, status, email, phoneNumber FROM tyeroster ORDER BY status, campName;';
$run = $mydb->query($statement);

$iterator = 0;

if ($run) { //print database
    while($row = $run->fetchArray()){
        echo ++$iterator, '. ', $row['campName'], ' -- ', $row['status'], ' -- ', $row['email'], ' -- ', $row[phoneNumber], '<br/>';     
    }
}

$mydb->close();

include 'footer.php';

?>