<!DOCTYPE html>
<html>
    <head>
        <title>Input Form with Validation</title>
    </head>
    <body>
        <h1>Input Form with Validation</h1>
        <form method="post" action="form_validation.php">
        <label for="name">Name : </label>
        <input type="text" id="name" name="name">
        <br>

        <label for="email">Email : </label>
        <input type="text" id="email" name="email">
        <br>
        <input type="submit" value="submit">
        </form>
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $errors = array();
    if (empty($name)) {
        $errors[] = "Name must be filled";
    }
    if (empty($email)) {
        $errors[] = "Email must be filled";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = "Email is not valid";    
    }
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        echo "Form submitted successfully! Name: $name, Email: $email";
    }
}
?>