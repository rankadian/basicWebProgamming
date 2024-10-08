<?php
$age;
if(isset($age) && $age >= 18){
    echo "You are an adult.";
}else{
    echo "You are not an adult.";
}
$data = array("name" => "Jane", "age" => 25);
if (isset($data["name"])) {
    echo " <br>Name : ".$data["name"];
} else {
    echo "Variable 'name' is not found";
}
?>