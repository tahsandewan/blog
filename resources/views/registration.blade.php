
<link href="css/style1.css" rel="stylesheet" type="text/css" >

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	<div class="form1">
		<form method="post">

			<div class="input-group">
				<label>Username</label>
				<input type="text" ng-model="registerinfo.name"name="username" value="">
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="text" ng-model="registerinfo.email"name="email" value="">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" ng-model="registerinfo.pass"name="password_1">
			</div>
			<div class="input-group">
				<label>Confirm password</label>
				<input type="password" ng-model="registerinfo.pass2"name="password_2">
			</div>
			<div class="input-group">
				<button type="submit" class="button" ng-click="register()"name="reg_user">Register</button>
			</div>
			<pre>
				@{{registerinfo | json}}
			</pre>
			<p>
				Already a member? <a ui-sref="login">Log in</a>
			</p>
		</form>
	</div>

</body>
</html>
