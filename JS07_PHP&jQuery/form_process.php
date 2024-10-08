<?php
if ($_SERVER["REQUEST_METHOD"]=="post") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "Name : ".$name. "<br>";
    echo "Email : ".$email;
} 
?>