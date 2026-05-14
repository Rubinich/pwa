<?php require "skripta.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th, td{
            border: 1px solid black;
            padding: 0.5em;
            text-align: left;
        }
        .mladi{
            background-color: blue;
            color: white;
        }
        .stariji{
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>ime</th>
            <th>prezime</th>
            <th>spol</th>
            <th>telefon</th>
            <th>email</th>
            <th>godine</th>
            <th>hobi</th>
        </tr>
        
        <?php while($row = mysqli_fetch_array($result)): ?>
        <tr class="<?= $row['godine'] < 33 ? 'mladi' : 'stariji' ?>">
            <td><?= $row['id'] ?></td>
            <td><?= $row['ime'] ?></td>
            <td><?= $row['prezime'] ?></td>
            <td><?= $row['spol'] ?></td>
            <td><?= $row['telefon'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['godine'] ?></td>
            <td><?= $row['hobi'] ?></td>
        </tr>
        <?php endwhile ?>
    </table>
</body>
</html>