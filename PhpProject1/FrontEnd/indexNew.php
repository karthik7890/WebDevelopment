<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
     <form action="signin.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        
        <label>FullName</label>
        <input type="text"  name="name" placeholder="name"><br>       
        
     	<label>Email</label>
     	<input type="email" name="email" placeholder="email"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <!-- <a href="login.php" class="ca">Create an account</a> -->
     </form>
</body>
</html>
