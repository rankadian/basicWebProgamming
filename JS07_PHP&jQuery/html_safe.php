<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input dari form
    $input = $_POST['input'];

    // Cegah HTML Injection dengan htmlspecialchars
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    // Tampilkan input yang sudah aman
    echo "result input is safe: " . $input;
}
?>
<!DOCTYPE html>
<head>
    <title>Basic HTML Injection Protection</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="POST" action="">
        <label for="input"Input teks:</label>
        <input type="text" id="input" name="input">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
