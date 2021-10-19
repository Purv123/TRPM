<?php
session_start();
$message = "";
if (count($_POST) > 0) {
    // $result = mysqli_query($con, "SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '" . $_POST["password"] . "'");
    // $row  = mysqli_fetch_array($result);
    if ($_POST["uname"] == 'admin' && $_POST["psw"] == 'Karma@7') {
        $_SESSION["name"] = $_POST["uname"];
    } else {
        $message = "Invalid Username or Password!";
    }
}
if (isset($_SESSION["name"])) {
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial,
                Helvetica,
                sans-serif;
                overflow: hidden;
        }

        form {
            /*border: 3px solid #f1f1f1;*/
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: gray;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .superContainer {
            margin: auto;
            width: 50%;
            /* border: 3px solid green; */
            padding: 10px;
            height: 100vh;
            position: relative;

        }

        .container {
            padding: 16px;
            margin: 0;
            position: relative;

        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 768px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }

            .container {
            padding: 16px;
            margin-top: 2rem;
            position: relative;

        }


        .superContainer {
            margin: auto;
            width: 100%;
            /* border: 3px solid green; */
            padding: 10px;
            height: 100vh;
            position: relative;

        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: gray;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }


        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
        }
        .logo {
            text-align: center;
            height: 150px;
            width: auto;
            margin-top: 3rem;
        }

        .logo a img {
            height: 75px;
            width: auto;
        }

        .logo h3 {
            margin: 15px 0 0;
            font-size: 1.75rem;
        }

        .logo h6 {
            margin: 15px 0 0;
            font-size: 1rem;
        }

        .logo a {
            color: #000;
            text-decoration: none;
            -webkit-transition: all linear .2s;
            -moz-transition: all linear .2s;
            -o-transition: all linear .2s;
            transition: all linear .2s;
            -ms-transition: all linear .2s;
        }
    </style>
</head>

<body>
    <form method="post">
        <div class="superContainer">
            <div class="logo center">
                <a href="index.php">
                    <img src="../images/logo.svg" alt="" />
                    <h3>RISK KARMA</h3>
                    <p>ENTERPRISE & THIRD-PARTY RISK MANAGEMENT</p>
                </a>
            </div>
            <div class="container">
                <div class="row">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
        </div>
    </form>

</body>

</html>