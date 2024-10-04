<?php

function connection() {
    $host = "localhost:3306";
    $user = "root";
    $pass = "root";
    $bd = "portfolio_projects";

    $connect = mysqli_connect($host, $user, $pass, $bd); // Add database name here

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $connect;
}

$connect = connection();

$sql = "SELECT * FROM alumnos"; 
$query = mysqli_query($connect, $sql);

if (!$query) {
    die("Query failed: " . mysqli_error($connect));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #000;
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }

        .izq {
            text-align: left;
        }
    </style>
</head>
<body>
    <table class="container">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Technologies</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($query)): ?> 
            <tr>
                <td class="izq"><?= $row['ID'] ?></td> 
                <td class="izq"><?= $row['Nombre'] ?></td>
                <td><?= $row['Email'] ?></td>
                <td><?= $row['Technologies'] ?></td> 
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>