<!DOCTYPE html>
<html>
    <head>
        <title>Multiupload Document</title>
    </head>
<body>
    <h2>Upload Document</h2>
    <form action="upload_process.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">
        <input type="submit" value="submit">
    </form>
</body>
</html>