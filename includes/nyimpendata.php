<?php
    include_once 'dbh.php';
    $name = $_POST['name'];
    $comment = $_POST['pesan'];
    $sql = "INSERT INTO comment (name, pesan) VALUES ('$name', '$comment');";
    mysqli_query($conn, $sql);
    echo "Data berhasil disimpan";
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

    <form action="nampildata.php" method="post">

    <br>

    <button>Lihat Komen</button>

    </form>

</body>
</html>