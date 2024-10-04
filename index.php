<?php 

function connection() {
    $host = "localhost:3306";

    $user = "root";

    $pass = "root";

    $bd = "portfolio_projects";

    $connect = mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            margin-left: 50px;
            margin-top: 50px;
            gap: 20px;
        }

        form a {
            list-style-type: none;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <form action="../CRUD-completo/index.php" method="get">
        <a href="../CRUD-completo/alta.php">Alta Alumno</a>
        <a href="../CRUD-completo/database.php">Listar alumnos</a>
        <a href="../CRUD-completo/actualizar.php">Actualizar datos</a>
        <a href="../CRUD-completo/baja.php">Borrar alumnos</a>
    </form>
</body>
</html>