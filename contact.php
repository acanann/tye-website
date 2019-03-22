#!/usr/local/bin/php
<?php

/*contact page for submitting an email using php*/

include 'header.php';

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <p>
        Please contact us with any questions, comments or concerns, and one of us will get back to you shortly! If you are interested in applying to our session, please click here: <a href="http://www.unicamp.org/apply">Apply</a>
    </p>
    <p>
        Name: <input type="text" name="name"/>
    </p>
    <p>
        Email: <input type="email" name="email"/>
    </p>
    <p>
        Message: 
    </p>
    <textarea name="message" rows="8" cols="40"></textarea>
    <br>
    <input type="submit" value = "Send"/> 
    <input type="reset" value = "Reset"/>
</form>

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$form="From: $name \n Message: $message";
$recipient = "shostakovichwoodsey@gmail.com";
$subject = "TYE Web Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $form, $mailheader) or die("Error!");

include 'footer.php';

?>