
<!DOCTYPE html>
<html>
<head>
	<title>registration form creation</title>
	<link rel="stylesheet"  href="style1.css" >
</head>
<body>
	<h1>Create an account</h1>
	<div class="register">
		
		<form id ="register" method="post" action="register.php">
			<h2>Registration Form</h2>
		<label> Name :</label><br>
			<input type="text" name="name" id="name" placeholder="Enter Full Name"><br><br>
			<label>Address :</label><br>
			<input type="text" name="address" id="address" placeholder="Address"><br><br>
			<label>Street :</label><br>
			<input type="text" name="street" id="street" placeholder="Street "><br><br>
			<label>City :</label><br>
			<input type="text" name="city" id="city" placeholder="City "><br><br>
			<label>Phone Number:</label><br>
			<input type="number" name="phonenumber" id="phonenumber" placeholder="Phone Number "><br><br>
			<label>Age :</label><br>
			<input type="num" name="age" id="age" placeholder="Age "><br><br>
			<label>Address :</label><br>
			<label>Email :</label><br>
			<input type="email" name="emailaddress" id="name" placeholder="Enter your Email"><br><br>
			<label>password :</label><br>
			<input type="password" id="psw" name="psw" placeholder="Enter your Password"><br><br>
			
			<input type="submit"value="submit" name="submit"><br><br>

		<p>Already a member: <a class="text-white" href="userlogin.php">SIGN IN</a>
    </p>
		</form>
	</div>

</body>
</html>