<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <style>
        h1 {
            text-align: center;
        }

        form {
            display: grid;
            padding: 1em;
            background: #f9f9f9;
            border: 1px solid #c1c1c1;
            margin: 2rem auto 0 auto;
            max-width: 600px;
            padding: 1em;
        }

        form input {
            background: #fff;
            border: 1px solid #9c9c9c;
        }

        form button {
            background: lightgrey;
            padding: 0.7em;
            width: 100%;
            border: 0;
        }

        form button:hover {
            background: gold;
        }

        label {
            padding: 0.5em 0.5em 0.5em 0;
        }

        /* input {
            padding: 0.7em;
            margin-bottom: 0.5rem;
        } */

        input .right {
            float: right;
        }

        input:focus {
            outline: 3px solid gold;
        }

        .submit {
            text-align: right;
            padding-right: 60px;
            font-weight: bold;
            font-size: 28px;
        }

        .submit :hover {
            background-color: gold;
            font-weight: bold;

        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['status']) == 'admin') {
        if (isset($_GET['name'])) {
            include "KoneksiMVC.php";
            $mod = $mysqli->query("SELECT * FROM comment where name = '$_GET[name]'");
            while (
                $edit = mysqli_fetch_array(
                    $mod
                )
            ) {
                echo " <h1>EDIT</h1>
        <form action='edit-comment-action.php?name=$edit[name]' method='post'>
            <p>
                <label>NAME</label>
                <input class='right' type='text' value='$edit[name]' name='name'>
            </p>    
             <p>
                <label>COMMENT</label>
                <input class='right' type='text' value='$edit[pesan]' name='pesan'>
            </p>

            <p class='submit'><input type='submit' name='update' value='UPDATE'></p>
        </form>";
            }


        } 
        else {
            header('location:detail.php');
        }


    } else {
        echo "<h1> CAN'T ACCESS THIS PAGE BECAUSE YOU ARE NOT AN ADMIN";
    }


    ?>


</body>

</html>