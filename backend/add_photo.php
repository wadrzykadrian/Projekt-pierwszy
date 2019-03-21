<?php
require_once "base_connect.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Photo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>!-->
</head>
<body>
    <form action="" method="POST">
        <input type="file" name="photos">
        <label for="description"> Opis </label>
        <input type="text" name="description">
        <label for="visibility"> Widoczność </label>
        <input type="checkbox" name="visibility">
        <label for="sequence"> Kolejność </label>
        <input type="text" name="sequence">
        <label for="category"> Kategoria </label>
        <input type="text" name="category">
    </form>
</body>
</html>