<!DOCTYPE html>
<html>
    <head>
    <title>Form input PHP</title>  
    </head>
    <body>
    <h2>Form input PHP</h2>
    <?php
    $nameErr = "";
    $name = "";
    if ($_SERVER["REQUEST_METHOD"]=="post") {
        if (empty($_POST['name'])) {
            $nameErr = "name must be filled in";
        } else {
            $name = $_POST['name'];
            echo "data saved successfully";
        }
    } 
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name : </label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <span class= "error"><?php echo $nameErr; ?></span><br><br>
        <input type="submit" value="Submit">
    </form>
    </body>
</html>