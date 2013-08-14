<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title id="header ">Secret Log </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style1.css" />
	<script type="text/javascript" src="jquery.js"></script>
		
</head>

<body>
	<img id= "img1" src="Iron_man.jpg"  alt="ironman">
		<div id="header">
			<h1 class="text" > Here is my secret log</h1>
		</div>

		<div id="log">
		</div>
		
	<div id="form">
		<h2>My secret Log</h2>
		<form id="user" action="?"  method="post">
			<textarea id="myTextarea"  rows="4" cols="50" form="form"> enter text here </textarea>
            <button type="button" onclick="displayResult()">Add entry</button>
			<input type="submit" value="Reload page">
            <!--<input name="logout" type="submit"onsubmit="login.php" value="logout" />-->
		</form>
        
	</div>
     <div id="form1">   
        <form name="logout" action="login.php">
           <input name="logout" type="submit" value="logout" />
        </form> 
     </div>

<?php

?>
</body>
</html>