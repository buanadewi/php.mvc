<?php
    include_once 'dbh.php';
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
    <?php
        $sql =  "SELECT name, pesan FROM comment;";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);

        if ($resultcheck > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "User Name : " , $row['name']. "<br>";
                echo "Comment User: " , $row['pesan']. "<br>";
                echo "</br>";
            }
        }
    ?>

    <form action="/test-web/ProjectDatabase/profileee.php" method="post">

    <br>

    <button>HOME</button>

    </form>

</body>
</html>