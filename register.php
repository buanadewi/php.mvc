<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <style>
        h1{
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
        .submit :hover{
            background-color: gold;
            font-weight: bold;

        }

     
    </style>
</head>

<body>
    
        <h1>REGISTER</h1>
        <form action="register-action.php" method="post">
            <p>
                <label for="">USERNAME</label>
                <input class="right" type="text" name="user" required>
            </p>
            <p>
                <label for="">PASSWORD</label>
                <input class="right" type="password" name="pass" required>
            </p>
            <p>
                <label for="">NAMA LENGKAP</label>
                <input class="right" type="text" name="fullname" required>
            </p>
            <p>
                <label for="">JENIS KELAMIN</label>
                <input type="radio" name="gender" value="Pria">
                <label for="">Male</label>
                <input type="radio" name="gender" value="Wanita">
                <label for="">Female</label>
            </p>

            <p>
                <label for="">ALAMAT</label>
                <input class="right" type="text" name="address" required>
            </p>

            <p class="submit"><input type="submit" name="daftar" value="DAFTAR"></p>
        </form>



</body>

</html>