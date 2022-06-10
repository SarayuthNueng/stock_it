<!DOCTYPE html>
<html>
<head>
	<title>วัสดุคงคลัง | IT</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style-login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="assets/img_login/wave.png">
	<div class="container">
		<div class="img">
			<img src="assets/img_login/bg-rm.png">
		</div>
		<div class="login-content">
			<form name="frmlogin"  method="post" action="checklogin.php">
				<img src="assets/img_login/logo-sd.png">
				<h2 class="title">ระบบวัสดุคงคลังIT</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>ชื่อผู้ใช้</h5>
           		   		<input type="text" class="input" id="username"required name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>รหัสผ่าน</h5>
           		    	<input type="password" class="input" id="password"required name="password">
            	   </div>
            	</div>
            	<!-- <a href="#">Forgot Password?</a> -->
            	<input type="submit" class="btn" value="เข้าสู่ระบบ">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>
