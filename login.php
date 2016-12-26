<!doctype html> <?php session_start();?>
<html>
<style>
body { 
background-image: url("math4.jpg");
background-size: 1500px 800px;
background-repeat: no-repeat;
font-size: 20px;
color: DarkBlue; }
h1{
color: DarkBlue;
}
</style>
<h1> Login </h1>
<body>
<form action="logincheck.php" method="post">
Username<br>
<input type="text" name="Username">
<br><br><br>
Password<br>
<input type="password" name="Password">
<br><br><br>
<input type="submit" value="Login">
</form>
</body>
</html>

