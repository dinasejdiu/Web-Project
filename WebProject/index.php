<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>


<form action="login.php" method="post">
<h2>Log In</h2>
<?php if (isset($_GET['error'])) {?>
<p class="error"><?php echo $_GET['error'];?></p>
<?php }?>
<label>User Name</label>
<input type="text" name="uname" placeholder="User Name">
<label>Password</label>
<input type="password" name="password" placeholder="Password">
<button type="submit">LogIn</button>


<html>
