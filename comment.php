<?php
include_once 'includes/dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <title>Document</title>
</head>
<body>
    <form action = "includes/nyimpendata.php" method="POST">
        <label for="name">Name</label>
        <input type="text" name = "name" placeholder = "Name">
        
        <label for="pesan">Comment</label>
        <textarea id="pesan" name="pesan" placeholder = "Pesan"></textarea>

        <button type = "submit" name = "submit">Submit</button>
    </form>

    <form action="includes/nampildata.php" method="post">

    <br>

    <button>Lihat Komen</button>

    </form>
</body>
</html>
