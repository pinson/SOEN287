<?php
session_save_path("/www/home/a/a_webbe/s287/lab3/temp"); //added this because I didn't have the appropriate rights in the temp folder.
session_start();
ob_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>Lab 3 - Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel ="stylesheet" type="text/css" href="login.css" />
</head>
<body>

        <div id="login">
                <h4>Login Credentials</h4>
                <form method="POST" action="login.php">
                <table>
                        <tr>
                                <th>User:</th>
                                <td><input type="text" name="xuser" /><td>
                        </tr>
                        <tr>
                                <th>Password:</th>
                                <td><input type="password" name="xpass" /><td>
                        </tr>
                </table>
                <div><?php
                        function errmsg() {
                                printf('<p id="err">Wrong Username or Password!</p>');
                        }
                ?></div>
                <p id="button"><input name="login" type="submit" value="Login" /></p>
                </form>
         </div>

<?php

function logout() {
        $user = "";
        $pass = "";
        $goodpass = "";
}

if (isset($_POST['login'])) {
        $user = $_REQUEST["xuser"];
        $pass = $_REQUEST["xpass"];

        $document = new DOMDocument();
        $document->validateOnParse = true;
        $document->load("login.xml");

        $usertag = $document->getElementById($user);
        $goodpass = "";

        if (isset($usertag)) {
                foreach ($usertag->childNodes as $tag) {
                        if ($tag->nodeType == 1 && $tag->tagName == "password") {
                                $goodpass = $tag->nodeValue;
                        }
                }
        }
        //print "$goodpass";
        //print "$user . $pass";
        if (sha1($pass) == $goodpass) {
                //print "<p>Good Password</p>";
                //$_SESSION['logged'] = $user;
                header("location: index.php");
                exit();
        } else {
                //print "<p>Bad Password</p>"; //debug
                errmsg();
                $_SESSION["username"] = "";
        }
}

if(isset($_POST['logout'])) {
        logout();
}

?>
</body>
</html>
