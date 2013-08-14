<?php
// session_save_path("/www/home/a/a_webbe/s287/lab3/temp");
session_start();
ob_start();
$confirm = $_SESSION['logged'];
global $orderDate;
$orderDate = time();
/*if(! isset($confrim)) {
        header("location: login.php");
        exit();
}*/
 $xml = simplexml_load_file("text.xml"); //This line will load the XML file.
                //$name = $_POST["fname"]
 $sxe = new SimpleXMLElement($xml->asXML());

 //In this line it create a SimpleXMLElement object with the source of the XML file.
//The following lines will add a new child and others child inside the previous child created.
//$log = $sxe->addChild("log");
//$log->addChild("text", "Nairoby");
//This next line will overwrite the original XML file with new data added
// $sxe->asXML("text.xml");  
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
print("<ol>");
foreach ($document->getElementsByTagName("text") as $text) {
	$content = $text->nodeValue;
	$content = filter_var($content, FILTER_SANITIZE_SPECIAL_CHARS);
	print( "<li>$content</li>\n");
}
if(isset($_POST['textentry'])){
                    // print "YUP";
                    $newentry = $_POST['usertext'];
                    //$xml = simplexml_load_file("text.xml");
                    //$sxe = new SimpleXMLElement($xml->asXML()
                    $ed = $newentry .date(' m/d/Y h:i:s a',$orderDate);
                    $log = $sxe->addChild("log");
                    $log->addChild("text", $ed);
                    $sxe->asXML("text.xml");  
}
            ?>
		</div>
		
	<div id="form">
		<h2>My secret Log</h2>
		<form id="user" action="index.php"  method="post">
			<input id="myTextarea" name="usertext"  style="width: 300px" value="enter text here" />
            <input type="submit" name="textentry" value="Add Entry" />
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