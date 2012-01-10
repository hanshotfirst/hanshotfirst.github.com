
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

			table th, table a { white-space: pre; }

			th {
				padding: 0 20px 0 0;
				text-align: left;
				font-weight: bold;
				vertical-align: top;
			}

			tr.child, tr.child th { font-size: 14px; }

			tr.child th {
				font-weight: normal;
				text-indent: .5em;
			}

			a {
			    color: #CF5935;
				text-decoration: none;
			}

			a:hover { color: #E67654; }

			code,pre { font-family: Consolas, monospace; }

			/* --- header --- */

			header ul { color: #666; }
			header p { font-size: 18px; background-color:#eee; display:inline-block;}


			/* --- footer --- */

			footer {
				margin: 25px 0 0 0;
				font-size: 12px;
				opacity: .75;
			}
			
		</style>

		<script>
			function limitText(limitField, limitNum) {
    		if (limitField.value.length > limitNum) {
        	limitField.value = limitField.value.substring(0, limitNum);
    			}
			}
		</script>
		
	</head>
	
	<body>
		<header>
			<h1>SendTrash.com</h1>
		    	<p>
		    		<p>A proxy to talk trash on twitter.
		    		<a href="https://twitter.com/#!/sendtrash">@SendTrash</a> will tweet your trash.</p>
		    	</p>
		</header>

		<section>
			
			<h2>Thanks! Your trash tweet will be posted to twitter in 15 minutes.</h2>
			<p><a href="index.html">Submit another trash tweet</a></p>

			<p>The tweet will enter a <em>queue</em>,<br> then after <em>15 minutes</em> it will get posted by the <a href="https://twitter.com/#!/sendtrash">@SendTrash</a> twitter proxy.</p>

			<ul>
		    	<li>Please use responsibly.</li>
		    </ul>
		</section>

		<section>
		<br><br><br>
		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'profile',
				  rpp: 6,
				  interval: 30000,
				  width: 400,
				  height: 300,
				  theme: {
				    shell: {
				      background: '#333333',
				      color: '#ffffff'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#000000',
				      links: '#cf5935'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: false,
				    live: false,
				    behavior: 'all'
				  }
				}).render().setUser('SendTrash').start();
			</script>
		</section>

		<footer>
		updated: 01.09.12
		</footer>



		  
					
	</body>
</html>