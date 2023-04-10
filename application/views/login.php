<?php
$db_name = "fadhil";
$table_name = "user_fadhil";
$db_username = "root";
$db_password = "MyN3wP4ssw0rd";
$server_name = "localhost";
$conn = new mysqli($server_name, $db_username, $db_password, $db_name);
$sql = "SELECT username, password FROM ".$table_name." WHERE id_fadhil = ".$_GET["password"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="GET">
        <input type="text">Username
        <input type="password">Password
    </form>
</body>
</html>