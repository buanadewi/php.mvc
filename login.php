<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type="text/css">
        th {
            text-align: right;
        }

        h3 {
            text-align: center;
        }

        table {
            border: 2px solid;
            padding: 20px;
            background-color: #71C9CE;
        }

        h3 {
            font-size: 40px;
            padding-top: 10px;
        }

        th {
            font-size: 18px;
        }

        input {
            font-size: 18px;
        }
        a {
            text-decoration: none;
            font-size: 18px;
            color: black;
        }

        .register button {
            border-radius: 5px;
            font-weight: bold;
        }

        .register :hover{
            background-color: goldenrod;
            transition: 0.3s;
            font-weight: bold;
        }

        .submit input{
            font-weight: bold;
            border-radius: 5px;
           
        }

        .submit :hover{
            background-color: blue;
            color: aliceblue;
            transition: 0.5s;
            font-weight: bold;

        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        ?>

        <table cellpadding="7" cellspacing="10" align="center">
            <h3>Login</h3>
            <form action="login-action.php" method="post">
                <tr>
                    <th>Username</th>
                    <td><input type="text" id="username" name="username" required></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>

                <tr>
                    <td class="submit" colspan="2" align="right"><input type="submit" value="Login" name="login"></td>

                </tr>
                <tr>
                    <td class="register" colspan="2" align="right"><a href="register.php"><button>Register</a></button></td>
                </tr>


            </form>

        </table>
    <?php } else {
        header("location:profileee.php");
    } ?>




</body>

</html>