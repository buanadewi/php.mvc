<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECK USER</title>
    <link rel="stylesheet" href="styles.css">
    <style>
         .bck {
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include "koneksiMVC.php";
    $rs = $mysqli->query("SELECT * FROM 05_login where stats='user'");
    if ($_SESSION['status'] == 'admin') {
        ?>
        <h1>Check User</h1>
        <?php

        $countDetail = mysqli_num_rows($rs);
        if ($countDetail == 0) {
            echo "<h1> No User</h1>";
        } else {
            ?>
            <table cellpadding='10' align='center' border='1'>
                <tbody>
                    <h2>DETAIL USER</h2>
                    <tr>
                        <th>NO</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>NAMA LENGKAP</th>
                        <th>JENIS KELAMIN</th>
                        <th>ALAMAT</th>
                        <th colspan="2">ACTION</th>
                    </tr>

                    <?php
                    $dataCount = 1;
                    while (
                        $paw21 = mysqli_fetch_array(
                            $rs
                        )

                    ) {
                        echo
                            "<tr>
                        <td>$dataCount</td>
                        <td>$paw21[username]</td>
                        <td>$paw21[pass]</td>
                        <td>$paw21[nama_lengkap]</td>
                        <td>$paw21[jenis_kelamin]</td>
                        <td>$paw21[alamat]</td>
                        <div class = 'button1'>
                        <td><a href='edit.php?username=$paw21[username]'>Edit</a></td>
                        </div>
                        <div = 'button2'>
                        <td><a href= 'delete-user.php?username=$paw21[username]&no=$dataCount'>Delete</a></td>
                        </div>
                        </tr>"
                        ;

                        ++$dataCount;
                        
                    }
                    
                    ?>
                    
                </tbody>
            </table>
            

            <?php 
            // include "koneksiMVC.php";
            $comm = $mysqli->query("SELECT * FROM comment"); 
            ?>
            <table cellpadding='10' align='center' border='1'>
                <tbody>
                    <h2>COMMENT USER</h2>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>COMMENT</th>
                        <th colspan="2">ACTION</th>
                    </tr>

                    <?php
                    $dataCount = 1;
                    while (
                        $paw21 = mysqli_fetch_array(
                            $comm
                        )

                    ) {
                        echo
                            "<tr>
                        <td>$dataCount</td>
                        <td>$paw21[name]</td>
                        <td>$paw21[pesan]</td>
                        <div class = 'button1'>
                        <td><a href='edit-comment.php?name=$paw21[name]'>Edit</a></td>
                        </div>
                        <div = 'button2'>
                        <td><a href= 'delete-comment.php?username=$paw21[name]&no=$dataCount'>Delete</a></td>
                        </div>
                        </tr>"
                        ;

                        ++$dataCount;
                        
                    }
                    
                    ?>
                    
                </tbody>
            </table>
            <div class="bck"> <a href="profileee.php">BACK TO HOME</a> </div>
            <?php
        }
    }
    else {
        echo'<h1>No Access</h1>';
    }
    ?>


</body>

</html>