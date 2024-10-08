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
                <option value="apple">Apple</option>
                <option value="mango">Mango</option>
                <option value="banana">Banana</option>
                <option value="orange">Orange</option>
            </select>
            <br>
            <lable>Choose ur favorite color : </lable>
            <br>
            <input type="checkbox" name="color[]" value="red">Red<br>
            <input type="checkbox" name="color[]" value="blue">Blue<br>
            <input type="checkbox" name="color[]" value="green">Green<br>
            <br>
            <lable>Choose ur gender : </lable>
            <br>
            <input type="radio" name="gender" value="boy">Boy<br>
            <input type="radio" name="gender" value="girl">Girl<br>
            <br>
            <input type="submit" value="submit">
        </form>
        <div id="result">

        </div>
        <script>
            $(document).ready(function(){
                $("#myForm").submit(
                    function(e){
                        e.preventDefault();
                        var formData = $("#myForm").serialize();
                        $.ajax({
                            url:"form_next.php",
                            type: "POST",
                            data: formData,
                            success: function(response){
                                $("#result").html(response);
                        }
                    });
                });
            });
        </script>
    </body>
</html>