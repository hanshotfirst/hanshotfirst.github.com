
<?php

/* These are the variable that tell the subject of the email and where the email will be sent.*/

$emailSubject = 'sendtrash';
$mailto = 'zero.to.sexy.swag@gmail.com';

/* These will gather what the user has typed into the fieled. */

$nameField = $_POST['name'];
$emailField = $_POST['email'];
$question = $_POST['question'];

/* This takes the information and lines it up the way you want it to be sent in the email. */

$body = <<<EOD
$question
EOD;

$headers = "From: $email\r\n"; // This takes the email and displays it as who this email is from.
$headers .= "Content-type: text/html\r\n"; // This tells the server to turn the coding into the text.
$success = mail($mailto, $emailSubject, $body, $headers); // This tells the server what to send.

?>



<!doctype html>
<html lang=en>

	<head>
		<meta charset=utf-8>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>SendTrash.com</title>
		<meta name="description" content="Send Trash, Trash talking proxy for twitter">
		<meta name="author" content="Stefan">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
				
		<style>

			/* --- reset and general styles --- */

			body {
				font-family: Serif;
				line-height: 20px;
				font-size: 18px;
				color: #333;
				background: #fff;
				margin:  20px auto;
				max-width: 540px;
			}

			h1,h2 {
				font-family: Sans-Serif;
				letter-spacing: -.04em;
				color: #333;
			}

			h1 { font-size: 70px; line-height: 70px; }
			h2 { font-size: 30px; line-height: 40px; }

			h1,h2,p,ul,table { margin: 0 0 15px 0;  }

			a {
			    color: #CF5935;
				text-decoration: none;
			}

			a:hover { color: #E67654; }
			
		</style>
	</head>
	
	<body>

			
			<h2>Thanks! Your trash tweet will be posted to twitter in 15 minutes.</h2>
			<p><a href="http://stefanhahn.us/sendtrash/exp/iframe_form.html">Submit another trash tweet</a></p>

		
	</body>
</html>