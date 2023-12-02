<?php
session_start();

if (isset($_SESSION['status'])) { ?>

    <html>

    <head>
        <title>Home</title>
        <style>
            .mid{
                text-align: center;
                text-transform: uppercase;
                text-decoration: underline;
            }
            a {
                text-decoration: none;
                color: black;
            }

            .cret {
                
                text-align: center;
                font-weight: bold;
            }
            .cret :hover {
                color: blue;
                transition: 0.5s;
            }



            .logout  {
                padding: 20px;
                text-transform: uppercase;
                color: red;
                text-align: center;
                font-weight: bold;
            }
            .logout :hover{
                color: white;
                background-color: red;
                transition: 0.5s;
            }
            table{text-align: center;}
        </style>
    </head>

    <body>

        <h1 class="mid">Daftar User</h1>
        <?php if ($_SESSION['status'] == 'admin') { ?>
            <div class="cret">
            
                <a href="create.php">TAMBAH USER BARU</a>
        
            </div>
        <?php } ?>
        <table cellpadding='10' align='center' border='1' >
            <tbody>
                <tr>
                    <td>NO</td>
                    <td>NAMA</td>
                    <td>UMUR</td>
                    <td>KELUHAN</td>
                    <?php

                    if ($_SESSION['status'] == 'admin') { ?>
                        <td colspan="2">ACTION</td>
                    </tr>
                <?php } ?>
                <?php
                include "koneksiMVC.php";
                $rs = $mysqli->query("SELECT * FROM daftar_user");
                $dataCount = 1;
                while (
                    $paw21 = mysqli_fetch_array(
                        $rs
                    )
                    
                ) {
                    echo
                        "<tr>
                        <td>$dataCount</td>
                        <td>$paw21[nama]</td>
                        <td>$paw21[umur]</td>
                        <td>$paw21[keluhan]</td>";
                    if ($_SESSION['status'] == 'admin') {
                        echo "<div class = 'button1'>
                        <td><a href= 'edit.php?id=$paw21[id]'>Edit</a></td>
                        </div>
                        <div = 'button2'>
                        <td><a href= 'delete-confirm.php?id=$paw21[id]&no=$dataCount'>Delete</a></td>
                        </div>
                        </tr>";
                    }
                    ++$dataCount;
                }
                
                ?>




            </tbody>
        </table>
        <div class="logout">
            
                <a href="logout.php">logout</a>
            
        </div>
    </body>

    </html>
<?php } else {
    echo 'gagal';
} ?>