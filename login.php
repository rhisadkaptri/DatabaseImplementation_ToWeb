<!DOCTYPE html>
<html>
	<head>
		<link href="images/fav-icon.png" rel="icon" type="image/png">
		<title>Form Login</title>
		<link rel = "stylesheet" href = "css/style2.css">
	</head>
	
	<body style = "background-image : url(images/13.jpg); background-size : cover;
	background-position : center;">
		<main>
			<form method = "POST" action = "login_aksi.php">
				<table class = "center box">
					<tr> 
						<td><h1>LOGIN HERE</h1></td>
					</tr>
					<tr>
						<td>
							<label for = "username">Username</label> 
							<br>
							<input name="username" class = "box-input" required type = "text" placeholder = "Enter Your Username"/>
						</td>
					</tr>
					<tr>
						<td>
							<label for = "password">Password</label>
							<br>
							<input name="password" class = "box-input" required type = "password" placeholder = "Enter Your Password"/>
						</td>
					</tr>
					<tr>
						<td>
							<input type = "checkbox"/>
							<label for = "checkbox">Remember password</label>
						</td>
					</tr>
					<tr>
						<td>
							<p>
							<input class = "btn" type = "submit" value = "Login"/>
							</p>
						</td>
					</tr>

				</table>	
			</form>
		</main>
	</body>	
	
	<footer>
		<p>Copyright &copy; 2021 SDBL4. All rights reserved.</p>
	</footer>
</html>