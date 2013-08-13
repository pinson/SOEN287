<?php
session_save_path("/www/home/a/a_webbe/s287/lab3/temp");
session_start(); ?>
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
                <table>
                <form method="post" action="" id="frm">
                        <tr>
                                <th>User:</th>
                                <td><input type="text" name="xuser" /><td>
                        </tr>
                        <tr>
                                <th>Password:</th>
                                <td><input type="password" name="xpass" /><td>
                        </tr>
                </form>
                </table>
                <p name="err"></p>
                <p id="button"><input name="submit" type="submit" value="Login" /></p>
        </div>

<?php

function logout() {
        $user = "";
        $pass = "";
        $goodpass = "";
}

function login() {
        $user = "";
        if (isset($_REQUEST["xuser"])) {
                $user = $_REQUEST["xuser"];
        }

        $pass = "";
        if (isset($_REQUEST["xpass"])) {
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
                print "<p>Bad Password</p>";
                $_SESSION["username"] = "";
        }
}

if(isset($_POST['submit'])) {
        login();
}

if(isset($_POST['logout'])) {
        logout();
}

?>
</body>
</html>
