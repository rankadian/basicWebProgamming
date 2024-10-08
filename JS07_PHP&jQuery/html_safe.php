
<!DOCTYPE html>
<html>
<head>
    <title>Basic HTML Injection Protection</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="POST" action="">
        <label for="input">Input ur name in here:</label>
        <input type="text" id="input" name="input"><br><br>

        <label for="email">Input ur email in here:</label>
        <input type="text" id="email" name="email"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input dari form
    $input = $_POST['input'];

    // Cegah HTML Injection dengan htmlspecialchars
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    // Tampilkan input yang sudah aman
    echo "result input is safe: " . $input;
}
if (isset($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email is valid: " . $email;
} else {
    echo "<BR>Invalid email format!";
}

?>


