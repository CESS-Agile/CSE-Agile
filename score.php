<!doctype html>
<html>
<style>
body {
background-image: url("math4.jpg");
background-size: 1500px 800px;
background-repeat: no-repeat;
font-size: 20px;
color: yellow; }
h1{
color: DarkBlue;
}

.class1
{
font-size: 100px;
text-align: center;
font-style: italic;
font-weight: bold;
color: white;
}
h1{
	font-size: 100px;
text-align: center;
font-style: italic;
font-weight: bold;
color: white;
}

.class2
{
text-align: center;
font-size: 30px;
font-style: italic;
font-weight: bold;
color: Blue;
}

a:link, a:visited {
    background-color: crimson;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
 display:block;
width:150px;
position: center;
}


a:hover, a:active {
	
	position: center;
    background-color: red;
}
</style>
<body>
<p class= "class1"> Congratulations!</p>
<?php
$choice1=$_POST{'choice1'};
$choice2=$_POST{'choice2'};
$choice3=$_POST{'choice3'};
$choice4=$_POST{'choice4'};
$choice5=$_POST{'choice5'};
$correct=0;
if ($choice1=="b")
	$correct=$correct+1;
if ($choice2=="b")
	$correct=$correct+1;
if ($choice3=="a")
$correct=$correct+1;
if ($choice4=="b")
$correct=$correct+1;
if ($choice5=="a")
$correct=$correct+1;
echo"<h1> Your score is $correct/5</h1>";
echo "<a href= 'http://localhost/agile2/welcome.php'> Back to Homepage </a>";

?>
</body>
</html>