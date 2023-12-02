<?php
    include('koneksiMVC.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .artikel {
            margin-left: 500px;
            padding-bottom: 400px;
        }
    </style>
</head>
<body>
    <?php
    $squery = $mysqli->query("SELECT filename FROM pdf_data");
    $result = mysqli_fetch_array($squery)
        ?>
        <embed class="artikel" type="application/pdf" src="pdf/<?php echo $result['filename']; ?>" width="800" height="600"></embed>
        <?php
    ?>
</body>
</html>