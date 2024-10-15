<<<<<<< HEAD
<!DOCTYPE html>
<html>
    <head>
        <title>Multiupload Photos</title>
    </head>
<body>
    <h2>Upload Photos</h2>
    <form action="upload_process.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photos[]" multiple="multiple" accept=".jpg, .jpeg, .png, .gif">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
