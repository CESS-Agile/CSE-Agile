<!DOCTYPE html>
<html>
<style>
body { 
background-image: url("math4.jpg");
background-size: 1500px 800px;
background-repeat: no-repeat;
font-size: 20px;
color: DarkBlue;
}
a
{
text-decoration:none;
}

</style>
<body>
<div id="register" class="animate form">
<form  action="AgileConnect.php" method="post">
<h1> Sign up Form </h1>
<p>
<label for="Name" class="fname" data-icon="u">Your Firstname</label></br>
<input id="Name" name="Name" required="required" type="text" placeholder="mysuperfirstname690" />
</p>

<p>
<label for="Username" class="uname" data-icon="u">Your username</label></br>
<input id="Username" name="Username" required="required" type="text" placeholder="mysuperusername690" />
</p>
<p>
<label for="Email" class="youmail" data-icon="e" > Your email</label></br>
<input id="Email" name="Email" required="required" type="email" placeholder="mysupermail@mail.com"/>
</p>
<p>
<label for="Password" class="youpasswd" data-icon="p">Your password </label></br>
<input id="Password" name="Password" required="required" type="password" placeholder="eg. X8df!90EO"/>
</p>
<p>
<label for="Passwordconfirm" class="youpasswd" data-icon="p">Please confirm your password </label></br>
<input id="passwordsignup_confirm" name="Passwordconfirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
</p>
<p class="signin button">
<input type="submit" value="Sign up"/>
</p>
<p class="change_link">