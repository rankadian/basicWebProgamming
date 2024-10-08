<!DOCTYPE html>
<html>
    <head>
        <title>Input Form with Validation</title>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    </head>
    <body>
        <h1>Input Form with Validation</h1>
        <form id="myForm" method="post" action="form_validation.php">
        <label for="name">Name : </label>
        <input type="text" id="name" name="name">
        <span id="name-error" style="color: red;"></span><br>

        <label for="email">Email : </label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        <input type="submit" value="submit">
        </form>

        <script>_
            $(document).ready(function(){
                $('#myForm').submit(function(event) {
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var valid = true;

                    if (name === "") {
                        $("#name-error").text("name must be filled");
                    } else {
                        $("#name-error").text("");
                    }

                    if (email === "") {
                        $("#email-error").text("email must be filled");
                    } else {
                        $("#email-error").text("");
                    }
                    if (valid) {
                        (!event.preventDefault());
                    }
                });
            });
        </script>
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