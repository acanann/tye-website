#!/usr/local/bin/php
<?php

/*private page for our volunteers, requires password to get in*/

    ob_start();
    session_name('TYE');
	session_start();

//check if logged in correctly

    if (!isset($_SESSION['loggedin']) or !$_SESSION['loggedin']) { ?>
        <html lang="en">
            <head>
                <title>Go away!</title>
            </head>
            <body>
                <p>Go back and log in.</p>
            </body>
        </html> 
<?php
    }
    else { 
        
        include 'privateheader.php';
?>
    <p>
        Dear TYEtans,
        <br>
        Here is repository of everything you will need and more! Please let us know if you have any questions, comments, or concerns.
        <br>
        MWL,
        <br>
        TYE LSHIP
        <br>
    </p>
    <p id="weather"> 
        This is the current weather at Camp River Glen: 
        <span id = "temp">
        </span>
    </p>
    
<?php

include 'footer.php';

?>
<?php
    }
?>