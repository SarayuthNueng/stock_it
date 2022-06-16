<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/css/style-login.css" />
	<link rel="stylesheet" href="assets/css/style-drop-drown.css" />
	<link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>
	<title>ระบบวัสดุคงคลังIT | โรงพยาบาลสมเด็จ</title>
</head>

<body>
	<div class="container">
		<div class="forms-container">
			<div class="signin-signup">

				<form class="sign-in-form" name="frmlogin" method="post" action="checklogin.php">
					<img src="assets/img_login/logo-sd.png" style="width: 40%; margin-bottom: 5%;" />
					<h2 class="title">ระบบวัสดุคงคลัง IT</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="ชื่อผู้ใช้" id="username" required name="username" />
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="รหัสผ่าน" id="password" required name="password" />
					</div>
					<input type="submit" value="เข้าสู่ระบบ" class="btn solid" />
				</form>

				<form action="#" class="sign-up-form">
					<h2 class="title">สมัครสมาชิก</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="ชื่อผู้ใช้" required/>
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="รหัสผ่าน" required/>
					</div>

					<select class="input-field" style="border: none; margin: 10px 0; font-size: 1.1rem; color: #acacac;" required>
						<option selected="selected">คำนำหน้า</option>
						<option value="1">One</option>
					</select>
				
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="ชื่อ-นามสกุล" required/>
					</div>
					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input type="cid" placeholder="เลขบัตรประชาชน" required/>
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="เบอร์โทรศัพท์" required/>
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="หน่วยงาน" required/>
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="ตำแหน่ง" required/>
					</div>
					<input type="submit" class="btn" value="สมัครสมาชิก" />
				</form>

			</div>
		</div>

		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<button class="btn transparent" id="sign-up-btn">
						สมัครสมาชิก
					</button>
				</div>
				<img src="assets/img_login/bg-rm.png" class="image" alt="" />
			</div>
			<div class="panel right-panel">
				<div class="content">
					<button class="btn transparent" id="sign-in-btn">
						เข้าสู่ระบบ
					</button>
				</div>
				<img src="assets/img_login/register.svg" class="image" alt="" />
			</div>
		</div>
	</div>

	<script src="assets/js/main.js"></script>
	<script src="assets/js/main-drop-drown.js"></script>
</body>

</html>