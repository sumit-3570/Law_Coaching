<?php

    include "connection.php";

    include "support.php";
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }
  


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Forgot Password </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#e66465, #719);
        }

        .my_bg {
            background: transparent;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: linear-gradient(#e66465, #9198e5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }

        .login-box form a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #03e9f4;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
        }

         .login-box a:hover {
            background: #03e9f4;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #03e9f4,
            0 0 25px #03e9f4,
            0 0 50px #03e9f4,
            0 0 100px #03e9f4;
        } 

        .login-box a span {
            position: absolute;
            display: block;
        }

        .login-box a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #03e9f4);
            animation: btn-anim1 1s linear infinite;
        }

        .btn {
            padding: 10px 20px;
            background-color: #03e9f4;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h6> <?php echo $loginError; ?> </h6>
        <h2> Forgot Password </h2>
        <form method="post">
            <div class="text-center text-white" style="width: 300px;">
                <div class="h5 my_bg">Password Reset</div>
                <div class="card-body px-5">
                    <?php
                        if($otp == '') {
                    ?>
                        <p class="card-text py-2">
                            Enter your Registered Email address and we'll send you an email with 4 digit otp to reset your password.
                        </p>
                        <div class="form-outline">
                            <input type="email" id="typeEmail" name="registered email" required class="form-control my-3" />
                            <label class="form-label" for="typeEmail">Email input</label>
                        </div>

                    <?php
                        } else {
                    ?>

                        <p class="card-text py-2">
                            Enter OTP here
                        </p>
                        <div class="form-outline">
                            <input type="text" id="typeEmail" name="admin_otp" required class="form-control my-3" />
                            <label class="form-label" for="typeEmail"> Enter OTP </label>
                        </div>

                    <?php
                        }
                    ?>

                    <button class="btn btn-info" id="submit" value="send" name="submit" type="submit"> Send </button>
                </div>
            </div>
            
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- <script>

    $('form').submit(
        function() {

            let formData = new FormData(this);

            $.ajax(
                {
                    url: "forgot_password_ajax.php",
                    type: "post",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(resp) {
                        

                    }
                }
            )

            return false;
        }
    )

</script> -->
</html>