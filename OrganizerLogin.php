<!DOCTYPE html PUBLIC "//W3W//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Organizer Login</title>
		<link href="login.css" type="text/css" rel="stylesheet" />
		<link href="default.css" type="text/css" rel="stylesheet" />
		<script src="defaul.js" type="text/javascript"></script>
		
		include("database.php");
		$db = open_db();
		
		
	</head>
	
	<body>
		<div id="banner">
			<?php include("banner.php"); ?>
		</div>
		<div id="contentBox">
			<div id="content">
				<div id = "login">
					<h1 id = "log">Login</h1>
					<form>
						User Name:<input type="text" name="contactName"><br />
						<br></br>
						Password:<input type="text" name="contactEmail"><br />
						<br></br>
						
						<input type="submit" value="Submit">
					</form>
					<p>
						<a href="http://mrwgifs.com/wp-content/uploads/2013/12/Wat-Meme-Grandma-Travels-Through-a-Space-Of-Confusion.gif">Forgot password?</a>
					</p> 
				</div>
				<div id = "or">
					<p> OR </p>
				</div>
				<div id = "signup">
					<h1 id = "sign">Sign Up</h1>
					<form>
										Company Name: <input type="text" name="companyName"><br />
						<br></br>
						Contact Name: <input type="text" name="contactName"><br />
						<br></br>
						Contact Email:<input type="text" name="contactEmail"><br />
						<br></br>
						Contact Phone Number:<input type="text" name="contactPhoneNumber"><br />
						<br></br>
						Website:<input type="text" name="website"><br />
						<br></br>
						<p> Social Media: </p>
						<!--<input type="radio" name="s?t" value="Student">Facebook
						<input type="radio" name="s?t" value="Professor">Twitter<br /> -->
						<input type="checkbox" name="socialMedia" value="Facebook">Facebook
						<input type="checkbox" name="socialMedia" value="Twitter">Twitter
						<input type="checkbox" name="socialMedia" value="Google+">Google+
						<input type="checkbox" name="socialMedia" value="Instagram">Instagram</br>
						<p>Others: <input type="text" name="others"></p>
						
						<input type="submit" value="Submit">
					</form>
				</div>
			</div>
		</div>
		<div id="footerLogin">
		</div>
		<div id="filler">
		</div>
		<div id="footer">
			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
