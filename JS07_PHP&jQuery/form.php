<!DOCTYPE html>
<html>
    <head>
      <title>Form input PHP</title>  
    </head>
    <BODY>
        <h2>Form input PHP</h2>
        <form method="post" action="form_process.php">
            <label for="name">Name : </label>
            <input type="text" name="name" id="name" required ><br><br>
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" required ><br><br>
            <input type="submit" name="submit" value="submit"><br><br> 
        </form>
    </BODY>
</html>