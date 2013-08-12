<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Lab 3 - login</title>
	<link rel ="stylesheet" type="text/css" href="login.css" />
</head>
<body>

	<?php

	$user = "";
	if (isset($_REQUEST["user"])) {
        	$user = $_REQUEST["user"];
	}

	$pass = "";
	if (isset($_REQUEST["pass"])) {
		$pass = $_REQUEST["xpass"];
	}
	
	$document = new DOMDocument();
	$document->validateOnParse = true;
	$document->load("login.xml");

	$usertag = $document->getElementById($user);
	$goodpass = "";
	
	if (isset($usertag)) {
		foreach ($usertag->childNodes as $tag) {
			if ($tag->nodeType == 1 && $tag->tagName == "password") {
				$goodpass = $tag->nodevalue;
			}
		}
	}

	if (sha1($user . $pass) == $goodpass) {
		print "<p>Good Password</p>";
		$_SESSION["username"] = $user;
	} else {
       		$errmsg = '<p id="err"></p>';
		$doc = new DOMDocument();
		$doc->loadHTML($errmsg);
		$node->nodeValue = 'Incorrect Username / Password!';
	        $_SESSION["username"] = "";
	}

	?>

	<div id="login">
		<h4>Login Credentials</h4>
		<form method="POST" action=? id="frm">
		<table>
			<tr>
				<th>User:</th>
				<td><input type="text" name="user" /><td>
			</tr>
			<tr>
				<th>Password:</th>
				<td><input type="password" name="pass" /><td>
			</tr>
		</table>
		</form>
		<p id="err"></p>
		<p id="button"><input type="submit" value="Login" /></p>
	</div>
</body>
</html>
