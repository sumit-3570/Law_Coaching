<?php

include_once "support.php";
include_once "conn.php";


$adminEmail=$_POST['adminEmail'];
$adminPassword=$_POST['adminPassword'];
session_start();
$Login=$_POST['Login'];
if(isset($Login)) {
	$sel_admin_sign="SELECT * FROM admin_sign WHERE admin_sign_email ='$adminEmail' and admin_sign_password='$adminPassword'";
	$exe_admin_sign=mysqli_query($conn,$sel_admin_sign);
	$fetch_admin_sign=mysqli_num_rows($exe_admin_sign);
	if($fetch_admin_sign == 1) {
		$fetch_data=mysqli_fetch_assoc($exe_admin_sign);
		
		$admin_sign_id=$fetch_data['admin_sign_id'];
		 
		$_SESSION['admin_sign_id']=$admin_sign_id;
		
		
		header("location:home.php");
	}else {
		$loginError="Please correct the credentionals";
	}

}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Login Form </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		html {
			height: 100%;
		}
		body {
			margin:0;
			padding:0;
			font-family: sans-serif;
			background:  background-color: #DC2424;  /* fallback for old browsers */
     background: -webkit-linear-gradient(to right, #4A569D, #DC2424);  /* Chrome 10-25, Safari 5.1-6 */
     background: linear-gradient(to right, #4A569D, #DC2424); /
		}

		.login-box {
			position: absolute;
			top: 50%;
			left: 50%;
			width: 400px;
			padding: 40px;
			transform: translate(-50%, -50%);
			background:  background-color: #DC2424;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #4A569D, #DC2424);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #4A569D, #DC2424); /;
			box-sizing: border-box;
			box-shadow: 0 15px 25px rgba(0,0,0,.6);
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
			top:0;
			left: 0;
			padding: 10px 0;
			font-size: 16px;
			color: #fff;
			pointer-events: none;
			transition: .5s;
		}

		.login-box .user-box input:focus ~ label,
		.login-box .user-box input:valid ~ label {
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
		.btn{
			padding: 10px 20px;
			background-color: #03e9f4;
			border: none;
			cursor: pointer;
		}

		.loginerror {
			color: red;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="login-box">
		<h6 class="loginerror"> <?php echo $loginError; ?> </h6>
		<h2>Login</h2>
		<form method="post">
			<div style="color: red;"></div>
			<div class="user-box">
				<input type="email" name="adminEmail" value="<?php echo $_COOKIE['admin_Email'] ?>" required="">
				<label>Admin Email</label>
			</div>
			
			<div class="user-box">
				<input type="password" name="adminPassword" value="<?php echo $_COOKIE['admin_password'] ?>" required="">
				<label>Password</label>
			</div>
			<div class="form-check mb-0">
              <input class="form-check-input me-2" name="userRemember" type="checkbox" value="1" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
			
			<a class="small text-muted" href="forget_password_admin.php">Forgot password?</a>
			<a  href="#">
				<button type="submit" class="btn" name="Login" value="login">Log In</button>
			</a>
		</form>
	</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</html>


