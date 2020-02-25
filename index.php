<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome</h1>
    <form action="saveuser.php" method="post">
    <input type="text" name="name">
    <input type="email" name="emain">
    <input type="password" name="password">
    <button>submit</button>
    </form>
</body>
</html>