<?php
session_save_path("/www/home/a/a_webbe/s287/lab3/temp");
session_start();
ob_start();
$confirm = $_SESSION['logged'];
/*if(! isset($confrim)) {
        header("location: login.php");
        exit();
}*/

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>Lab 3 - Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<form name="logout" action="login.php"><p id="logout"><input name="logout" type="submit" value="logout" /></p></form>

</body>
</html>
