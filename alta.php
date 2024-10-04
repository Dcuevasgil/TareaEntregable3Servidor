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
</head>

<body>
    <div class="container">
        <h1>Darse de Alta</h1>
        <form action="../CRUD-completo2/database.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="technologies">Technologies</label>
                <input type="text" class="form-control" id="technologies" name="technologies" placeholder="Technologies">
            </div>
            <input type="submit" class="m-3 btn btn-primary" value="Alta">
        </form>
    </div>
</body>
</html>