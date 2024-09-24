<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lecture Information</title>
<style>
    table {
        width: 50%;
        margin: 20px auto;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
    }
    table, th, td {
        border: 1px solid black;
    }
    th {
        background-color:cadetblue; 
        color: white; 
        padding: 10px;
    }
    td {
        padding: 10px;
        text-align: left;
    }
    caption {
        font-size: 1.5em;
        margin-bottom: 10px;
    }
</style>
</head>
<body>
    <?php
    $lecture = [
        'name' => 'Elok Nur Hamdana',
        'domicile' => 'Malang',
        'gender' => 'Woman'
    ];
    ?>
    
    <table>
        <caption>Lecture Information</caption>
        <tr>
            <th>Name</th>
            <td><?php echo $lecture['name']; ?></td>
        </tr>
        <tr>
            <th>Domicile</th>
            <td><?php echo $lecture['domicile']; ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php echo $lecture['gender']; ?></td>
        </tr>
    </table>
</body>
</html>
