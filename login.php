<?php
    if(isset($_POST['login-subm'])) {
        $db = mysqli_connect("localhost", "root", "root", "autorization");
        $query = $db->query("SELECT `name` FROM accounts  WHERE `name` = '".$_POST["login-login"]."' AND 
        `password` = '".$_POST["login-psw"]."'LIMIT 1");
    }
    if (!isset($_COOKIE['ResultLog'])) {
        if($query) {
            $value = $_POST["login-login"];
            setcookie("ResultLog", $value);
        }
        else{
            $value = "fail";
            setcookie("ResultLog", $value);
        }
    }
    header("Location: index.html");
    exit(); 

?>