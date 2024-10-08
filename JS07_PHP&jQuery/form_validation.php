<!DOCTYPE html>
<html>
<head>
    <title>Input Form with Validation</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
    $("form").submit(function(event){
    event.preventDefault(); 

    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val(); // Ambil input password
    var errors = [];

    // Validasi nama
    if (name === "") {
        errors.push("Name must be filled");
    }

    // Validasi email
    if (email === "") {
        errors.push("Email must be filled");
    } else if (!validateEmail(email)) {
        errors.push("Email is not valid");
    }

    // Validasi password (minimal 8 karakter)
    if (password.length < 8) {
        errors.push("Password must be at least 8 characters long");
    }

    // Tampilkan kesalahan jika ada
    if (errors.length > 0) {
        $("#result").html(errors.join("<br>"));
    } else {
        // Kirim data ke server menggunakan AJAX
        $.post("form_validation.php", { name: name, email: email, password: password }, function(data) {
            $("#result").html(data); 
        });
    }
});
    // Fungsi untuk memvalidasi format email
    function validateEmail(email) {
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});
    </script>
</head>
<body>
    <h1>Input Form with Validation</h1>
    <form method="post" action="">
        <label for="name">Name :  </label>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email :  </label>
        <input type="text" id="email" name="email"><br>

        <label for="password">Password :</label>
        <input type="password" id="password" name="password"><br>


        <input type="submit" value="Submit">
    </form>
    <div id="result" style="color: red;"></div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"]; // Ambil input password
    $errors = array();

    if (empty($name)) {
        $errors[] = "Name must be filled";
    }
    if (empty($email)) {
        $errors[] = "Email must be filled";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is not valid";    
    }
    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";    
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
