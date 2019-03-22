#!/usr/local/bin/php
<?php

/*login page to get to private.php*/

    ob_start();
    session_name('TYE');
	session_start();
	$_SESSION['loggedin'] = false;

include 'header.php';

//validate hashed password 

function validate($password, &$error) {
		$fin = fopen('password.txt', 'r');
		$true_pass = fgets($fin);
		fclose($fin);
		$true_pass = trim($true_pass);

		if(password_verify($password, $true_pass)) {
			$_SESSION['loggedin'] = true;
			header('Location: private.php');
		}
		else {
			$error = true;
		}
	}

//if password doesn't work

$error = false;
	if (isset($_POST['pass'])) {
		validate($_POST['pass'], $error);
	}

?>
		<form method = "POST" action ="<?php echo $_SERVER['PHP_SELF']; ?>">
			<fieldset id="password">
				Password:
				<input type="password" name="pass" />
				<br>
			</fieldset>
			<div id ="buttons">
				<input type="submit" value="Log In" />
                <input type="reset" value="Reset" />
				<?php isset($_POST['Log In']) ?>
				<?php if($error) { ?>
					<p>Incorrect password. Please try again.</p> <?php
				} ?>
			</div>

<?php

include 'footer.php';

?>