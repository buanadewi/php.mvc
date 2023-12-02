<?php
include('koneksiMVC.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Delete</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        table {
            text-align: center;

        }

        * {
            text-align: center;
            padding,
            margin: 0px;
        }

        caption {
            text-transform: uppercase;
            font-weight: bold;

        }

        .mid {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .center,
        .center2 {
            font-size: 25px;
            padding: 5px;

        }

        .center :hover {
            background-color: green;
            color: white;
            transition: 0.5s;
        }

        .center2 :hover {
            background-color: red;
            color: white;
            transition: 0.5s;
        }

        .center a,
        .center2 a {
            text-decoration: none;
            color: black;
            text-transform: capitalize;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    $arrayValue = $array['name'];
    $cod = $mysqli->query("SELECT * from comment where $arrayValue -> name");
    while (
        $paw21 = mysqli_fetch_array(
            $cod
        )
    ) {
        echo "<div class='mid'>
<table cellpadding='10' align='center' border='1' textAlign='center'>
    <caption>Yakin mo dihapus?</caption>
    <tr>
    <th>NAME</th>
    <th>COMMENT</th>
    </tr>

    <tr>
        <td>$_GET[no]</td>
        <td>$paw21[name]</td>
        <td>$paw21[pesan]</td>
    </tr>
    
    
</table>
<h2>Confirm?</h2>
<div class= 'center'>
    <a href='delete-comment-data.php?name=$_GET[name]'>yes</a>
</div>
<div class= 'center2'>
<a href='checkUser.php'>no</a>
</div>



</div>";
    }
    ?>

</body>

</html>