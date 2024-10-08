<!DOCTYPE html>
<html>
    <head>
        <title>This Example Form w/ PHP</title>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    </head>
    <body>
        <h2>Example Form</h2>
        <form method="POST" action="form_next.php">
            <lable for="fruit">Choose fruit : </lable>
            <select name="fruit" id="fruit">
                <option value="strawberry">Strawberry</option>
                <option value="mango">Mango</option>
                <option value="banana">Banana</option>
                <option value="dragonfruit">Dragon Fruit</option>
            </select>
            <br>
            <lable>Choose ur favorite color : </lable>
            <br>
            <input type="checkbox" name="color[]" value="red">Nude<br>
            <input type="checkbox" name="color[]" value="blue">Blue<br>
            <input type="checkbox" name="color[]" value="green">Pink<br>
            <br>
            <lable>Choose ur gender : </lable>
            <br>
            <input type="radio" name="gender" value="boy">Boy<br>
            <input type="radio" name="gender" value="girl">Girl<br>
            <br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedFruit = $_POST['fruit'];
    if (isset($_POST['color'])) {
        $selectedColor = $_POST['color'];
    } else {
        $selectedColor = [];
    }
    $selectedGender = $_POST['gender'];
    echo "The fruit u choose is : ". $selectedFruit . "<br>";
    if (!empty($selectedColor)) {
         echo "ur favorite color is : ".implode(", ",$selectedColor). "<br>";
    } else {
        echo "u dont choose ur favorite color <br>";  
    }
    echo "ur gender is : " . $selectedGender;
}
?>