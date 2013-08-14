<?php
session_save_path("/www/home/a/a_webbe/s287/lab3/temp");
session_start();
ob_start();
$confirm = $_SESSION['logged'];
$xml = simplexml_load_file("text.xml"); //This line will load the XML file.

$sxe = new SimpleXMLElement($xml->asXML()); //In this line it create a SimpleXMLElement object with the source of the XML file.
//The following lines will add a new child and others child inside the previous child created.
$log = $sxe->addChild("log");
$log->addChild("log", "Nairoby");
$log->addChild("log", "Del Rosario");
//This next line will overwrite the original XML file with new data added
$sxe->asXML("text.xml");  
?>
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
            <?php
                $document = new DOMDocument();
                $document->validateOnParse = true;
                $document->load("text.xml");
    foreach ($document->getElementsByTagName("log") as $post) {
	$content = $log->nodeValue;
	$content = filter_var($content, FILTER_SANITIZE_SPECIAL_CHARS);
	print "<li>$content</li>\n";
}
            ?>
		</div>
		
	<div id="form">
		<h2>My secret Log</h2>
		<form id="user" action="?"  method="post">
			<textarea id="myTextarea"  rows="4" cols="50" form="form"> enter text here </textarea>
            <button type="button" >Add entry</button>
			<input type="submit" onsubmit="reload()"value="Reload page">
            <!--<input name="logout" type="submit"onsubmit="login.php" value="logout" />-->
		</form>
        
	</div>
     <div id="form1">   
        <form name="logout" action="login.php">
           <input name="logout" type="submit" value="logout" />
        </form> 
     </div>


</body>
</html>