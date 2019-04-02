
<!DOCTYPE html>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration system PHP and MySQL</title>
  
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
  
  <div class="form1">
    <form method="post" action="login.php">
      
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" >
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
      </div>
      <div class="input-group">
        <button type="submit" class="button" name="login_user">Login</button>
      </div>
      <p>
        Not yet a member? <a href="register.php">Sign up</a>
      </p>
    </form>
  </div>
</body>
</html>