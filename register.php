<?php
    if(isset($_POST['reg-subm'])) {
        $db = mysqli_connect("localhost", "root", "root", "autorization");
        $query = $db->query("INSERT INTO accounts (`name`, `email`, `password`)
        VALUES ('".$_POST["reg-name"]."','".$_POST["reg-pswd"]."','".$_POST["email"]."')");
    }
    if($query){
        echo "javascript:document.getElementById('answer').innerHTML=success";
    }
    else{

    }
    header("Location: index.html");
    exit(); 
?>