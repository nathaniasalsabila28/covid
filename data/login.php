<html iang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, instial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="http://localhost/covid/aset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/covid/aset/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register</title>
</head>
<body >
<div id="card">
	<form method="post" action="proseslogin.php">
	<div class="kotak_login1">
	<div id="card-content">
	<div id="card-title">
	<h2 class="card-title"><i class=""></i>Form Login</h2>
	<div class="underline-title"></div>
	</div>
	</div>
	<form>
		
		<label style="padding-top:13px"></label>
		<center>
		<input type="text" name="username" class="form_login" placeholder="Username" required><div class="form-border"></div>
		</center>
		<label style="padding-top:22px"></label>
		<center>
		<input type="password" name="password" class="form_login" placeholder="Password" required><div class="form-border"></div>
		<div class="container">
		</div>
			<button type="submit" class="a" name="login">login</button>
		</center>
	</form>
	</div>
	</form>
</div>
</body>

<?php
include '../aset/footer.php';
?>