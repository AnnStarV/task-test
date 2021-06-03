<?php
    if(isset($_POST['reg-subm'])) {
        $db = mysqli_connect("localhost", "root", "root", "autorization");
        $query = $db->query("SELECT `name` FROM accounts  WHERE `name` = '".$_POST["reg-name"]."' AND 
        `password` = '".$_POST["reg-pswd"]."' AND `email` = '".$_POST["email"]."' LIMIT 1");
        if ($query->num_rows == 0) {
            $query = $db->query("INSERT INTO accounts (`name`, `email`, `password`)
            VALUES ('".$_POST["reg-name"]."','".$_POST["reg-pswd"]."','".$_POST["email"]."')");
        }
        else $query = false;
    }
    if (!isset($_COOKIE['ResultReg'])) {
        if($query) {
            $value = "success";
            setcookie("ResultReg", $value);
        }
        else{
            $value = "fail";
            setcookie("ResultReg", $value);
        }
    }
    header("Location: index.html");
    exit(); 
?>