<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="/assets/css/loginregis.css">
  
</head>
<body style="background-color: #666666;">

	<form action="/register_proses" method="POST" class="login100-form validate-form">
		@csrf

		@if (session()->has('error'))
			<h5 class="text-center text-danger">{{ sessioon('error') }}</h5>
		@endif
		<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>SELAMAT DATANG 
				<br>
				<span>DI HALAMAN 
					<BR>ADMIN PROPERTI</span>
			</div>
		</div>
		<br>
		<div class="login">

				<input type="text" placeholder="Nama" name="name" id="name"><br>
				@error('name')
					<small class="text-danger">{{ $message }}</small>
				@enderror
				<input type="text" placeholder="Email" name="email" id="email"><br>
				@error('email')
					<small class="text-danger">{{ $message }}</small>
				@enderror
				<input type="password" placeholder="password" name="password"><br>
				@error('password')
					<small class="text-danger">{{ $message }}</small>
				@enderror
				<input type="password" placeholder="Konfirmasi Password" name="password_confirmation" id="password">
				@error('password')
					<small class="text-danger">{{ $message }}</small>
				@enderror
				<input type="submit" value="Login">
				<br>
				<div class="text-center p-t-46 p-b-20">
					<span class="txt2">
						Sudah punya akun? <a href="/">Login</a>
					</span>
				</div>
		</div>	

 

  <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assetsjs/main.js"></script>
</body>
</html>